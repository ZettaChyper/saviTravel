@extends('layouts.app')

@section('content')
{{-- Hero Banner --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/destinations-banner.jpg') }}" alt="Sri Lanka Destinations" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/90 via-primary-800/80 to-primary-900/70"></div>
    </div>
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <div class="max-w-3xl animate-fade-in-left">
            <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-primary-200 text-sm font-medium mb-6 animate-bounce-in">
                🏛️ UNESCO World Heritage Sites & More
            </span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                Our Destinations
            </h1>
            <p class="text-xl text-primary-100 max-w-2xl animate-fade-in-up" style="animation-delay: 0.4s;">
                From ancient kingdoms to tropical paradises - explore the diverse beauty of the Pearl of the Indian Ocean
            </p>
            <nav class="mt-6 animate-fade-in-up" style="animation-delay: 0.6s;" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-primary-200">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-white font-semibold">Destinations</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Featured Destinations Stats --}}
<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 text-center animate-fade-in-up">
            <div class="float-animation" style="animation-delay: 0s;">
                <div class="text-3xl font-bold text-primary-600">8</div>
                <div class="text-gray-500 text-sm">UNESCO Sites</div>
            </div>
            <div class="float-animation" style="animation-delay: 0.2s;">
                <div class="text-3xl font-bold text-primary-600">1,340+</div>
                <div class="text-gray-500 text-sm">KM Coastline</div>
            </div>
            <div class="float-animation" style="animation-delay: 0.4s;">
                <div class="text-3xl font-bold text-primary-600">26</div>
                <div class="text-gray-500 text-sm">National Parks</div>
            </div>
            <div class="float-animation" style="animation-delay: 0.6s;">
                <div class="text-3xl font-bold text-primary-600">2,500+</div>
                <div class="text-gray-500 text-sm">Years of History</div>
            </div>
        </div>
    </div>
</section>

{{-- Destinations Grid --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-3xl font-display font-bold text-gray-900">Explore Sri Lanka's Treasures</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Each destination offers unique experiences - ancient ruins, wildlife encounters, pristine beaches, and scenic hill country</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($destinations as $destination)
            <a href="{{ route('destinations.show', $destination) }}"
               class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-lg card-3d animate-fade-in-up" style="animation-delay: {{ $loop->index * 0.1 + 0.2 }}s;">
                <div class="inner-card h-full">
                    <img src="{{ $destination->featured_image_url }}"
                         alt="{{ $destination->name }}"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    @if($destination->is_featured)
                    <span class="absolute top-4 left-4 bg-accent-500 text-white text-xs font-bold px-3 py-1 rounded-full animate-pulse-glow">
                        Popular
                    </span>
                    @endif
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <span class="text-primary-300 text-sm font-medium">{{ $destination->country }}</span>
                        <h2 class="text-2xl font-display font-bold mt-1">{{ $destination->name }}</h2>
                        <p class="text-gray-300 mt-2 line-clamp-2">{{ $destination->short_description }}</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-sm text-gray-300">{{ $destination->packages_count ?? 0 }} Packages Available</span>
                            <span class="bg-white/20 backdrop-blur-sm rounded-full p-2 transform group-hover:translate-x-2 transition-transform tilt-effect">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-16 animate-fade-in-up">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                </svg>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No destinations available</h3>
                <p class="text-gray-500">Check back soon for exciting travel destinations!</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($destinations->hasPages())
        <div class="mt-12 animate-fade-in-up" style="animation-delay: 0.5s;">
            {{ $destinations->links() }}
        </div>
        @endif
    </div>
</section>

{{-- Travel Tips Section --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-3xl font-display font-bold text-gray-900">Sri Lanka Travel Tips</h2>
            <p class="text-gray-600 mt-4">Make the most of your Sri Lankan adventure</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center animate-fade-in-up lift-hover" style="animation-delay: 0.1s;">
                <div class="w-14 h-14 mx-auto mb-4 bg-blue-500 text-white rounded-xl flex items-center justify-center float-animation">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Best Time to Visit</h3>
                <p class="text-gray-600 text-sm">December to March for west coast, April to September for east coast</p>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center animate-fade-in-up lift-hover" style="animation-delay: 0.2s;">
                <div class="w-14 h-14 mx-auto mb-4 bg-green-500 text-white rounded-xl flex items-center justify-center float-animation">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Getting Around</h3>
                <p class="text-gray-600 text-sm">Private driver, trains, or tuk-tuks for short distances</p>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 text-center animate-fade-in-up lift-hover" style="animation-delay: 0.3s;">
                <div class="w-14 h-14 mx-auto mb-4 bg-orange-500 text-white rounded-xl flex items-center justify-center float-animation">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Currency</h3>
                <p class="text-gray-600 text-sm">Sri Lankan Rupee (LKR). USD widely accepted at hotels</p>
            </div>
            
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 text-center animate-fade-in-up lift-hover" style="animation-delay: 0.4s;">
                <div class="w-14 h-14 mx-auto mb-4 bg-purple-500 text-white rounded-xl flex items-center justify-center float-animation">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Dress Code</h3>
                <p class="text-gray-600 text-sm">Cover shoulders & knees at temples. Light cotton clothing recommended</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-16 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/sri-lanka-cta.jpg') }}" alt="Sri Lanka Adventure" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/90 to-accent-600/90"></div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-fade-in-up">
        <h2 class="text-3xl font-display font-bold text-white mb-4">Ready to Explore Sri Lanka?</h2>
        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Let us help you discover the magic of this incredible island. Contact us today for a personalized itinerary!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('packages.index') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold text-lg px-8 py-3 rounded-lg transition-all duration-300 lift-hover">
                View Packages
            </a>
            <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-primary-600 text-lg px-8 py-3 lift-hover">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
