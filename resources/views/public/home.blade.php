@extends('layouts.app')

@section('content')
{{-- Hero Section with Sri Lankan Image --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Animated Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/sri-lanka-hero.jpg') }}" 
             alt="Sri Lanka - Pearl of the Indian Ocean" 
             class="w-full h-full object-cover hero-bg-animate">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-emerald-900/40"></div>
    </div>

    {{-- Floating Particles --}}
    <div class="particles">
        <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="left: 20%; animation-delay: 2s;"></div>
        <div class="particle" style="left: 30%; animation-delay: 4s;"></div>
        <div class="particle" style="left: 50%; animation-delay: 1s;"></div>
        <div class="particle" style="left: 70%; animation-delay: 3s;"></div>
        <div class="particle" style="left: 80%; animation-delay: 5s;"></div>
        <div class="particle" style="left: 90%; animation-delay: 2.5s;"></div>
    </div>

    {{-- Decorative 3D Elements --}}
    <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-1/4 right-1/3 w-48 h-48 bg-teal-500/20 rounded-full blur-3xl float-animation" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-emerald-500/90 to-teal-500/90 backdrop-blur-sm text-white text-sm font-semibold rounded-full mb-6 animate-fade-in-up shimmer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Explore the Pearl of the Indian Ocean
            </span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold text-white mb-6 leading-tight hero-title animate-fade-in-up stagger-1">
                Discover<br>
                <span class="gradient-text">Sri Lanka's</span><br>
                Hidden Treasures
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed animate-fade-in-up stagger-2">
                From ancient ruins of Sigiriya to pristine beaches of Mirissa. Experience the magic of Ceylon with our expertly curated travel packages.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up stagger-3">
                <a href="{{ route('packages.index') }}" class="btn-primary text-lg px-8 py-4 inline-flex items-center justify-center animate-pulse-glow">
                    <span>Explore Packages</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white hover:text-slate-900 font-semibold text-lg px-8 py-4 rounded-full transition-all duration-300 inline-flex items-center justify-center">
                    Plan Your Journey
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator with Animation --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center animate-fade-in stagger-5">
        <span class="text-white/60 text-sm block mb-2">Scroll to Explore</span>
        <div class="animate-bounce">
            <svg class="w-6 h-6 text-emerald-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </div>

    {{-- Stats Bar with 3D Effect --}}
    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-r from-slate-900/95 via-emerald-900/95 to-slate-900/95 backdrop-blur-xl border-t border-emerald-500/20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-6">
                <div class="text-center border-r border-emerald-500/20 animate-fade-in-up stagger-1">
                    <div class="text-3xl font-bold text-emerald-400">500+</div>
                    <div class="text-gray-300 text-sm">Happy Travelers</div>
                </div>
                <div class="text-center md:border-r border-emerald-500/20 animate-fade-in-up stagger-2">
                    <div class="text-3xl font-bold text-teal-400">50+</div>
                    <div class="text-gray-300 text-sm">Destinations</div>
                </div>
                <div class="text-center border-r border-emerald-500/20 animate-fade-in-up stagger-3">
                    <div class="text-3xl font-bold text-cyan-400">100+</div>
                    <div class="text-gray-300 text-sm">Tour Packages</div>
                </div>
                <div class="text-center animate-fade-in-up stagger-4">
                    <div class="text-3xl font-bold text-emerald-300">24/7</div>
                    <div class="text-gray-300 text-sm">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Sri Lankan Destinations Gallery --}}
