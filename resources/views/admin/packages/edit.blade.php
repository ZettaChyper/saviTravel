@extends('layouts.admin')

@php $title = 'Edit Package'; @endphp

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.packages.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Back to Packages
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
        <h1 class="text-xl font-bold text-gray-900">Edit Package: {{ $package->title }}</h1>
        <a href="{{ route('packages.show', $package) }}" target="_blank" class="text-primary-600 hover:text-primary-700 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
            View
        </a>
    </div>

    <form action="{{ route('admin.packages.update', $package) }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Main Content --}}
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <label for="title" class="form-label">Package Title *</label>
                    <input type="text" name="title" id="title" class="input-field" required value="{{ old('title', $package->title) }}">
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" id="slug" class="input-field" value="{{ old('slug', $package->slug) }}">
                    @error('slug')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="short_description" class="form-label">Short Description *</label>
                    <textarea name="short_description" id="short_description" rows="3" class="input-field" required>{{ old('short_description', $package->short_description) }}</textarea>
                    @error('short_description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="full_description" class="form-label">Full Description *</label>
                    <textarea name="full_description" id="full_description" rows="10" class="input-field" required>{{ old('full_description', $package->full_description) }}</textarea>
                    @error('full_description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="price" class="form-label">Price ($) *</label>
                        <input type="number" name="price" id="price" class="input-field" step="0.01" min="0" required value="{{ old('price', $package->price) }}">
                    </div>

                    <div>
                        <label for="duration" class="form-label">Duration *</label>
                        <input type="text" name="duration" id="duration" class="input-field" required value="{{ old('duration', $package->duration) }}">
                    </div>

                    <div>
                        <label for="location" class="form-label">Location *</label>
                        <input type="text" name="location" id="location" class="input-field" required value="{{ old('location', $package->location) }}">
                    </div>
                </div>

                <div>
                    <label for="destination_id" class="form-label">Destination</label>
                    <select name="destination_id" id="destination_id" class="input-field">
                        <option value="">Select Destination (Optional)</option>
                        @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}" {{ old('destination_id', $package->destination_id) == $destination->id ? 'selected' : '' }}>
                            {{ $destination->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                {{-- SEO Section --}}
                <div class="border-t border-gray-100 pt-6 mt-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">SEO Settings</h2>

                    <div class="space-y-4">
                        <div>
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input type="text" name="seo_title" id="seo_title" class="input-field" maxlength="70" value="{{ old('seo_title', $package->getRawOriginal('seo_title')) }}">
                        </div>

                        <div>
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" id="seo_description" rows="2" class="input-field" maxlength="160">{{ old('seo_description', $package->getRawOriginal('seo_description')) }}</textarea>
                        </div>

                        <div>
                            <label for="seo_keywords" class="form-label">Keywords</label>
                            <input type="text" name="seo_keywords" id="seo_keywords" class="input-field" value="{{ old('seo_keywords', $package->seo_keywords) }}">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-6">
                {{-- Current Featured Image --}}
                @if($package->featured_image)
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Current Featured Image</label>
                    <img src="{{ $package->featured_image_url }}" alt="{{ $package->title }}" class="w-full rounded-lg mt-2">
                </div>
                @endif

                {{-- Featured Image --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">{{ $package->featured_image ? 'Replace' : 'Upload' }} Featured Image</label>
                    <div class="mt-2">
                        <input type="file" name="featured_image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                </div>

                {{-- Current Gallery --}}
                @if($package->gallery_images && count($package->gallery_images) > 0)
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Gallery Images</label>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        @foreach($package->gallery_images as $index => $image)
                        <div class="relative group">
                            <img src="{{ asset('storage/' . $image) }}" alt="Gallery" class="w-full aspect-square object-cover rounded-lg">
                            <form action="{{ route('admin.packages.remove-gallery', $package) }}" method="POST" class="absolute top-1 right-1">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="image_index" value="{{ $index }}">
                                <button type="submit" class="bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity" onclick="return confirm('Remove this image?')">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Add Gallery Images --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Add Gallery Images</label>
                    <div class="mt-2">
                        <input type="file" name="gallery_images[]" accept="image/*" multiple class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                </div>

                {{-- Status --}}
                <div class="bg-gray-50 rounded-xl p-4 space-y-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600 focus:ring-primary-500" {{ old('is_active', $package->is_active) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Active</span>
                    </label>

                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600 focus:ring-primary-500" {{ old('is_featured', $package->is_featured) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Featured</span>
                    </label>
                </div>

                {{-- Sort Order --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" class="input-field" value="{{ old('sort_order', $package->sort_order) }}">
                </div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-end gap-4">
            <a href="{{ route('admin.packages.index') }}" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary">Update Package</button>
        </div>
    </form>
</div>
@endsection


