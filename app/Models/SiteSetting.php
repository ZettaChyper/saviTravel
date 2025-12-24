<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
    ];

    /**
     * Cache key for settings.
     */
    private const CACHE_KEY = 'site_settings';

    /**
     * Cache duration in seconds.
     */
    private const CACHE_DURATION = 86400; // 24 hours

    /**
     * Get a setting value by key.
     */
    public static function get(string $key, $default = null)
    {
        $settings = self::getAllCached();
        return $settings[$key] ?? $default;
    }

    /**
     * Set a setting value.
     */
    public static function set(string $key, $value, string $type = 'text', string $group = 'general'): void
    {
        self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type, 'group' => $group]
        );
        self::clearCache();
    }

    /**
     * Get all settings from cache.
     */
    public static function getAllCached(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_DURATION, function () {
            return self::pluck('value', 'key')->toArray();
        });
    }

    /**
     * Get settings by group.
     */
    public static function getByGroup(string $group): array
    {
        return self::where('group', $group)->pluck('value', 'key')->toArray();
    }

    /**
     * Clear the settings cache.
     */
    public static function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Get default settings.
     */
    public static function getDefaults(): array
    {
        return [
            // General
            'site_name' => 'Savi Travel',
            'site_tagline' => 'Your Gateway to Amazing Adventures',
            'site_email' => 'info@savitravel.com',
            'site_phone' => '+1 234 567 890',
            'site_address' => '123 Travel Street, Adventure City, AC 12345',
            
            // Social
            'whatsapp_number' => '+1234567890',
            'facebook_url' => 'https://facebook.com/savitravel',
            'instagram_url' => 'https://instagram.com/savitravel',
            'twitter_url' => 'https://twitter.com/savitravel',
            
            // SEO
            'default_seo_title' => 'Savi Travel - Best Travel Packages & Tours',
            'default_seo_description' => 'Discover amazing travel packages and tours with Savi Travel. Book your dream vacation today!',
            'google_analytics_id' => '',
            
            // Contact
            'google_maps_embed' => '',
        ];
    }

    /**
     * Initialize default settings.
     */
    public static function initializeDefaults(): void
    {
        foreach (self::getDefaults() as $key => $value) {
            if (!self::where('key', $key)->exists()) {
                self::create([
                    'key' => $key,
                    'value' => $value,
                    'type' => 'text',
                    'group' => 'general',
                ]);
            }
        }
        self::clearCache();
    }
}