<section class="py-24 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-400 font-semibold tracking-wider uppercase animate-fade-in">
                <span class="w-8 h-0.5 bg-emerald-400"></span>
                Sri Lanka
                <span class="w-8 h-0.5 bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mt-4 animate-fade-in-up">
                Iconic <span class="gradient-text">Destinations</span>
            </h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto animate-fade-in-up stagger-1">
                Explore UNESCO World Heritage sites, pristine beaches, and lush tea plantations
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Sigiriya --}}
            <div class="card-3d group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/5] image-zoom">
                    <img src="{{ asset('images/sigiriya.jpg') }}" alt="Sigiriya Lion Rock" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white card-3d-inner">
                        <span class="text-emerald-400 text-sm font-semibold uppercase tracking-wider">UNESCO Heritage</span>
                        <h3 class="text-2xl font-display font-bold mt-2">Sigiriya</h3>
                        <p class="text-gray-300 mt-2 line-clamp-2">Ancient rock fortress rising 200m, featuring stunning frescoes and mirror wall</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="bg-emerald-500/20 backdrop-blur-sm text-emerald-300 text-sm px-4 py-2 rounded-full border border-emerald-500/30">Lion Rock</span>
                            <span class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center transform group-hover:translate-x-2 transition-transform shadow-lg shadow-emerald-500/30">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Temple of the Tooth --}}
            <div class="card-3d group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/5] image-zoom">
                    <img src="{{ asset('images/temple.jpg') }}" alt="Temple of the Sacred Tooth Relic" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white card-3d-inner">
                        <span class="text-emerald-400 text-sm font-semibold uppercase tracking-wider">Sacred Site</span>
                        <h3 class="text-2xl font-display font-bold mt-2">Kandy Temple</h3>
                        <p class="text-gray-300 mt-2 line-clamp-2">Temple of the Sacred Tooth Relic, Sri Lanka's most important Buddhist shrine</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="bg-emerald-500/20 backdrop-blur-sm text-emerald-300 text-sm px-4 py-2 rounded-full border border-emerald-500/30">Cultural Capital</span>
                            <span class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center transform group-hover:translate-x-2 transition-transform shadow-lg shadow-emerald-500/30">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Train to Ella --}}
            <div class="card-3d group cursor-pointer">
                <div class="relative overflow-hidden rounded-2xl aspect-[4/5] image-zoom">
                    <img src="{{ asset('images/train.jpg') }}" alt="Scenic Train to Ella" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white card-3d-inner">
                        <span class="text-emerald-400 text-sm font-semibold uppercase tracking-wider">Scenic Journey</span>
                        <h3 class="text-2xl font-display font-bold mt-2">Train to Ella</h3>
                        <p class="text-gray-300 mt-2 line-clamp-2">World's most scenic train ride through tea plantations and misty mountains</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="bg-emerald-500/20 backdrop-blur-sm text-emerald-300 text-sm px-4 py-2 rounded-full border border-emerald-500/30">Hill Country</span>
                            <span class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center transform group-hover:translate-x-2 transition-transform shadow-lg shadow-emerald-500/30">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How It Works Section with 3D Cards --}}
