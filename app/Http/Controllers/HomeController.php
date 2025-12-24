<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        // Cache homepage data for 1 hour
        $featuredPackages = Cache::remember('home_featured_packages', 3600, function () {
            return Package::active()
                ->featured()
                ->with('destination')
                ->orderBy('sort_order')
                ->limit(6)
                ->get();
        });

        $popularDestinations = Cache::remember('home_popular_destinations', 3600, function () {
            return Destination::active()
                ->featured()
                ->withCount(['packages' => function ($query) {
                    $query->active();
                }])
                ->orderBy('sort_order')
                ->limit(6)
                ->get();
        });

        $latestPackages = Cache::remember('home_latest_packages', 3600, function () {
            return Package::active()
                ->with('destination')
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get();
        });

        return view('public.home', [
            'featuredPackages' => $featuredPackages,
            'popularDestinations' => $popularDestinations,
            'latestPackages' => $latestPackages,
            'seoTitle' => config('app.name') . ' - Best Travel Packages & Tours',
            'seoDescription' => 'Discover amazing travel packages and tours. Book your dream vacation with our expertly curated travel experiences.',
        ]);
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        return view('public.about', [
            'seoTitle' => 'About Us | ' . config('app.name'),
            'seoDescription' => 'Learn about our travel agency and our commitment to providing unforgettable travel experiences.',
        ]);
    }

    /**
     * Display the contact page.
     */
    public function contact(): View
    {
        return view('public.contact', [
            'seoTitle' => 'Contact Us | ' . config('app.name'),
            'seoDescription' => 'Get in touch with our travel experts. We\'re here to help you plan your perfect vacation.',
        ]);
    }
}


