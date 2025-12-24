@extends('layouts.app')

@section('content')
{{-- Hero Banner --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/packages-banner.jpg') }}" alt="Sri Lanka Travel Packages" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/90 via-primary-800/80 to-primary-900/70"></div>
    </div>
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <div class="max-w-3xl animate-fade-in-left">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-primary-200 text-sm font-medium mb-6 animate-bounce-in">
                🌴 Explore Sri Lanka's Best Packages
            </span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                Travel Packages
            </h1>
            <p class="text-xl text-primary-100 max-w-2xl animate-fade-in-up" style="animation-delay: 0.4s;">
                Discover our collection of carefully curated Sri Lankan travel experiences - from ancient ruins to pristine beaches
            </p>
            <nav class="mt-6 animate-fade-in-up" style="animation-delay: 0.6s;" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-primary-200">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-white font-semibold">Travel Packages</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Filters & Packages --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Filters --}}
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-10 animate-fade-in-up">
            <form action="{{ route('packages.index') }}" method="GET" class="flex flex-wrap gap-4 items-end">
                <div class="flex-1 min-w-[200px]">
                    <label for="destination" class="form-label">Destination</label>
                    <select name="destination" id="destination" class="input-field">
                        <option value="">All Destinations</option>
                        @foreach($destinations as $destination)
                        <option value="{{ $destination->slug }}" {{ request('destination') == $destination->slug ? 'selected' : '' }}>
                            {{ $destination->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1 min-w-[150px]">
                    <label for="min_price" class="form-label">Min Price</label>
                    <input type="number" name="min_price" id="min_price" class="input-field" placeholder="$0" value="{{ request('min_price') }}">
                </div>
                <div class="flex-1 min-w-[150px]">
                    <label for="max_price" class="form-label">Max Price</label>
                    <input type="number" name="max_price" id="max_price" class="input-field" placeholder="$10000" value="{{ request('max_price') }}">
                </div>
                <div class="flex-1 min-w-[150px]">
                    <label for="sort" class="form-label">Sort By</label>
                    <select name="sort" id="sort" class="input-field">
                        <option value="featured" {{ $currentSort == 'featured' ? 'selected' : '' }}>Featured</option>
                        <option value="price_low" {{ $currentSort == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                        <option value="price_high" {{ $currentSort == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                        <option value="newest" {{ $currentSort == 'newest' ? 'selected' : '' }}>Newest First</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="btn-primary lift-hover">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Filter
                    </button>
                    <a href="{{ route('packages.index') }}" class="btn-outline lift-hover">Reset</a>
                </div>
            </form>
        </div>

        {{-- Results Count --}}
        <div class="flex items-center justify-between mb-8 animate-fade-in-up" style="animation-delay: 0.2s;">
            <p class="text-gray-600">
                Showing <span class="font-semibold">{{ $packages->firstItem() ?? 0 }}</span> -
                <span class="font-semibold">{{ $packages->lastItem() ?? 0 }}</span> of
                <span class="font-semibold">{{ $packages->total() }}</span> packages
            </p>
        </div>

        {{-- Packages Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($packages as $package)
            <article class="card group card-3d animate-fade-in-up" style="animation-delay: {{ $loop->index * 0.05 + 0.2 }}s;">
                <div class="inner-card">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="{{ $package->featured_image_url }}"
                             alt="{{ $package->title }}"
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                             loading="lazy">
                        @if($package->is_featured)
                        <span class="absolute top-4 left-4 bg-accent-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse-glow">
                            Featured
                        </span>
                        @endif
                        <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2 tilt-effect">
                            <span class="text-primary-600 font-bold">{{ $package->formatted_price }}</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            {{ $package->location }}
                        </div>
                        <h2 class="text-lg font-display font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors line-clamp-2">
                            <a href="{{ route('packages.show', $package) }}">{{ $package->title }}</a>
                        </h2>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $package->duration }}
                        </div>
                        <a href="{{ route('packages.show', $package) }}"
                           class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors lift-hover">
                            View Details
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-16 animate-fade-in-up">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No packages found</h3>
                <p class="text-gray-500">Try adjusting your filters or check back later.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($packages->hasPages())
        <div class="mt-12 animate-fade-in-up" style="animation-delay: 0.5s;">
            {{ $packages->links() }}
        </div>
        @endif
    </div>
</section>

{{-- CTA Section --}}
<section class="py-16 bg-gradient-to-r from-primary-600 to-accent-600">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in-up">
        <h2 class="text-3xl font-display font-bold text-white mb-4">Can't Find What You're Looking For?</h2>
        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Let us customize a perfect Sri Lankan adventure just for you!
        </p>
        <a href="{{ route('contact') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold text-lg px-8 py-3 rounded-lg transition-all duration-300 lift-hover inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Request Custom Package
        </a>
    </div>
</section>
@endsection
