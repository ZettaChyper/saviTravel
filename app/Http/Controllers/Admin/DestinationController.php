<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DestinationController extends Controller
{
    /**
     * Display a listing of destinations.
     */
    public function index(Request $request): View
    {
        $query = Destination::withCount('packages');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%");
            });
        }

        $destinations = $query->orderBy('created_at', 'desc')
            ->paginate(15)
            ->withQueryString();

        return view('admin.destinations.index', [
            'destinations' => $destinations,
        ]);
    }

    /**
     * Show the form for creating a new destination.
     */
    public function create(): View
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created destination.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug',
            'short_description' => 'required|string|max:500',
            'full_description' => 'nullable|string',
            'country' => 'required|string|max:100',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images.*' => 'nullable|image|max:2048',
            'seo_title' => 'nullable|string|max:70',
            'seo_description' => 'nullable|string|max:160',
            'seo_keywords' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')
                ->store('destinations', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('destinations/gallery', 'public');
            }
            $validated['gallery_images'] = $galleryImages;
        }

        // Set defaults
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Destination::create($validated);

        // Clear cache
        $this->clearDestinationCache();

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination created successfully!');
    }

    /**
     * Show the form for editing the specified destination.
     */
    public function edit(Destination $destination): View
    {
        return view('admin.destinations.edit', [
            'destination' => $destination,
        ]);
    }

    /**
     * Update the specified destination.
     */
    public function update(Request $request, Destination $destination): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug,' . $destination->id,
            'short_description' => 'required|string|max:500',
            'full_description' => 'nullable|string',
            'country' => 'required|string|max:100',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images.*' => 'nullable|image|max:2048',
            'seo_title' => 'nullable|string|max:70',
            'seo_description' => 'nullable|string|max:160',
            'seo_keywords' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($destination->featured_image) {
                Storage::disk('public')->delete($destination->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')
                ->store('destinations', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = $destination->gallery_images ?? [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('destinations/gallery', 'public');
            }
            $validated['gallery_images'] = $galleryImages;
        }

        // Set defaults
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $destination->update($validated);

        // Clear cache
        $this->clearDestinationCache();

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination updated successfully!');
    }

    /**
     * Remove the specified destination.
     */
    public function destroy(Destination $destination): RedirectResponse
    {
        // Check if destination has packages
        if ($destination->packages()->count() > 0) {
            return back()->with('error', 'Cannot delete destination with associated packages.');
        }

        // Delete images
        if ($destination->featured_image) {
            Storage::disk('public')->delete($destination->featured_image);
        }
        if ($destination->gallery_images) {
            foreach ($destination->gallery_images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $destination->delete();

        // Clear cache
        $this->clearDestinationCache();

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination deleted successfully!');
    }

    /**
     * Clear destination-related cache.
     */
    private function clearDestinationCache(): void
    {
        Cache::forget('home_popular_destinations');
        Cache::forget('all_destinations');
        Cache::forget('destinations_for_filter');
    }
}


