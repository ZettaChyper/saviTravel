<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class PackageController extends Controller
{
    /**
     * Display a listing of packages.
     */
    public function index(Request $request): View
    {
        $query = Package::active()
            ->with('destination');

        // Filter by destination
        if ($request->has('destination')) {
            $query->whereHas('destination', function ($q) use ($request) {
                $q->where('slug', $request->destination);
            });
        }

        // Filter by price range
        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Sort options
        $sortBy = $request->get('sort', 'featured');
        switch ($sortBy) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'featured':
            default:
                $query->orderBy('is_featured', 'desc')
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc');
                break;
        }

        $packages = $query->paginate(12)->withQueryString();

        // Get destinations for filter dropdown (cached)
        $destinations = Cache::remember('destinations_for_filter', 3600, function () {
            return \App\Models\Destination::active()
                ->orderBy('name')
                ->get(['id', 'name', 'slug']);
        });

        return view('public.packages.index', [
            'packages' => $packages,
            'destinations' => $destinations,
            'currentSort' => $sortBy,
            'seoTitle' => 'Travel Packages | ' . config('app.name'),
            'seoDescription' => 'Browse our collection of amazing travel packages. Find the perfect tour for your next adventure.',
        ]);
    }

    /**
     * Display the specified package.
     */
    public function show(Package $package): View
    {
        // Ensure package is active
        if (!$package->is_active) {
            abort(404);
        }

        // Get related packages
        $relatedPackages = Package::active()
            ->where('id', '!=', $package->id)
            ->where(function ($query) use ($package) {
                $query->where('destination_id', $package->destination_id)
                    ->orWhere('location', 'like', '%' . $package->location . '%');
            })
            ->limit(4)
            ->get();

        return view('public.packages.show', [
            'package' => $package,
            'relatedPackages' => $relatedPackages,
            'seoTitle' => $package->seo_title,
            'seoDescription' => $package->seo_description,
            'schemaOrg' => $package->schema_org,
        ]);
    }
}


