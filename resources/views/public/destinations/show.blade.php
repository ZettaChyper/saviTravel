@extends('layouts.app')

@push('head')
<meta property="og:image" content="{{ $destination->featured_image_url }}">
@endpush

@section('content')
{{-- Destination Hero --}}
<section class="relative h-[60vh] min-h-[400px]">
    <img src="{{ $destination->featured_image_url }}"
         alt="{{ $destination->name }}"
         class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-16">
        <div class="container mx-auto">
            <nav class="mb-4" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-white/70 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('destinations.index') }}" class="hover:text-white">Destinations</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-white">{{ $destination->name }}</li>
                </ol>
            </nav>
            <span class="text-primary-300 font-medium">{{ $destination->country }}</span>
            <h1 class="text-3xl md:text-5xl font-display font-bold text-white mt-2">{{ $destination->name }}</h1>
            <p class="text-xl text-white/90 mt-4 max-w-2xl">{{ $destination->short_description }}</p>
        </div>
    </div>
</section>

{{-- Destination Content --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @if($destination->full_description)
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">About {{ $destination->name }}</h2>
            <div class="prose prose-lg max-w-none text-gray-700">
                {!! nl2br(e($destination->full_description)) !!}
            </div>
        </div>
        @endif

        {{-- Gallery --}}
        @if($destination->gallery_images && count($destination->gallery_images) > 0)
        <div class="max-w-6xl mx-auto mb-16">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($destination->gallery_images as $image)
                <a href="{{ asset('storage/' . $image) }}"
                   class="block aspect-square overflow-hidden rounded-xl group"
                   target="_blank">
                    <img src="{{ asset('storage/' . $image) }}"
                         alt="{{ $destination->name }} gallery image"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300"
                         loading="lazy">
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

{{-- Packages in this Destination --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-display font-bold text-gray-900 mb-4">
                Travel Packages in {{ $destination->name }}
            </h2>
            <p class="text-gray-600">Explore our curated packages for this amazing destination</p>
        </div>

        @if($packages->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($packages as $package)
            <article class="card group">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ $package->featured_image_url }}"
                         alt="{{ $package->title }}"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                         loading="lazy">
                    @if($package->is_featured)
                    <span class="absolute top-4 left-4 bg-accent-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Featured
                    </span>
                    @endif
                    <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                        <span class="text-primary-600 font-bold">{{ $package->formatted_price }}</span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ $package->duration }}
                    </div>
                    <h3 class="text-lg font-display font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors line-clamp-2">
                        <a href="{{ route('packages.show', $package) }}">{{ $package->title }}</a>
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $package->short_description }}</p>
                    <a href="{{ route('packages.show', $package) }}"
                       class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                        View Details
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($packages->hasPages())
        <div class="mt-12">
            {{ $packages->links() }}
        </div>
        @endif
        @else
        <div class="text-center py-16">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
            <h3 class="text-xl font-semibold text-gray-700 mb-2">No packages available yet</h3>
            <p class="text-gray-500 mb-6">Check back soon for amazing travel packages to {{ $destination->name }}!</p>
            <a href="{{ route('packages.index') }}" class="btn-primary">Browse All Packages</a>
        </div>
        @endif
    </div>
</section>

{{-- CTA --}}
<section class="py-16 bg-gradient-to-r from-primary-600 to-accent-600">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-display font-bold text-white mb-4">
            Ready to Visit {{ $destination->name }}?
        </h2>
        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Let us help you plan the perfect trip. Contact our travel experts today!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/1234567890?text={{ urlencode('Hi! I am interested in visiting ' . $destination->name) }}"
               target="_blank"
               class="btn-whatsapp text-lg px-8">
                <svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                WhatsApp Us
            </a>
            <a href="{{ route('contact') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold text-lg px-8 py-3 rounded-lg transition-all duration-300">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection


