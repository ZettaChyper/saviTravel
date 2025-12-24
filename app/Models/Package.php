<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'full_description',
        'price',
        'duration',
        'location',
        'featured_image',
        'gallery_images',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'is_featured',
        'is_active',
        'sort_order',
        'destination_id',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'price' => 'decimal:2',
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

        static::creating(function ($package) {
            if (empty($package->slug)) {
                $package->slug = Str::slug($package->title);
            }
            // Ensure unique slug
            $originalSlug = $package->slug;
            $count = 1;
            while (static::where('slug', $package->slug)->exists()) {
                $package->slug = $originalSlug . '-' . $count++;
            }
        });

        static::updating(function ($package) {
            if ($package->isDirty('title') && !$package->isDirty('slug')) {
                $package->slug = Str::slug($package->title);
                // Ensure unique slug
                $originalSlug = $package->slug;
                $count = 1;
                while (static::where('slug', $package->slug)->where('id', '!=', $package->id)->exists()) {
                    $package->slug = $originalSlug . '-' . $count++;
                }
            }
        });
    }

    /**
     * Get the destination that owns the package.
     */
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * Get the inquiries for the package.
     */
    public function inquiries(): HasMany
    {
        return $this->hasMany(Inquiry::class);
    }

    /**
     * Scope for active packages.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured packages.
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
        return $value ?: $this->title . ' | ' . config('app.name');
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
        if ($this->featured_image) {
            // Check if it's a direct filename (seeded data) or storage path
            if (strpos($this->featured_image, '/') === false) {
                return asset('images/' . $this->featured_image);
            }
            return asset('storage/' . $this->featured_image);
        }
        return asset('images/default-package.jpg');
    }

    /**
     * Get formatted price.
     */
    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Generate Schema.org JSON-LD for this package.
     */
    public function getSchemaOrgAttribute(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'TouristTrip',
            'name' => $this->title,
            'description' => strip_tags($this->short_description),
            'image' => $this->featured_image_url,
            'touristType' => 'Traveler',
            'offers' => [
                '@type' => 'Offer',
                'price' => $this->price,
                'priceCurrency' => 'USD',
                'availability' => 'https://schema.org/InStock',
            ],
            'itinerary' => [
                '@type' => 'ItemList',
                'name' => $this->duration,
                'description' => $this->location,
            ],
        ];
    }
}

