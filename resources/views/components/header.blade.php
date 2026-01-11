<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="main-header">
    {{-- Glass morphism background layer --}}
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-slate-800/95 to-slate-900/95 backdrop-blur-xl border-b border-white/10"></div>
    
    {{-- Ensure header is always visible on mobile --}}
    <style>
        @media (max-width: 1023px) {
            #main-header {
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                right: 0 !important;
                z-index: 50 !important;
                display: block !important;
                visibility: visible !important;
            }
        }
    </style>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <nav class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-2 sm:space-x-3 group relative z-[100] flex-shrink-0">
                {{-- Logo Icon with animated gradient --}}
                <div class="relative flex-shrink-0">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-emerald-400 via-teal-500 to-cyan-500 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:shadow-emerald-500/50 transition-all duration-300 group-hover:scale-105">
                        {{-- Airplane icon --}}
                        <svg class="w-5 h-5 sm:w-7 sm:h-7 text-white transform -rotate-45 group-hover:rotate-0 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                        </svg>
                    </div>
                    {{-- Pulse ring effect --}}
                    <div class="absolute inset-0 rounded-xl sm:rounded-2xl bg-emerald-400/20 animate-ping opacity-75" style="animation-duration: 3s;"></div>
                </div>
                
                {{-- Logo Text - Always visible on mobile --}}
                <div class="flex flex-col min-w-0">
                    <div class="flex items-baseline">
                        <span class="text-lg sm:text-2xl font-bold text-white tracking-tight group-hover:text-emerald-300 transition-colors duration-300 whitespace-nowrap" style="font-family: 'Playfair Display', serif;">Savi</span>
                        <span class="text-lg sm:text-2xl font-bold bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent whitespace-nowrap" style="font-family: 'Playfair Display', serif;">Travel</span>
                    </div>
                    <span class="text-[9px] sm:text-[10px] text-white/50 uppercase tracking-[0.2em] font-medium hidden sm:block">Explore • Dream • Discover</span>
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center">
                <div class="flex items-center bg-white/5 backdrop-blur-sm rounded-full px-2 py-1 border border-white/10">
                    <a href="{{ route('home') }}" class="nav-link-new {{ request()->routeIs('home') ? 'nav-link-active-new' : '' }}">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Home
                    </a>
                    <a href="{{ route('packages.index') }}" class="nav-link-new {{ request()->routeIs('packages.*') ? 'nav-link-active-new' : '' }}">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Packages
                    </a>
                    <a href="{{ route('destinations.index') }}" class="nav-link-new {{ request()->routeIs('destinations.*') ? 'nav-link-active-new' : '' }}">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Destinations
                    </a>
                    <a href="{{ route('about') }}" class="nav-link-new {{ request()->routeIs('about') ? 'nav-link-active-new' : '' }}">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        About
                    </a>
                    <a href="{{ route('contact') }}" class="nav-link-new {{ request()->routeIs('contact') ? 'nav-link-active-new' : '' }}">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact
                    </a>
                </div>
            </div>

            {{-- CTA Buttons --}}
            <div class="hidden lg:flex items-center space-x-3">
                {{-- Phone number --}}
                <a href="tel:+1234567890" class="flex items-center text-white/70 hover:text-white text-sm transition-colors group">
                    <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center mr-2 group-hover:bg-white/20 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <span class="hidden xl:block">+1 234 567 890</span>
                </a>
                
                {{-- WhatsApp Button --}}
                <a href="https://wa.me/1234567890" target="_blank" class="btn-whatsapp-new group">
                    <svg class="w-5 h-5 mr-2 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>Book Now</span>
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button type="button" onclick="toggleMobileMenu()" class="lg:hidden relative z-[100] w-11 h-11 sm:w-12 sm:h-12 flex items-center justify-center rounded-xl bg-white/15 hover:bg-white/25 active:bg-white/30 border border-white/30 transition-all duration-300 shadow-lg backdrop-blur-sm cursor-pointer touch-manipulation" id="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false" style="pointer-events: auto; -webkit-tap-highlight-color: transparent;">
                <div class="relative w-5 h-5 sm:w-6 sm:h-6 pointer-events-none">
                    <span class="hamburger-line top-0.5 sm:top-1" id="line-1"></span>
                    <span class="hamburger-line top-[10px] sm:top-[11px]" id="line-2"></span>
                    <span class="hamburger-line top-[18px] sm:top-[19px]" id="line-3"></span>
                </div>
            </button>
        </nav>
    </div>

    {{-- Mobile Menu Overlay --}}
    <div class="mobile-menu-overlay lg:hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-[60]" id="mobile-menu-overlay"></div>
    
    {{-- Mobile Menu --}}
    <div class="mobile-menu-drawer lg:hidden fixed top-0 right-0 bottom-0 w-full max-w-sm bg-gradient-to-b from-slate-900 to-slate-950 backdrop-blur-xl z-[70] shadow-2xl overflow-hidden" id="mobile-menu">
        <div class="flex flex-col h-full pt-20 pb-8 px-6 overflow-y-auto">
            {{-- Mobile Nav Links --}}
            <div class="flex-1 space-y-2">
                <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'mobile-nav-active' : '' }}">
                    <div class="mobile-nav-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <span>Home</span>
                    <svg class="w-5 h-5 ml-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('packages.index') }}" class="mobile-nav-link {{ request()->routeIs('packages.*') ? 'mobile-nav-active' : '' }}">
                    <div class="mobile-nav-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span>Packages</span>
                    <svg class="w-5 h-5 ml-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('destinations.index') }}" class="mobile-nav-link {{ request()->routeIs('destinations.*') ? 'mobile-nav-active' : '' }}">
                    <div class="mobile-nav-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span>Destinations</span>
                    <svg class="w-5 h-5 ml-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'mobile-nav-active' : '' }}">
                    <div class="mobile-nav-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span>About Us</span>
                    <svg class="w-5 h-5 ml-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'mobile-nav-active' : '' }}">
                    <div class="mobile-nav-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <span>Contact</span>
                    <svg class="w-5 h-5 ml-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            
            {{-- Mobile Footer --}}
            <div class="space-y-4 pt-6 border-t border-white/10">
                {{-- Contact Info --}}
                <div class="flex items-center space-x-4 text-white/60">
                    <a href="tel:+1234567890" class="flex items-center space-x-2 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-sm">+1 234 567 890</span>
                    </a>
                </div>
                
                {{-- WhatsApp CTA --}}
                <a href="https://wa.me/1234567890" target="_blank" class="btn-whatsapp-new w-full justify-center py-4 text-base">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </div>