<section class="py-24 bg-white overflow-hidden relative">
    {{-- Decorative elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-100 rounded-full blur-3xl opacity-50"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Our Process
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="section-title mt-4">What Makes Us Different?<br>It's <em class="gradient-text not-italic">How</em> We Do it.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            @php
                $steps = [
                    ['num' => 1, 'title' => 'Creating Your Trip', 'desc' => 'Send us an enquiry through our website or call us to start planning your dream trip.', 'color' => 'from-emerald-500 to-teal-500'],
                    ['num' => 2, 'title' => 'Perfecting It', 'desc' => "We'll send you a personalized itinerary and fine tune it with you until it's perfect.", 'color' => 'from-teal-500 to-cyan-500'],
                    ['num' => 3, 'title' => 'Secure Payment', 'desc' => "Once you're happy, pay a deposit to secure your booking and itinerary.", 'color' => 'from-cyan-500 to-emerald-500'],
                    ['num' => 4, 'title' => 'Pre-Trip Support', 'desc' => "We're on hand to answer any questions and arrange any extra experiences.", 'color' => 'from-emerald-400 to-teal-400'],
                    ['num' => 5, 'title' => 'During Your Trip', 'desc' => 'You will be met by one of our partners on arrival. Relax, explore, and enjoy!', 'color' => 'from-teal-400 to-cyan-400'],
                    ['num' => 6, 'title' => 'After You Get Home', 'desc' => "We'd love to hear about your adventure. Where to next?", 'color' => 'from-cyan-400 to-emerald-400'],
                ];
            @endphp

            @foreach($steps as $index => $step)
            <div class="tilt-effect magnetic-hover group p-6 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl hover:shadow-emerald-500/10 transition-all duration-500 animate-fade-in-up stagger-{{ $index + 1 }} border border-transparent hover:border-emerald-100">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br {{ $step['color'] }} rounded-2xl flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        {{ $step['num'] }}
                    </div>
                    <div>
                        <h3 class="text-xl font-display font-bold text-gray-900 mb-2 group-hover:text-emerald-600 transition-colors">{{ $step['title'] }}</h3>
                        <p class="text-gray-600">{{ $step['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Featured Packages with 3D Cards --}}
<section class="py-24 bg-gradient-to-b from-gray-50 to-emerald-50/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Our Packages
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="section-title mt-4">Embark on Your Dream Vacation</h2>
            <p class="section-subtitle">Dreaming of a fabulous vacation? We're here to make it happen!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredPackages as $index => $package)
            <article class="card lift-hover group animate-fade-in-up stagger-{{ ($index % 3) + 1 }}">
                <div class="relative overflow-hidden aspect-[4/3] image-zoom">
                    <img src="{{ $package->featured_image_url }}"
                         alt="{{ $package->title }}"
                         class="w-full h-full object-cover">
                    @if($package->is_featured)
                    <span class="absolute top-4 left-4 bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg shimmer">
                        ⭐ Featured
                    </span>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-4 right-4 bg-white rounded-xl px-4 py-2 shadow-lg transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-emerald-600 font-bold text-xl">{{ $package->formatted_price }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3 gap-4">
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            {{ $package->location }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $package->duration }}
                        </span>
                    </div>
                    <h3 class="text-xl font-display font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">
                        <a href="{{ route('packages.show', $package) }}">{{ $package->title }}</a>
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $package->short_description }}</p>
                    <a href="{{ route('packages.show', $package) }}"
                       class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors group/link">
                        View Details
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="w-24 h-24 mx-auto mb-6 bg-emerald-100 rounded-full flex items-center justify-center animate-bounce-in">
                    <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
                <p class="text-gray-500 text-lg">No packages available yet. Check back soon!</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('packages.index') }}" class="btn-primary text-lg px-10 py-4">
                View All Packages
            </a>
        </div>
    </div>
</section>

{{-- Popular Destinations with 3D Effect --}}
<section class="py-24 bg-white relative overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-100 rounded-full blur-3xl opacity-40"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-teal-100 rounded-full blur-3xl opacity-40"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Explore
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="section-title mt-4">Popular Destinations</h2>
            <p class="section-subtitle">Explore breathtaking locations with our expertly curated experiences</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($popularDestinations as $index => $destination)
            <a href="{{ route('destinations.show', $destination) }}"
               class="card-3d group relative overflow-hidden rounded-3xl aspect-[4/5] shadow-xl animate-fade-in-up stagger-{{ ($index % 3) + 1 }}">
                <div class="image-zoom w-full h-full">
                    <img src="{{ $destination->featured_image_url }}"
                         alt="{{ $destination->name }}"
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white card-3d-inner">
                    <span class="text-emerald-400 text-sm font-semibold uppercase tracking-wider">{{ $destination->country }}</span>
                    <h3 class="text-3xl font-display font-bold mt-2">{{ $destination->name }}</h3>
                    <p class="text-gray-300 mt-3 line-clamp-2">{{ $destination->short_description }}</p>
                    <div class="mt-6 flex items-center justify-between">
                        <span class="bg-emerald-500/20 backdrop-blur-sm text-emerald-300 text-sm px-4 py-2 rounded-full border border-emerald-500/30">{{ $destination->packages_count ?? 0 }} Packages</span>
                        <span class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center transform group-hover:translate-x-2 group-hover:rotate-12 transition-all duration-500 shadow-lg shadow-emerald-500/30">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500 text-lg">No destinations available yet. Check back soon!</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('destinations.index') }}" class="btn-outline text-lg px-10 py-4">
                Explore All Destinations
            </a>
        </div>
    </div>
