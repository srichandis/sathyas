<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "Sathya's Events & Catering | Making Every Celebration Memorable")</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fdfbf7] text-[#2c221e] antialiased font-sans selection:bg-[#721c1c] selection:text-white">
    <!-- Flash Messages -->
    @if(session('success'))
        <div class="fixed bottom-6 right-6 z-50 bg-[#721c1c] text-white px-5 py-3 rounded-lg shadow-2xl border border-[#d4af37] flex items-center space-x-3 animate-in slide-in-from-bottom-5 duration-300" id="flash-message">
            <svg class="w-5 h-5 text-[#f5d77f]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="text-xs font-semibold">{{ session('success') }}</span>
        </div>
        <script>
            setTimeout(function() {
                var el = document.getElementById('flash-message');
                if (el) { el.style.opacity = '0'; el.style.transition = 'opacity 0.5s'; setTimeout(function(){ el.remove(); }, 500); }
            }, 5000);
        </script>
    @endif

    @if(session('error'))
        <div class="fixed bottom-6 right-6 z-50 bg-red-800 text-white px-5 py-3 rounded-lg shadow-2xl border border-red-600 flex items-center space-x-3 animate-in slide-in-from-bottom-5 duration-300" id="flash-error">
            <svg class="w-5 h-5 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="text-xs font-semibold">{{ session('error') }}</span>
        </div>
        <script>
            setTimeout(function() {
                var el = document.getElementById('flash-error');
                if (el) { el.style.opacity = '0'; el.style.transition = 'opacity 0.5s'; setTimeout(function(){ el.remove(); }, 500); }
            }, 5000);
        </script>
    @endif

    <!-- Navigation Bar -->
    @include('components.navbar')

    <!-- Main Content -->
    @yield('content')

    @stack('scripts')
</body>
</html>