</header>

{{-- Header Spacer --}}
<div class="h-20"></div>

<style>
    /* Desktop Nav Links */
    .nav-link-new {
        display: flex;
        align-items: center;
        padding: 0.625rem 1rem;
        margin: 0 0.125rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.7);
        border-radius: 9999px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .nav-link-new:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }
    
    .nav-link-new svg {
        opacity: 0.7;
        transition: opacity 0.3s;
    }
    
    .nav-link-new:hover svg {
        opacity: 1;
    }
    
    .nav-link-active-new {
        color: white;
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.3), rgba(6, 182, 212, 0.3));
        box-shadow: 0 0 20px rgba(16, 185, 129, 0.2);
    }
    
    .nav-link-active-new svg {
        opacity: 1;
        color: #34d399;
    }
    
    /* WhatsApp Button */
    .btn-whatsapp-new {
        display: inline-flex;
        align-items: center;
        padding: 0.75rem 1.5rem;
        font-size: 0.875rem;
        font-weight: 600;
        color: white;
        background: linear-gradient(135deg, #22c55e, #16a34a);
        border-radius: 9999px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
    }
    
    .btn-whatsapp-new:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(34, 197, 94, 0.4);
    }
    
    /* Hamburger Animation */
    .hamburger-line {
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background: white;
        border-radius: 2px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
    }
    
    #mobile-menu-btn.menu-open #line-1 {
        top: 10px !important;
        transform: rotate(45deg);
    }
    
    #mobile-menu-btn.menu-open #line-2 {
        opacity: 0;
        transform: translateX(10px);
    }
    
    #mobile-menu-btn.menu-open #line-3 {
        top: 10px !important;
        transform: rotate(-45deg);
    }
    
    @media (min-width: 640px) {
        #mobile-menu-btn.menu-open #line-1,
        #mobile-menu-btn.menu-open #line-3 {
            top: 11px !important;
        }
    }
    
    /* Mobile Menu Overlay - Hidden by default */
    .mobile-menu-overlay {
        opacity: 0;
        pointer-events: none;
        visibility: hidden;
        transition: opacity 0.3s ease-out, visibility 0.3s ease-out;
    }
    
    .mobile-menu-overlay.menu-visible {
        opacity: 1 !important;
        pointer-events: auto !important;
        visibility: visible !important;
    }
    
    /* Mobile Menu Drawer - Hidden by default */
    .mobile-menu-drawer {
        transform: translateX(100%);
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        visibility: visible;
    }
    
    .mobile-menu-drawer.menu-visible {
        transform: translateX(0) !important;
    }
    
    /* Ensure mobile menu is visible on mobile devices */
    @media (max-width: 1023px) {
        .mobile-menu-drawer,
        .mobile-menu-overlay {
            display: block !important;
        }
    }
    
    @media (min-width: 1024px) {
        .mobile-menu-drawer,
        .mobile-menu-overlay {
            display: none !important;
        }
    }
    
    /* Ensure mobile menu is visible on mobile devices */
    @media (max-width: 1023px) {
        #mobile-menu {
            display: block !important;
        }
        
        #mobile-menu-overlay {
            display: block !important;
        }
    }
    
    @media (min-width: 1024px) {
        #mobile-menu,
        #mobile-menu-overlay {
            display: none !important;
        }
    }
    
    
    /* Mobile Nav Links */
    .mobile-nav-link {
        display: flex;
        align-items: center;
        padding: 1rem 1.25rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 1.125rem;
        font-weight: 500;
        border-radius: 1rem;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid transparent;
    }
    
    .mobile-nav-link:hover,
    .mobile-nav-active {
        color: white;
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.15), rgba(6, 182, 212, 0.15));
        border-color: rgba(16, 185, 129, 0.3);
    }
    
    .mobile-nav-icon {
        width: 2.5rem;
        height: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 0.75rem;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }
    
    .mobile-nav-link:hover .mobile-nav-icon,
    .mobile-nav-active .mobile-nav-icon {
        background: linear-gradient(135deg, #10b981, #06b6d4);
    }
    
    /* Header scroll effect */
    #main-header.scrolled {
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }
    
    #main-header.scrolled > div:first-child {
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(30, 41, 59, 0.98));
    }