</section>

{{-- Wildlife & Nature Section --}}
<section class="py-24 bg-slate-900 relative overflow-hidden">
    {{-- Background with Parallax --}}
    <div class="absolute inset-0 parallax-bg" style="background-image: url('{{ asset('images/elephant.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-slate-900/80 to-emerald-900/70"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in-left">
                <span class="inline-flex items-center gap-2 text-emerald-400 font-semibold tracking-wider uppercase">
                    <span class="w-8 h-0.5 bg-emerald-400"></span>
                    Wildlife Safari
                </span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mt-4 mb-6">
                    Encounter Majestic <span class="gradient-text">Elephants</span>
                </h2>
                <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                    Sri Lanka is home to the largest concentration of Asian elephants in the world. Experience unforgettable wildlife safaris in Yala, Udawalawe, and Minneriya National Parks.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-300">
                        <span class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mr-4 shadow-lg shadow-emerald-500/30">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        The Gathering - Largest elephant congregation in Asia
                    </li>
                    <li class="flex items-center text-gray-300">
                        <span class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mr-4 shadow-lg shadow-emerald-500/30">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        Leopard spotting in Yala National Park
                    </li>
                    <li class="flex items-center text-gray-300">
                        <span class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mr-4 shadow-lg shadow-emerald-500/30">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        Whale watching in Mirissa
                    </li>
                </ul>
                <a href="{{ route('packages.index') }}" class="btn-primary text-lg px-8 py-4">
                    Explore Safari Packages
                </a>
            </div>
            <div class="hidden lg:block animate-fade-in-right">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                    <img src="{{ asset('images/elephant.jpg') }}" alt="Sri Lankan Elephant" class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-700 border-2 border-emerald-500/20">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Section with 3D Cards --}}
<section class="py-24 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-400 font-semibold tracking-wider uppercase">
                <span class="w-8 h-0.5 bg-emerald-400"></span>
                Our Services
                <span class="w-8 h-0.5 bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mt-4">Perfect Solutions for Every Traveler</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $services = [
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Leisure', 'desc' => 'Dreaming of a fabulous vacation? We create unique experiences.', 'color' => 'from-emerald-500 to-teal-500'],
                    ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Honeymoon', 'desc' => 'Celebrate love in the most romantic destinations.', 'color' => 'from-rose-500 to-pink-500'],
                    ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'title' => 'Adventure', 'desc' => 'Thrill-seeking experiences for the bold traveler.', 'color' => 'from-amber-500 to-orange-500'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Family', 'desc' => 'Create lasting memories with family-friendly packages.', 'color' => 'from-cyan-500 to-blue-500'],
                ];
            @endphp

            @foreach($services as $index => $service)
            <div class="card-3d glow-hover rounded-3xl p-8 bg-slate-800/50 backdrop-blur-sm border border-emerald-500/10 hover:border-emerald-500/30 animate-fade-in-up stagger-{{ $index + 1 }} transition-all duration-500">
                <div class="w-16 h-16 bg-gradient-to-br {{ $service['color'] }} rounded-2xl flex items-center justify-center mb-6 shadow-lg float-animation" style="animation-delay: {{ $index * 0.5 }}s;">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-display font-bold mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-400 mb-6">{{ $service['desc'] }}</p>
                <a href="{{ route('packages.index') }}" class="text-emerald-400 font-semibold hover:text-emerald-300 inline-flex items-center group/link">
                    Explore
                    <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Beach CTA Section --}}
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/sri-lanka-beach.jpg') }}" alt="Sri Lanka Beach" class="w-full h-full object-cover hero-bg-animate">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-emerald-900/80 to-teal-900/80"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <span class="inline-flex items-center gap-2 text-emerald-300 font-semibold tracking-wider uppercase animate-fade-in">
                <span class="w-8 h-0.5 bg-emerald-400"></span>
                Ready to Travel?
                <span class="w-8 h-0.5 bg-emerald-400"></span>
            </span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mt-4 mb-6 animate-fade-in-up stagger-1">
                Start Your Sri Lankan Adventure Today
            </h2>
            <p class="text-xl text-white/90 mb-10 animate-fade-in-up stagger-2">
                From golden beaches to misty mountains, ancient temples to wild safaris. Let us craft your perfect journey!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up stagger-3">
                <a href="https://wa.me/1234567890?text={{ urlencode('Hello! I want to plan a trip to Sri Lanka.') }}"
                   target="_blank"
                   class="btn-whatsapp text-lg px-8 py-4 inline-flex items-center justify-center">
                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Chat on WhatsApp
                </a>
                <a href="{{ route('contact') }}" class="bg-white text-slate-900 hover:bg-emerald-50 font-semibold text-lg px-8 py-4 rounded-full transition-all duration-300 inline-flex items-center justify-center lift-hover">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Newsletter Section --}}
