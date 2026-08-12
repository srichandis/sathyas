<header class="w-full relative z-30">
    <!-- Top Contact Strip -->
    <div class="bg-[#f7f2e8] border-b border-[#e5d8c3] py-2 text-xs text-[#5c4a3e] px-4 sm:px-8">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-y-2">
            <div class="flex flex-wrap items-center space-x-4 md:space-x-6">
                <a href="tel:+919742985143" class="flex items-center space-x-1.5 hover:text-[#721c1c] transition">
                    <svg class="w-3.5 h-3.5 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="font-medium">+91 9742985143</span>
                </a>
                <a href="https://wa.me/919742985143" target="_blank" rel="noreferrer" class="flex items-center space-x-1.5 hover:text-emerald-700 transition">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse inline-block"></span>
                    <span class="font-medium">WhatsApp: +91 9742985143</span>
                </a>
                <a href="mailto:rooanand.js5@gmail.com" class="hidden sm:flex items-center space-x-1.5 hover:text-[#721c1c] transition">
                    <svg class="w-3.5 h-3.5 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>rooanand.js5@gmail.com</span>
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <div class="hidden lg:flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Bengaluru</span>
                </div>
                <div class="hidden md:flex items-center space-x-1.5 border-l border-[#d1c2ab] pl-4">
                    <svg class="w-3.5 h-3.5 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>7:00 AM – 10:00 PM</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="bg-[#fdfbf7] border-b border-[#e8ded0] shadow-sm sticky top-0 py-3 lg:py-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between lg:h-24 gap-y-3">

            @php
                $currentRoute = request()->routeIs('home') ? 'home' : (request()->routeIs('about') ? 'about' : (request()->routeIs('services') ? 'services' : (request()->routeIs('menu') ? 'menu' : (request()->routeIs('process') ? 'process' : (request()->routeIs('contact') ? 'contact' : '')))));
            @endphp

            <!-- Left Nav Links (Desktop) -->
            <div class="hidden lg:flex items-center space-x-6 xl:space-x-8 text-xs font-bold uppercase tracking-wider text-[#4a3b32] flex-1 justify-start">
                <a href="{{ route('home') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'home' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">HOME</a>
                <a href="{{ route('about') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'about' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">ABOUT US</a>
                <a href="{{ route('services') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'services' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">CATERING SERVICES</a>
            </div>

            <!-- Centered Logo -->
            <a href="{{ route('home') }}" class="flex justify-center group shrink-0 mx-auto py-1">
                <img src="{{ asset('images/local.png') }}" alt="SATHYAS CATERING Logo" class="h-14 sm:h-16 w-auto object-contain" />
            </a>

            <!-- Right Nav Links & Auth -->
            <div class="flex flex-wrap items-center justify-center lg:justify-end space-x-3 sm:space-x-4 flex-1">
                <div class="hidden lg:flex items-center space-x-6 text-xs font-bold uppercase tracking-wider text-[#4a3b32] mr-2">
                    <a href="{{ route('menu') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'menu' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">MENU</a>
                    <a href="{{ route('process') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'process' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">OUR PROCESS</a>
                    <a href="{{ route('contact') }}" class="pb-1 hover:text-[#721c1c] transition {{ $currentRoute === 'contact' ? 'text-[#721c1c] border-b-2 border-[#721c1c]' : '' }}">CONTACT US</a>
                </div>

                <!-- Mobile Nav Links -->
                <div class="flex lg:hidden items-center space-x-4 text-[11px] font-bold uppercase tracking-wider text-[#4a3b32] w-full justify-center pb-1">
                    <a href="{{ route('home') }}" class="hover:text-[#721c1c] transition {{ $currentRoute === 'home' ? 'text-[#721c1c] font-bold' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-[#721c1c] transition {{ $currentRoute === 'about' ? 'text-[#721c1c] font-bold' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="hover:text-[#721c1c] transition {{ $currentRoute === 'services' ? 'text-[#721c1c] font-bold' : '' }}">Services</a>
                    <a href="{{ route('menu') }}" class="hover:text-[#721c1c] transition {{ $currentRoute === 'menu' ? 'text-[#721c1c] font-bold' : '' }}">Menu</a>
                    <a href="{{ route('contact') }}" class="hover:text-[#721c1c] transition {{ $currentRoute === 'contact' ? 'text-[#721c1c] font-bold' : '' }}">Contact</a>
                </div>

                @auth
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 bg-[#f4ece1] hover:bg-[#ebdcc7] text-[#721c1c] px-3 py-1.5 rounded-md border border-[#d8c3a5] text-xs font-semibold transition">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            <span class="max-w-[100px] truncate">{{ Auth::user()->name }}</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" title="Log out" class="p-1.5 text-gray-500 hover:text-red-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
