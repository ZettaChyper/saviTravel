@extends('layouts.admin')

@php $title = 'Edit Destination'; @endphp

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.destinations.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Back to Destinations
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-900">Edit: {{ $destination->name }}</h1>
        <a href="{{ route('destinations.show', $destination) }}" target="_blank" class="text-primary-600 hover:text-primary-700 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
            View
        </a>
    </div>

    <form action="{{ route('admin.destinations.update', $destination) }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <label for="name" class="form-label">Destination Name *</label>
                    <input type="text" name="name" id="name" class="input-field" required value="{{ old('name', $destination->name) }}">
                </div>

                <div>
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" id="slug" class="input-field" value="{{ old('slug', $destination->slug) }}">
                </div>

                <div>
                    <label for="country" class="form-label">Country *</label>
                    <input type="text" name="country" id="country" class="input-field" required value="{{ old('country', $destination->country) }}">
                </div>

                <div>
                    <label for="short_description" class="form-label">Short Description *</label>
                    <textarea name="short_description" id="short_description" rows="3" class="input-field" required>{{ old('short_description', $destination->short_description) }}</textarea>
                </div>

                <div>
                    <label for="full_description" class="form-label">Full Description</label>
                    <textarea name="full_description" id="full_description" rows="8" class="input-field">{{ old('full_description', $destination->full_description) }}</textarea>
                </div>

                {{-- SEO --}}
                <div class="border-t border-gray-100 pt-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">SEO Settings</h2>
                    <div class="space-y-4">
                        <div>
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input type="text" name="seo_title" id="seo_title" class="input-field" value="{{ old('seo_title', $destination->getRawOriginal('seo_title')) }}">
                        </div>
                        <div>
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" id="seo_description" rows="2" class="input-field">{{ old('seo_description', $destination->getRawOriginal('seo_description')) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                @if($destination->featured_image)
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Current Image</label>
                    <img src="{{ $destination->featured_image_url }}" alt="{{ $destination->name }}" class="w-full rounded-lg mt-2">
                </div>
                @endif

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">{{ $destination->featured_image ? 'Replace' : 'Upload' }} Image</label>
                    <input type="file" name="featured_image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 mt-2">
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Add Gallery Images</label>
                    <input type="file" name="gallery_images[]" accept="image/*" multiple class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 mt-2">
                </div>

                <div class="bg-gray-50 rounded-xl p-4 space-y-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600" {{ old('is_active', $destination->is_active) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Active</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600" {{ old('is_featured', $destination->is_featured) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Featured</span>
                    </label>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" class="input-field" value="{{ old('sort_order', $destination->sort_order) }}">
                </div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-4">
            <a href="{{ route('admin.destinations.index') }}" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary">Update Destination</button>
        </div>
    </form>
</div>
@endsection