<section class="py-16 bg-gradient-to-r from-emerald-50 via-teal-50 to-cyan-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl shadow-emerald-500/10 p-8 md:p-12 text-center border border-emerald-100 animate-fade-in-up">
            <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-emerald-500/30">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-2xl md:text-3xl font-display font-bold text-gray-900 mb-4">Travel Inspiration in Your Inbox</h3>
            <p class="text-gray-600 mb-8">Subscribe for exclusive Sri Lanka travel tips, deals, and hidden gems!</p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 input-field text-lg" required>
                <button type="submit" class="btn-primary text-lg px-8">Subscribe</button>
            </form>
            <p class="text-xs text-gray-400 mt-4">By subscribing, you agree to our Terms & Conditions and Privacy Policy.</p>
        </div>
    </div>
</section>

{{-- Latest Packages --}}
@if($latestPackages->count() > 0)
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                New Arrivals
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="section-title mt-4">Latest Travel Packages</h2>
            <p class="section-subtitle">Fresh destinations and exciting new experiences await</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($latestPackages as $index => $package)
            <article class="card magnetic-hover group animate-fade-in-up stagger-{{ ($index % 4) + 1 }}">
                <div class="relative overflow-hidden aspect-square image-zoom">
                    <img src="{{ $package->featured_image_url }}"
                         alt="{{ $package->title }}"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                        <a href="{{ route('packages.show', $package) }}" class="btn-primary w-full text-center text-sm py-3 shimmer">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm text-gray-500">{{ $package->duration }}</span>
                        <span class="text-emerald-600 font-bold text-lg">{{ $package->formatted_price }}</span>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                        <a href="{{ route('packages.show', $package) }}">{{ $package->title }}</a>
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script>
// Scroll reveal animation
document.addEventListener('DOMContentLoaded', function() {
    const reveals = document.querySelectorAll('.reveal-on-scroll');
    
    const revealOnScroll = () => {
        reveals.forEach(el => {
            const windowHeight = window.innerHeight;
            const revealTop = el.getBoundingClientRect().top;
            const revealPoint = 150;
            
            if (revealTop < windowHeight - revealPoint) {
                el.classList.add('revealed');
            }
        });
    };
    
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
});

// Parallax effect for hero
document.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.hero-bg-animate');
    if (parallax) {
        parallax.style.transform = 'scale(1.1) translateY(' + (scrolled * 0.3) + 'px)';
    }
});
</script>
@endpush
