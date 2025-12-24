<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-header">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between py-4">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-accent-500 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow">
                    <span class="text-white font-display font-bold text-xl">S</span>
                </div>
                <div class="hidden sm:block">
                    <span class="text-2xl font-display font-bold text-white group-hover:text-accent-300 transition-colors">Savi</span>
                    <span class="text-2xl font-display font-bold text-accent-400">Travel</span>
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">
                    Home
                </a>
                <a href="{{ route('packages.index') }}" class="nav-link {{ request()->routeIs('packages.*') ? 'nav-link-active' : '' }}">
                    Packages
                </a>
                <a href="{{ route('destinations.index') }}" class="nav-link {{ request()->routeIs('destinations.*') ? 'nav-link-active' : '' }}">
                    Destinations
                </a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">
                    About Us
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'nav-link-active' : '' }}">
                    Contact
                </a>
            </div>

            {{-- CTA Button --}}
            <div class="hidden lg:flex items-center space-x-4">
                <a href="https://wa.me/1234567890" target="_blank" class="btn-whatsapp text-sm px-4 py-2">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button type="button" class="lg:hidden text-white p-2 hover:bg-white/10 rounded-lg transition-colors" id="mobile-menu-btn" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menu-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="close-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </nav>
    </div>

    {{-- Mobile Menu --}}
    <div class="lg:hidden hidden bg-primary-900/95 backdrop-blur-lg border-t border-white/10" id="mobile-menu">
        <div class="container mx-auto px-4 py-6 space-y-4">
            <a href="{{ route('home') }}" class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg transition-colors {{ request()->routeIs('home') ? 'bg-white/10' : '' }}">
                Home
            </a>
            <a href="{{ route('packages.index') }}" class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg transition-colors {{ request()->routeIs('packages.*') ? 'bg-white/10' : '' }}">
                Packages
            </a>
            <a href="{{ route('destinations.index') }}" class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg transition-colors {{ request()->routeIs('destinations.*') ? 'bg-white/10' : '' }}">
                Destinations
            </a>
            <a href="{{ route('about') }}" class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg transition-colors {{ request()->routeIs('about') ? 'bg-white/10' : '' }}">
                About Us
            </a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg transition-colors {{ request()->routeIs('contact') ? 'bg-white/10' : '' }}">
                Contact
            </a>
            <div class="pt-4 border-t border-white/10">
                <a href="https://wa.me/1234567890" target="_blank" class="btn-whatsapp w-full justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
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
    .nav-link {
        @apply text-white/80 hover:text-white font-medium transition-colors relative;
    }
    .nav-link::after {
        content: '';
        @apply absolute bottom-0 left-0 w-0 h-0.5 bg-accent-400 transition-all duration-300;
    }
    .nav-link:hover::after,
    .nav-link-active::after {
        @apply w-full;
    }
    .nav-link-active {
        @apply text-white;
    }
    
    #main-header {
        background: transparent;
    }
    #main-header.scrolled {
        @apply bg-primary-900/95 backdrop-blur-lg shadow-xl;
    }
</style>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>

