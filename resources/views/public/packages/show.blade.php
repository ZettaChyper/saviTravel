@extends('layouts.app')

@push('head')
{{-- Additional SEO meta for package page --}}
<meta property="og:image" content="{{ $package->featured_image_url }}">
@endpush

@section('content')
{{-- Package Hero --}}
<section class="relative h-[60vh] min-h-[400px]">
    <img src="{{ $package->featured_image_url }}"
         alt="{{ $package->title }}"
         class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-16">
        <div class="container mx-auto">
            <nav class="mb-4" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-white/70 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('packages.index') }}" class="hover:text-white">Travel Packages</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-white">{{ $package->title }}</li>
                </ol>
            </nav>
            <h1 class="text-3xl md:text-5xl font-display font-bold text-white mb-4">{{ $package->title }}</h1>
            <div class="flex flex-wrap items-center gap-4 text-white">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    </svg>
                    {{ $package->location }}
                </span>
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $package->duration }}
                </span>
                <span class="text-2xl font-bold text-accent-400">{{ $package->formatted_price }}</span>
            </div>
        </div>
    </div>
</section>

{{-- Package Content --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            {{-- Main Content --}}
            <div class="lg:col-span-2">
                {{-- Description --}}
                <div class="prose prose-lg max-w-none mb-12">
                    <h2 class="text-2xl font-display font-bold text-gray-900 mb-4">About This Package</h2>
                    <p class="text-gray-600 text-lg mb-6">{{ $package->short_description }}</p>
                    <div class="text-gray-700">
                        {!! nl2br(e($package->full_description)) !!}
                    </div>
                </div>

                {{-- Gallery --}}
                @if($package->gallery_images && count($package->gallery_images) > 0)
                <div class="mb-12">
                    <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Gallery</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($package->gallery_images as $image)
                        <a href="{{ asset('storage/' . $image) }}"
                           class="block aspect-square overflow-hidden rounded-xl group"
                           target="_blank">
                            <img src="{{ asset('storage/' . $image) }}"
                                 alt="{{ $package->title }} gallery image"
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300"
                                 loading="lazy">
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Destination Info --}}
                @if($package->destination)
                <div class="bg-gray-50 rounded-2xl p-6 mb-12">
                    <h2 class="text-xl font-display font-bold text-gray-900 mb-4">Destination</h2>
                    <a href="{{ route('destinations.show', $package->destination) }}" class="flex items-center gap-4 group">
                        <img src="{{ $package->destination->featured_image_url }}"
                             alt="{{ $package->destination->name }}"
                             class="w-20 h-20 rounded-xl object-cover">
                        <div>
                            <h3 class="font-semibold text-gray-900 group-hover:text-primary-600 transition-colors">
                                {{ $package->destination->name }}
                            </h3>
                            <p class="text-gray-500">{{ $package->destination->country }}</p>
                        </div>
                    </a>
                </div>
                @endif
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-1">
                <div class="sticky top-24">
                    {{-- Booking Card --}}
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 mb-6">
                        <div class="text-center mb-6">
                            <span class="text-sm text-gray-500">Starting from</span>
                            <div class="text-4xl font-bold text-primary-600">{{ $package->formatted_price }}</div>
                            <span class="text-gray-500">per person</span>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                                <span class="text-gray-600">Duration</span>
                                <span class="font-semibold">{{ $package->duration }}</span>
                            </div>
                            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                                <span class="text-gray-600">Location</span>
                                <span class="font-semibold">{{ $package->location }}</span>
                            </div>
                        </div>

                        <a href="https://wa.me/1234567890?text={{ urlencode('Hi! I am interested in the package: ' . $package->title . ' (' . url()->current() . ')') }}"
                           target="_blank"
                           class="btn-whatsapp w-full text-center mb-3">
                            <svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Inquire on WhatsApp
                        </a>

                        <button onclick="document.getElementById('inquiry-form').scrollIntoView({behavior: 'smooth'})"
                                class="btn-primary w-full text-center">
                            Send Inquiry
                        </button>
                    </div>

                    {{-- Share --}}
                    <div class="bg-gray-50 rounded-2xl p-6">
                        <h3 class="font-semibold text-gray-900 mb-4">Share This Package</h3>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                               target="_blank"
                               class="w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($package->title) }}"
                               target="_blank"
                               class="w-10 h-10 bg-sky-500 hover:bg-sky-600 text-white rounded-full flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($package->title . ' - ' . url()->current()) }}"
                               target="_blank"
                               class="w-10 h-10 bg-green-500 hover:bg-green-600 text-white rounded-full flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Inquiry Form --}}
<section id="inquiry-form" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-display font-bold text-gray-900 mb-2 text-center">Interested in this package?</h2>
            <p class="text-gray-600 text-center mb-8">Fill out the form below and we'll get back to you shortly</p>

            <form action="{{ route('inquiry.package', $package) }}" method="POST">
                @csrf
                {{-- Honeypot --}}
                <div style="display: none;">
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="space-y-6">
                    <div>
                        <label for="name" class="form-label">Your Name *</label>
                        <input type="text" name="name" id="name" class="input-field" required value="{{ old('name') }}">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" name="email" id="email" class="input-field" required value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="input-field" value="{{ old('phone') }}">
                        @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="form-label">Your Message *</label>
                        <textarea name="message" id="message" rows="4" class="input-field" required>{{ old('message', 'I am interested in the "' . $package->title . '" package. Please provide more details.') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full text-lg py-4">
                        Send Inquiry
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- Related Packages --}}
@if($relatedPackages->count() > 0)
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-display font-bold text-gray-900 mb-8">Related Packages</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($relatedPackages as $related)
            <article class="card group">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ $related->featured_image_url }}"
                         alt="{{ $related->title }}"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                         loading="lazy">
                    <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1">
                        <span class="text-primary-600 font-bold text-sm">{{ $related->formatted_price }}</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-display font-bold text-gray-900 group-hover:text-primary-600 transition-colors line-clamp-2">
                        <a href="{{ route('packages.show', $related) }}">{{ $related->title }}</a>
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">{{ $related->duration }}</p>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection


