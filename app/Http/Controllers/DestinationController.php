<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class DestinationController extends Controller
{
    /**
     * Display a listing of destinations.
     */
    public function index(): View
    {
        $destinations = Cache::remember('all_destinations', 3600, function () {
            return Destination::active()
                ->withCount(['packages' => function ($query) {
                    $query->active();
                }])
                ->orderBy('is_featured', 'desc')
                ->orderBy('sort_order')
                ->orderBy('name')
                ->paginate(12);
        });

        return view('public.destinations.index', [
            'destinations' => $destinations,
            'seoTitle' => 'Travel Destinations | ' . config('app.name'),
            'seoDescription' => 'Explore our beautiful travel destinations. Find your dream vacation spot and book amazing tours.',
        ]);
    }

    /**
     * Display the specified destination.
     */
    public function show(Destination $destination): View
    {
        // Ensure destination is active
        if (!$destination->is_active) {
            abort(404);
        }

        // Load packages for this destination
        $packages = $destination->packages()
            ->active()
            ->orderBy('is_featured', 'desc')
            ->orderBy('sort_order')
            ->paginate(12);

        return view('public.destinations.show', [
            'destination' => $destination,
            'packages' => $packages,
            'seoTitle' => $destination->seo_title,
            'seoDescription' => $destination->seo_description,
            'schemaOrg' => $destination->schema_org,
        ]);
    }
}


