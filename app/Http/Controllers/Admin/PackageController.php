<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PackageController extends Controller
{
    /**
     * Display a listing of packages.
     */
    public function index(Request $request): View
    {
        $query = Package::with('destination');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        $packages = $query->orderBy('created_at', 'desc')
            ->paginate(15)
            ->withQueryString();

        return view('admin.packages.index', [
            'packages' => $packages,
        ]);
    }

    /**
     * Show the form for creating a new package.
     */
    public function create(): View
    {
        $destinations = Destination::active()->orderBy('name')->get();

        return view('admin.packages.create', [
            'destinations' => $destinations,
        ]);
    }

    /**
     * Store a newly created package.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:packages,slug',
            'short_description' => 'required|string|max:500',
            'full_description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string|max:100',
            'location' => 'required|string|max:255',
            'destination_id' => 'nullable|exists:destinations,id',
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
                ->store('packages', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('packages/gallery', 'public');
            }
            $validated['gallery_images'] = $galleryImages;
        }

        // Set defaults
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Package::create($validated);

        // Clear cache
        $this->clearPackageCache();

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package created successfully!');
    }

    /**
     * Show the form for editing the specified package.
     */
    public function edit(Package $package): View
    {
        $destinations = Destination::active()->orderBy('name')->get();

        return view('admin.packages.edit', [
            'package' => $package,
            'destinations' => $destinations,
        ]);
    }

    /**
     * Update the specified package.
     */
    public function update(Request $request, Package $package): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:packages,slug,' . $package->id,
            'short_description' => 'required|string|max:500',
            'full_description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string|max:100',
            'location' => 'required|string|max:255',
            'destination_id' => 'nullable|exists:destinations,id',
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
            if ($package->featured_image) {
                Storage::disk('public')->delete($package->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')
                ->store('packages', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = $package->gallery_images ?? [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('packages/gallery', 'public');
            }
            $validated['gallery_images'] = $galleryImages;
        }

        // Set defaults
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_active'] = $request->boolean('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $package->update($validated);

        // Clear cache
        $this->clearPackageCache();

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package updated successfully!');
    }

    /**
     * Remove the specified package.
     */
    public function destroy(Package $package): RedirectResponse
    {
        // Delete images
        if ($package->featured_image) {
            Storage::disk('public')->delete($package->featured_image);
        }
        if ($package->gallery_images) {
            foreach ($package->gallery_images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $package->delete();

        // Clear cache
        $this->clearPackageCache();

        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package deleted successfully!');
    }

    /**
     * Remove a gallery image.
     */
    public function removeGalleryImage(Request $request, Package $package): RedirectResponse
    {
        $imageIndex = $request->input('image_index');
        $galleryImages = $package->gallery_images ?? [];

        if (isset($galleryImages[$imageIndex])) {
            Storage::disk('public')->delete($galleryImages[$imageIndex]);
            unset($galleryImages[$imageIndex]);
            $package->update(['gallery_images' => array_values($galleryImages)]);
        }

        return back()->with('success', 'Image removed successfully!');
    }

    /**
     * Clear package-related cache.
     */
    private function clearPackageCache(): void
    {
        Cache::forget('home_featured_packages');
        Cache::forget('home_latest_packages');
    }
}


