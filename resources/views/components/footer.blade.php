{{-- Site Footer --}}
<footer class="bg-gradient-to-b from-slate-900 to-slate-950 text-white relative overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-teal-500/5 rounded-full blur-3xl"></div>
    
    {{-- Main Footer --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            {{-- Company Info --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 mb-6 group">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-400 via-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:shadow-emerald-500/50 transition-all duration-300">
                        <svg class="w-7 h-7 text-white transform -rotate-45 group-hover:rotate-0 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-white group-hover:text-emerald-300 transition-colors" style="font-family: 'Playfair Display', serif;">Savi</span>
                            <span class="text-2xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent" style="font-family: 'Playfair Display', serif;">Travel</span>
                        </div>
                    </div>
                </a>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Your trusted partner for unforgettable travel experiences. We craft personalized journeys that create lasting memories.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-gradient-to-r hover:from-emerald-500 hover:to-teal-500 rounded-xl flex items-center justify-center transition-all duration-300 border border-slate-700 hover:border-transparent group" aria-label="Facebook">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-gradient-to-r hover:from-emerald-500 hover:to-teal-500 rounded-xl flex items-center justify-center transition-all duration-300 border border-slate-700 hover:border-transparent group" aria-label="Instagram">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-gradient-to-r hover:from-emerald-500 hover:to-teal-500 rounded-xl flex items-center justify-center transition-all duration-300 border border-slate-700 hover:border-transparent group" aria-label="Twitter">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/1234567890" class="w-10 h-10 bg-slate-800 hover:bg-green-500 rounded-xl flex items-center justify-center transition-all duration-300 border border-slate-700 hover:border-transparent group" aria-label="WhatsApp">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-semibold mb-6 flex items-center">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2"></span>
                    Quick Links
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-emerald-500/50 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('packages.index') }}" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-emerald-500/50 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Travel Packages
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('destinations.index') }}" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-emerald-500/50 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Destinations
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-emerald-500/50 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-emerald-500/50 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Popular Destinations --}}
            <div>
                <h3 class="text-lg font-semibold mb-6 flex items-center">
                    <span class="w-2 h-2 bg-teal-400 rounded-full mr-2"></span>
                    Popular Destinations
                </h3>
                <ul class="space-y-4">
                    @php
                        $footerDestinations = \App\Models\Destination::active()->featured()->limit(5)->get();
                    @endphp
                    @forelse($footerDestinations as $destination)
                    <li>
                        <a href="{{ route('destinations.show', $destination) }}" class="text-gray-400 hover:text-teal-400 transition-colors duration-300 flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-teal-500/50 group-hover:text-teal-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            {{ $destination->name }}
                        </a>
                    </li>
                    @empty
                    <li class="text-gray-500 italic">Coming soon...</li>
                    @endforelse
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-lg font-semibold mb-6 flex items-center">
                    <span class="w-2 h-2 bg-cyan-400 rounded-full mr-2"></span>
                    Contact Us
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3 group">
                        <div class="w-10 h-10 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-500/20 transition-colors border border-slate-700">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <span class="text-gray-400 pt-2">123 Travel Street, Adventure City, AC 12345</span>
                    </li>
                    <li class="flex items-center space-x-3 group">
                        <div class="w-10 h-10 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-500/20 transition-colors border border-slate-700">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <a href="tel:+1234567890" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">+1 234 567 890</a>
                    </li>
                    <li class="flex items-center space-x-3 group">
                        <div class="w-10 h-10 bg-slate-800 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-500/20 transition-colors border border-slate-700">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <a href="mailto:info@savitravel.com" class="text-gray-400 hover:text-emerald-400 transition-colors duration-300">info@savitravel.com</a>
                    </li>
                </ul>
                
                {{-- Quick Contact CTA --}}
                <a href="https://wa.me/1234567890" target="_blank" class="mt-6 flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold py-3 px-5 rounded-xl hover:shadow-lg hover:shadow-green-500/30 transition-all duration-300">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Chat Now
                </a>
            </div>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div class="border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} <span class="text-emerald-400">zettachyper</span>. All rights reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-500 hover:text-emerald-400 text-sm transition-colors duration-300">Privacy Policy</a>
                    <span class="w-1 h-1 bg-slate-700 rounded-full"></span>
                    <a href="#" class="text-gray-500 hover:text-emerald-400 text-sm transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