</style>

<script>
// Global function for onclick handler - always available
window.toggleMobileMenu = function() {
    console.log('toggleMobileMenu called');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    
    console.log('Elements found:', {
        btn: !!mobileMenuBtn,
        menu: !!mobileMenu,
        overlay: !!mobileMenuOverlay
    });
    
    if (!mobileMenu || !mobileMenuOverlay) {
        console.error('Mobile menu elements not found');
        return false;
    }
    
    const isOpen = mobileMenu.classList.contains('menu-visible');
    console.log('Menu is currently:', isOpen ? 'OPEN' : 'CLOSED');
    
    if (isOpen) {
        // Close menu
        console.log('Closing menu...');
        if (mobileMenuBtn) {
            mobileMenuBtn.classList.remove('menu-open');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
        mobileMenu.classList.remove('menu-visible');
        mobileMenuOverlay.classList.remove('menu-visible');
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
    } else {
        // Open menu - force display
        console.log('Opening menu...');
        if (mobileMenuBtn) {
            mobileMenuBtn.classList.add('menu-open');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }
        // Force visibility with inline styles
        mobileMenu.style.display = 'block';
        mobileMenu.style.visibility = 'visible';
        mobileMenu.style.transform = 'translateX(0)';
        mobileMenuOverlay.style.display = 'block';
        mobileMenuOverlay.style.visibility = 'visible';
        mobileMenuOverlay.style.opacity = '1';
        mobileMenuOverlay.style.pointerEvents = 'auto';
        // Add visible class
        mobileMenu.classList.add('menu-visible');
        mobileMenuOverlay.classList.add('menu-visible');
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
        console.log('Menu should now be visible');
    }
    
    return true;
};

// Initialize immediately and on DOM ready
(function() {
    'use strict';
    
    let initialized = false;
    
    function initMobileMenu() {
        if (initialized) return;
        
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        
        if (!mobileMenuBtn || !mobileMenu || !mobileMenuOverlay) {
            // Retry if elements not found
            if (document.readyState === 'loading') {
                return; // Will retry on DOMContentLoaded
            }
            setTimeout(initMobileMenu, 50);
            return;
        }
        
        initialized = true;
        
        // Add event listener (in addition to onclick)
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            window.toggleMobileMenu();
        }, { passive: false });
        
        // Close mobile menu when clicking overlay
        mobileMenuOverlay.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            window.toggleMobileMenu();
        }, { passive: false });
        
        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                setTimeout(function() {
                    const menu = document.getElementById('mobile-menu');
                    if (menu && menu.classList.contains('menu-visible')) {
                        window.toggleMobileMenu();
                    }
                }, 150);
            });
        });
        
        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('menu-visible')) {
                window.toggleMobileMenu();
            }
        });
        
        // Prevent menu from closing when clicking inside it
        mobileMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Ensure menu starts closed
        mobileMenu.classList.remove('menu-visible');
        mobileMenuOverlay.classList.remove('menu-visible');
        if (mobileMenuBtn) {
            mobileMenuBtn.classList.remove('menu-open');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
    }
    
    // Try to initialize immediately
    initMobileMenu();
    
    // Also initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileMenu);
    } else {
        // DOM already loaded, try again
        setTimeout(initMobileMenu, 10);
    }
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    }, { passive: true });
})();
</script>
