<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Destination extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'full_description',
        'country',
        'image',
        'featured_image',
        'gallery_images',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($destination) {
            if (empty($destination->slug)) {
                $destination->slug = Str::slug($destination->name);
            }
            // Ensure unique slug
            $originalSlug = $destination->slug;
            $count = 1;
            while (static::where('slug', $destination->slug)->exists()) {
                $destination->slug = $originalSlug . '-' . $count++;
            }
        });

        static::updating(function ($destination) {
            if ($destination->isDirty('name') && !$destination->isDirty('slug')) {
                $destination->slug = Str::slug($destination->name);
                // Ensure unique slug
                $originalSlug = $destination->slug;
                $count = 1;
                while (static::where('slug', $destination->slug)->where('id', '!=', $destination->id)->exists()) {
                    $destination->slug = $originalSlug . '-' . $count++;
                }
            }
        });
    }

    /**
     * Get the packages for the destination.
     */
    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }

    /**
     * Scope for active destinations.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured destinations.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Get the SEO title (with fallback).
     */
    public function getSeoTitleAttribute($value): string
    {
        return $value ?: $this->name . ' Travel Packages | ' . config('app.name');
    }

    /**
     * Get the SEO description (with fallback).
     */
    public function getSeoDescriptionAttribute($value): string
    {
        return $value ?: Str::limit(strip_tags($this->short_description), 160);
    }

    /**
     * Get the featured image URL.
     */
    public function getFeaturedImageUrlAttribute(): string
    {
        // First check for direct image filename (for seeded data)
        if ($this->image) {
            return asset('images/' . $this->image);
        }
        // Then check for uploaded featured_image
        if ($this->featured_image) {
            return asset('storage/' . $this->featured_image);
        }
        return asset('images/default-destination.jpg');
    }

    /**
     * Get active packages count.
     */
    public function getActivePackagesCountAttribute(): int
    {
        return $this->packages()->active()->count();
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Generate Schema.org JSON-LD for this destination.
     */
    public function getSchemaOrgAttribute(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'TouristDestination',
            'name' => $this->name,
            'description' => strip_tags($this->short_description),
            'image' => $this->featured_image_url,
            'containedInPlace' => [
                '@type' => 'Country',
                'name' => $this->country,
            ],
        ];
    }
}

