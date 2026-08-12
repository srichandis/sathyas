<section id="home" class="relative bg-[#200d07] text-[#fefcf9] min-h-[580px] md:min-h-[640px] flex items-center overflow-hidden">
    @php
        $heroBanners = [
            'https://images.pexels.com/photos/15459821/pexels-photo-15459821.jpeg?auto=compress&cs=tinysrgb&w=1920',
            'https://images.pexels.com/photos/6359420/pexels-photo-6359420.jpeg?auto=compress&cs=tinysrgb&w=1920',
            'https://images.pexels.com/photos/8818741/pexels-photo-8818741.jpeg?auto=compress&cs=tinysrgb&w=1920',
            'https://images.unsplash.com/photo-1610192244261-3f33de3f55e4?auto=format&fit=crop&w=1920&q=80',
        ];
    @endphp

    <!-- Slideshow Background Images -->
    @foreach($heroBanners as $index => $banner)
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-45 hero-slide {{ $index === 0 ? 'active' : '' }}"
             data-slide="{{ $index }}"
             style="background-image: url('{{ $banner }}');">
        </div>
    @endforeach

    <!-- Dark warm gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#1c0803]/95 via-[#230b05]/80 to-transparent z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-20 w-full">
        <div class="max-w-2xl">
            <!-- Sattvic badge -->
            <div class="inline-flex items-center space-x-2 bg-[#d4af37]/15 border border-[#d4af37]/40 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest text-[#f5d77f] mb-6 backdrop-blur-sm">
                <svg class="w-3.5 h-3.5 text-[#f5d77f]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                <span>100% Pure Brahmin Sattvic Heritage Cuisine</span>
            </div>

            <!-- Hero Headline -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold tracking-tight text-white leading-[1.15] mb-6">
                Authentic <br class="hidden sm:inline" />
                Brahmin Catering <br />
                <span class="text-[#f3d382]">for Every Auspicious</span> Occasion
            </h1>

            <!-- Subtitle -->
            <p class="text-base sm:text-lg text-[#e8d2bd] font-normal leading-relaxed mb-8 max-w-xl">
                Traditional recipes, pure ingredients, and heartfelt hospitality for weddings, poojas, housewarmings, upanayanams, and family celebrations.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap items-center gap-4">
                <a href="{{ route('contact') }}" class="bg-[#800000] hover:bg-[#600000] text-white px-8 py-3.5 rounded font-bold text-xs uppercase tracking-widest shadow-xl transition border border-[#b83c2a] flex items-center space-x-2 group">
                    <span>GET A QUOTE</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
                <a href="{{ route('menu') }}" class="border-2 border-white/80 hover:bg-white/10 hover:border-white text-white px-8 py-3 rounded font-bold text-xs uppercase tracking-widest transition">
                    VIEW MENU
                </a>
            </div>

            <!-- Trust badges -->
            <div class="mt-12 pt-8 border-t border-white/15 flex flex-wrap items-center gap-6 text-xs text-[#d8c0aa]">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    <span>Zero Onion & Garlic Option</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-[#d4af37]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    <span>Served on Fresh Plantain Leaves</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const slides = document.querySelectorAll('.hero-slide');
        if (slides.length < 2) return;

        let current = 0;

        function nextSlide() {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }

        setInterval(nextSlide, 3000);
    })();
</script>

<style>
    .hero-slide {
        transition: opacity 0.8s ease-in-out;
        opacity: 0;
    }
    .hero-slide.active {
        opacity: 0.45;
    }
</style>
