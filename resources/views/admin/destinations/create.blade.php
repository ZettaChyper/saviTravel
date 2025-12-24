@extends('layouts.admin')

@php $title = 'Add Destination'; @endphp

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
    <div class="p-6 border-b border-gray-100">
        <h1 class="text-xl font-bold text-gray-900">Create New Destination</h1>
    </div>

    <form action="{{ route('admin.destinations.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div>
                    <label for="name" class="form-label">Destination Name *</label>
                    <input type="text" name="name" id="name" class="input-field" required value="{{ old('name') }}">
                    @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="country" class="form-label">Country *</label>
                    <input type="text" name="country" id="country" class="input-field" required value="{{ old('country') }}">
                    @error('country') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="short_description" class="form-label">Short Description *</label>
                    <textarea name="short_description" id="short_description" rows="3" class="input-field" required>{{ old('short_description') }}</textarea>
                    @error('short_description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="full_description" class="form-label">Full Description</label>
                    <textarea name="full_description" id="full_description" rows="8" class="input-field">{{ old('full_description') }}</textarea>
                </div>

                {{-- SEO --}}
                <div class="border-t border-gray-100 pt-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">SEO Settings</h2>
                    <div class="space-y-4">
                        <div>
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input type="text" name="seo_title" id="seo_title" class="input-field" maxlength="70" value="{{ old('seo_title') }}">
                        </div>
                        <div>
                            <label for="seo_description" class="form-label">Meta Description</label>
                            <textarea name="seo_description" id="seo_description" rows="2" class="input-field" maxlength="160">{{ old('seo_description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Featured Image</label>
                    <input type="file" name="featured_image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 mt-2">
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="form-label">Gallery Images</label>
                    <input type="file" name="gallery_images[]" accept="image/*" multiple class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 mt-2">
                </div>

                <div class="bg-gray-50 rounded-xl p-4 space-y-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_active" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Active</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" value="1" class="w-5 h-5 rounded border-gray-300 text-primary-600" {{ old('is_featured') ? 'checked' : '' }}>
                        <span class="font-medium text-gray-700">Featured</span>
                    </label>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label for="sort_order" class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" class="input-field" value="{{ old('sort_order', 0) }}">
                </div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-4">
            <a href="{{ route('admin.destinations.index') }}" class="btn-outline">Cancel</a>
            <button type="submit" class="btn-primary">Create Destination</button>
        </div>
    </form>
</div>
@endsection


