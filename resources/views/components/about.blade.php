<section id="about" class="py-16 md:py-20 bg-[#fdfbf7] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Image -->
            <div class="relative group">
                <div class="absolute -inset-2 bg-gradient-to-r from-[#d4af37]/30 to-[#800000]/20 rounded-xl blur-md opacity-50 group-hover:opacity-80 transition duration-500"></div>
                <div class="relative rounded-xl overflow-hidden shadow-xl border-4 border-[#e8ded0]">
                    <img src="{{ asset('images/image1.jpeg') }}"
                         alt="Sathya's Catering — Authentic Brahmin feast"
                         class="w-full h-[380px] sm:h-[420px] object-cover hover:scale-105 transition-transform duration-700" />

                </div>
            </div>

            <!-- Right Content -->
            <div class="flex flex-col justify-center">
                <div class="flex items-center space-x-3 mb-3">
                    <div class="h-px bg-[#d4af37] w-8"></div>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#b8860b]">OUR HERITAGE</span>
                    <div class="h-px bg-[#d4af37] w-8"></div>
                </div>

                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c] mb-6 leading-tight">
                    Tradition Served <br />with Love
                </h2>

                <p class="text-[#5a483c] text-base leading-relaxed mb-6 font-normal">
                    Every meal we prepare carries the warmth of home and the richness of our culinary heritage. Our experienced team specializes in authentic Brahmin cuisine, crafted using time-honoured recipes and fresh ingredients to make every celebration memorable.
                </p>

                <p class="text-[#5a483c] text-sm leading-relaxed mb-8 font-normal">
                    From hand-ground masalas and pure cow ghee to traditional copper vessel slow cooking, SATHYAS CATERING upholds strict traditional principles (Shuddha & Sattvica) for weddings, upanayanams, and holy poojas.
                </p>

                <div>
                    <a href="{{ route('about') }}" class="bg-[#4a6123] hover:bg-[#3a4d1b] text-white px-7 py-3 rounded text-xs font-bold uppercase tracking-wider transition shadow-md border border-[#374719] inline-block">
                        LEARN MORE ABOUT US
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
