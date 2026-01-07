@extends('layouts.app')

@section('content')
{{-- Page Header --}}
<section class="relative py-20 bg-gradient-to-br from-slate-900 via-emerald-900 to-slate-900 overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    {{-- Decorative elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-emerald-500/90 to-teal-500/90 backdrop-blur-sm rounded-full text-white text-sm font-semibold mb-6 animate-bounce-in">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Get in Touch
        </span>
        <h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-4 animate-fade-in-up">Contact Us</h1>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
            We'd love to hear from you. Get in touch with our travel experts today!
        </p>
        <nav class="mt-6 animate-fade-in-up" style="animation-delay: 0.4s;" aria-label="Breadcrumb">
            <ol class="flex items-center justify-center space-x-2 text-gray-300">
                <li><a href="{{ route('home') }}" class="hover:text-emerald-400 transition-colors">Home</a></li>
                <li><span class="mx-2 text-emerald-500">/</span></li>
                <li class="text-emerald-400 font-semibold">Contact</li>
            </ol>
        </nav>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-20 bg-gradient-to-b from-white to-emerald-50/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            {{-- Contact Info --}}
            <div class="animate-fade-in-left">
                <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase mb-2">
                    <span class="w-8 h-0.5 bg-emerald-500"></span>
                    Contact Info
                </span>
                <h2 class="text-3xl font-display font-bold text-gray-900 mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8">
                    Have questions about our travel packages? Need help planning your trip?
                    Our team is here to assist you every step of the way.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Visit Us</h3>
                            <p class="text-gray-600">123 Travel Street<br>Adventure City, AC 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-teal-500/30 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Call Us</h3>
                            <a href="tel:+1234567890" class="text-emerald-600 hover:text-emerald-700 font-medium">+1 234 567 890</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-cyan-500/30 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                            <a href="mailto:info@savitravel.com" class="text-emerald-600 hover:text-emerald-700 font-medium">info@savitravel.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-green-500/30 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
                            <a href="https://wa.me/1234567890" target="_blank" class="text-green-600 hover:text-green-700 font-medium">
                                Chat with us instantly
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Office Hours --}}
                <div class="mt-10 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl border border-emerald-100">
                    <h3 class="font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Office Hours
                    </h3>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span class="font-medium text-emerald-600">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday</span>
                            <span class="font-medium text-emerald-600">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday</span>
                            <span class="font-medium text-gray-400">Closed</span>
                        </div>
                    </div>
                </div>

                {{-- Social Links --}}
                <div class="mt-10">
                    <h3 class="font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-xl flex items-center justify-center transition-all lift-hover shadow-lg shadow-blue-500/30">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-purple-500 via-pink-500 to-orange-500 hover:from-purple-600 hover:via-pink-600 hover:to-orange-600 text-white rounded-xl flex items-center justify-center transition-all lift-hover shadow-lg shadow-pink-500/30">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-r from-sky-400 to-sky-500 hover:from-sky-500 hover:to-sky-600 text-white rounded-xl flex items-center justify-center transition-all lift-hover shadow-lg shadow-sky-500/30">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="animate-fade-in-right">
                <div class="bg-white rounded-2xl shadow-xl shadow-emerald-500/10 border border-emerald-100 p-8">
                    <h2 class="text-2xl font-display font-bold text-gray-900 mb-2">Send us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours</p>

                    <form action="{{ route('inquiry.store') }}" method="POST">
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
                                <textarea name="message" id="message" rows="5" class="input-field !rounded-2xl" required>{{ old('message') }}</textarea>
                                @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn-primary w-full text-lg py-4">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Map Section --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-2 text-emerald-600 font-semibold tracking-wider uppercase mb-2">
                <span class="w-8 h-0.5 bg-emerald-500"></span>
                Location
                <span class="w-8 h-0.5 bg-emerald-500"></span>
            </span>
            <h2 class="text-2xl font-display font-bold text-gray-900">Find Us on the Map</h2>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-lg shadow-emerald-500/10 h-[400px] border border-emerald-100">
            {{-- Replace with actual Google Maps embed --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1639066582929!5m2!1sen!2s"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
