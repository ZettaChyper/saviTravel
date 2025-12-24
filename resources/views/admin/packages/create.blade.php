@extends('layouts.admin')

@php $title = 'Add Package'; @endphp

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
    <div class="p-6 border-b border-gray-100">
        <h1 class="text-xl font-bold text-gray-900">Create New Package</h1>
    </div>

    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Main Content --}}
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <label for="title" class="form-label">Package Title *</label>
                    <input type="text" name="title" id="title" class="input-field" required value="{{ old('title') }}">
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="slug" class="form-label">Slug (auto-generated if empty)</label>
                    <input type="text" name="slug" id="slug" class="input-field" value="{{ old('slug') }}">
                    @error('slug')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="short_description" class="form-label">Short Description *</label>
                    <textarea name="short_description" id="short_description" rows="3" class="input-field" required>{{ old('short_description') }}</textarea>
                    <p class="text-gray-500 text-sm mt-1">Max 500 characters. Used in listings and previews.</p>
                    @error('short_description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="full_description" class="form-label">Full Description *</label>
                    <textarea name="full_description" id="full_description" rows="10" class="input-field" required>{{ old('full_description') }}</textarea>
                    @error('full_description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="price" class="form-label">Price ($) *</label>
                        <input type="number" name="price" id="price" class="input-field" step="0.01" min="0" required value="{{ old('price') }}">
                        @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="duration" class="form-label">Duration *</label>
                        <input type="text" name="duration" id="duration" class="input-field" placeholder="e.g., 3 Days / 2 Nights" required value="{{ old('duration') }}">
                        @error('duration')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="location" class="form-label">Location *</label>
                        <input type="text" name="location" id="location" class="input-field" placeholder="e.g., Bali, Indonesia" required value="{{ old('location') }}">
                        @error('location')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="destination_id" class="form-label">Destination</label>
                    <select name="destination_id" id="destination_id" class="input-field">
                        <option value="">Select Destination (Optional)</option>
                        @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}" {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
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
                            <input type="text" name="seo_title" id="seo_title" class="input-field" maxlength="70" value="{{ old('seo_title') }}">
                            <p class="text-gray-500 text-sm mt-1">Max 70 characters. Leave empty to use package title.</p>
                        </div>

                        <div>
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" id="seo_description" rows="2" class="input-field" maxlength="160">{{ old('seo_description') }}</textarea>
                            <p class="text-gray-500 text-sm mt-1">Max 160 characters. Leave empty to use short description.</p>
                        </div>

                        <div>
                            <label for="seo_keywords" class="form-label">Keywords</label>
                            <input type="text" name="seo_keywords" id="seo_keywords" class="input-field" value="{{ old('seo_keywords') }}">
                            <p class="text-gray-500 text-sm mt-1">Comma-separated keywords</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-6">
                {{-- Featured Image --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Featured Image</label>
                    <div class="mt-2">
                        <input type="file" name="featured_image" id="featured_image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                    <p class="text-gray-500 text-xs mt-2">Recommended: 1200x800px, max 2MB</p>
                    @error('featured_image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Gallery --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Gallery Images</label>
                    <div class="mt-2">
                        <input type="file" name="gallery_images[]" id="gallery_images" accept="image/*" multiple class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    </div>
                    <p class="text-gray-500 text-xs mt-2">Select multiple images</p>
                </div>

                {{-- Status --}}
                <div class="bg-gray-50 rounded-xl p-4 space-y-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600 focus:ring-primary-500" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Active</span>
                    </label>

                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600 focus:ring-primary-500" {{ old('is_featured') ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Featured</span>
                    </label>
                </div>

                {{-- Sort Order --}}
                <div class="bg-gray-50 rounded-xl p-4">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" class="input-field" value="{{ old('sort_order', 0) }}">
                    <p class="text-gray-500 text-xs mt-2">Lower numbers appear first</p>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex items-center justify-end gap-4">
            <a href="{{ route('admin.packages.index') }}" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary">Create Package</button>
        </div>
    </form>
</div>
@endsection


