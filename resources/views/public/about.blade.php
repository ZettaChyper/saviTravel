@extends('layouts.app')

@section('content')
{{-- Hero Banner --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/about-banner.jpg') }}" alt="About Savi Travel" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-emerald-900/80 to-slate-900/70"></div>
    </div>
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
        <div class="max-w-3xl animate-fade-in-left">
            <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-emerald-500/90 to-teal-500/90 backdrop-blur-sm rounded-full text-white text-sm font-semibold mb-6 animate-bounce-in">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Your Trusted Travel Partner
            </span>
            <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                About Us
            </h1>
            <p class="text-xl text-gray-200 max-w-2xl animate-fade-in-up" style="animation-delay: 0.4s;">
                Dedicated to showcasing the best of Sri Lanka since 2010 - your journey, our passion
            </p>
            <nav class="mt-6 animate-fade-in-up" style="animation-delay: 0.6s;" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:text-emerald-400 transition-colors">Home</a></li>
                    <li><span class="mx-2 text-emerald-500">/</span></li>
                    <li class="text-emerald-400 font-semibold">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

{{-- Our Story --}}
<section class="py-20 bg-white relative overflow-hidden">
    {{-- Decorative elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-100 rounded-full blur-3xl opacity-50"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-fade-in-left">
                <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase mb-2">
                    <span class="w-8 h-0.5 bg-emerald-500"></span>
                    Our Story
                </span>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mt-2 mb-6">
                    Crafting Dream Journeys Through Sri Lanka Since 2010
                </h2>
                <div class="space-y-4 text-gray-600">
                    <p>
                        Savi Travel was born from a deep love for Sri Lanka and a passion for sharing its wonders with the world.
                        What started as a small family-owned travel agency in Colombo has grown into one of the island's most trusted names in tourism,
                        serving thousands of delighted travelers from over 50 countries.
                    </p>
                    <p>
                        We believe that travel is more than just visiting new places – it's about creating memories that last a lifetime,
                        discovering ancient cultures, tasting exotic cuisines, and finding yourself in the breathtaking beauty of our island paradise.
                        Our team of passionate Sri Lankan travel experts works tirelessly to curate the perfect experiences for every type of traveler.
                    </p>
                    <p>
                        From romantic honeymoons in the hill country to adventurous wildlife safaris, heritage tours of ancient kingdoms to beach getaways,
                        we handle every detail so you can focus on what matters most – enjoying your trip to the fullest.
                    </p>
                </div>
            </div>
            <div class="relative animate-fade-in-right">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl shadow-emerald-500/20 card-3d border-2 border-emerald-100">
                    <div class="inner-card h-full">
                        <img src="{{ asset('images/sigiriya.jpg') }}"
                             alt="Sigiriya Rock Fortress"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                </div>
                <div class="absolute -bottom-8 -left-8 bg-white rounded-2xl shadow-xl shadow-emerald-500/10 p-6 max-w-xs animate-bounce-in border border-emerald-100" style="animation-delay: 0.5s;">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 float-animation">
                            <span class="text-2xl font-bold text-white">14+</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Years of Experience</p>
                            <p class="text-sm text-gray-500">Trusted by thousands</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-16 bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="1" fill-rule="evenodd"%3E%3Cpath d="M0 40L40 0H20L0 20M40 40V20L20 40"/%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 float-animation">5000+</div>
                <p class="text-white/80">Happy Travelers</p>
            </div>
            <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 float-animation" style="animation-delay: 0.2s;">50+</div>
                <p class="text-white/80">Destinations</p>
            </div>
            <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 float-animation" style="animation-delay: 0.4s;">100+</div>
                <p class="text-white/80">Tour Packages</p>
            </div>
            <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2 float-animation" style="animation-delay: 0.6s;">4.9</div>
                <p class="text-white/80">Star Rating</p>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase mb-2">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Why Choose Us
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mt-2">What Makes Us Different</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">We go above and beyond to ensure every journey with us is extraordinary</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg shadow-emerald-500/5 text-center lift-hover animate-fade-in-up border border-emerald-100/50" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 float-animation">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">Local Expertise</h3>
                <p class="text-gray-600">
                    Born and raised in Sri Lanka, our team knows every hidden gem, secret spot, and local experience that will make your trip unforgettable.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg shadow-emerald-500/5 text-center lift-hover animate-fade-in-up border border-emerald-100/50" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center shadow-lg shadow-teal-500/30 float-animation" style="animation-delay: 0.2s;">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">Safe & Reliable</h3>
                <p class="text-gray-600">
                    Licensed by the Sri Lanka Tourism Development Authority with comprehensive insurance. Your safety and comfort are our top priorities.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg shadow-emerald-500/5 text-center lift-hover animate-fade-in-up border border-emerald-100/50" style="animation-delay: 0.3s;">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-cyan-500 to-emerald-500 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/30 float-animation" style="animation-delay: 0.4s;">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">Best Value</h3>
                <p class="text-gray-600">
                    No hidden fees, no surprises. We offer competitive pricing with transparent quotes and the best value for your money.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Our Team --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase mb-2">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Our Team
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mt-2">Meet the Experts</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Our dedicated team of Sri Lankan travel professionals is here to make your dream vacation a reality
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden shadow-lg shadow-emerald-500/20 border-4 border-emerald-100 tilt-effect">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop"
                         alt="Ravindu Perera"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900">Ravindu Perera</h3>
                <p class="text-emerald-600 mb-2">Founder & CEO</p>
                <p class="text-gray-600 text-sm">15+ years in Sri Lanka tourism</p>
            </div>

            <div class="text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden shadow-lg shadow-emerald-500/20 border-4 border-emerald-100 tilt-effect">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop"
                         alt="Nimali Fernando"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900">Nimali Fernando</h3>
                <p class="text-emerald-600 mb-2">Head of Operations</p>
                <p class="text-gray-600 text-sm">Expert in luxury travel</p>
            </div>

            <div class="text-center animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden shadow-lg shadow-emerald-500/20 border-4 border-emerald-100 tilt-effect">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop"
                         alt="Kasun Silva"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900">Kasun Silva</h3>
                <p class="text-emerald-600 mb-2">Senior Travel Consultant</p>
                <p class="text-gray-600 text-sm">Adventure travel specialist</p>
            </div>
        </div>
    </div>
</section>

{{-- Certifications & Partners --}}
<section class="py-16 bg-gradient-to-b from-gray-50 to-emerald-50/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-fade-in-up">
            <h2 class="text-2xl font-display font-bold text-gray-900">Trusted & Certified</h2>
            <p class="text-gray-600 mt-2">Licensed by official tourism authorities</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <div class="text-center animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-20 h-20 bg-gradient-to-r from-emerald-100 to-teal-100 rounded-full flex items-center justify-center mx-auto mb-2 border border-emerald-200">
                    <span class="text-emerald-600 text-xs font-bold">SLTDA</span>
                </div>
                <p class="text-sm text-gray-500">Sri Lanka Tourism</p>
            </div>
            <div class="text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="w-20 h-20 bg-gradient-to-r from-teal-100 to-cyan-100 rounded-full flex items-center justify-center mx-auto mb-2 border border-teal-200">
                    <span class="text-teal-600 text-xs font-bold">IATA</span>
                </div>
                <p class="text-sm text-gray-500">IATA Member</p>
            </div>
            <div class="text-center animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="w-20 h-20 bg-gradient-to-r from-cyan-100 to-emerald-100 rounded-full flex items-center justify-center mx-auto mb-2 border border-cyan-200">
                    <span class="text-cyan-600 text-xs font-bold">PATA</span>
                </div>
                <p class="text-sm text-gray-500">PATA Member</p>
            </div>
            <div class="text-center animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="w-20 h-20 bg-gradient-to-r from-emerald-100 to-teal-100 rounded-full flex items-center justify-center mx-auto mb-2 border border-emerald-200">
                    <span class="text-emerald-600 text-xs font-bold">THASL</span>
                </div>
                <p class="text-sm text-gray-500">Hotel Association</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-16 relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/train.jpg') }}" alt="Sri Lanka Train Journey" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-emerald-900/80 to-teal-900/80"></div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-fade-in-up">
        <h2 class="text-3xl font-display font-bold text-white mb-4">Ready to Start Your Sri Lankan Journey?</h2>
        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Let's plan your perfect trip together. Our travel experts are just a message away!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('packages.index') }}" class="bg-white text-emerald-600 hover:bg-emerald-50 font-semibold text-lg px-8 py-4 rounded-full transition-all duration-300 lift-hover shadow-lg">
                Explore Packages
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-emerald-600 font-semibold text-lg px-8 py-4 rounded-full transition-all duration-300 lift-hover">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
