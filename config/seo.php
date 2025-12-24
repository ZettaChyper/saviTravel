<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default SEO Settings
    |--------------------------------------------------------------------------
    */

    'default' => [
        'title' => env('APP_NAME', 'Savi Travel') . ' - Best Travel Packages & Tours',
        'description' => 'Discover amazing travel packages and tours with Savi Travel. Book your dream vacation today with our expertly curated travel experiences.',
        'keywords' => 'travel, tours, packages, vacation, holiday, adventure, destinations',
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Graph Settings
    |--------------------------------------------------------------------------
    */

    'og' => [
        'type' => 'website',
        'site_name' => env('APP_NAME', 'Savi Travel'),
        'locale' => 'en_US',
    ],

    /*
    |--------------------------------------------------------------------------
    | Twitter Card Settings
    |--------------------------------------------------------------------------
    */

    'twitter' => [
        'card' => 'summary_large_image',
        'site' => '@savitravel',
    ],

    /*
    |--------------------------------------------------------------------------
    | Organization Schema
    |--------------------------------------------------------------------------
    */

    'organization' => [
        'name' => env('APP_NAME', 'Savi Travel'),
        'url' => env('APP_URL', 'https://savitravel.com'),
        'logo' => '/images/logo.png',
        'phone' => '+1 234 567 890',
        'email' => 'info@savitravel.com',
        'address' => [
            'street' => '123 Travel Street',
            'city' => 'Adventure City',
            'state' => 'AC',
            'postal_code' => '12345',
            'country' => 'US',
        ],
        'social' => [
            'facebook' => 'https://facebook.com/savitravel',
            'instagram' => 'https://instagram.com/savitravel',
            'twitter' => 'https://twitter.com/savitravel',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Settings
    |--------------------------------------------------------------------------
    */

    'whatsapp' => [
        'number' => env('WHATSAPP_NUMBER', '1234567890'),
        'default_message' => 'Hello! I am interested in your travel packages.',
    ],
];


