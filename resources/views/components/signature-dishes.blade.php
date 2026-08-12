<section id="menu" class="py-16 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Motif -->
        <div class="text-center mb-10">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">Signature Dishes</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <p class="text-xs text-[#6e5d50] mt-3 font-medium">Handcrafted with organic cow ghee, fresh spices, and zero onion/garlic</p>
        </div>

        <!-- Dishes Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            @forelse($signatureDishes as $dish)
                <div class="bg-[#fcf9f2] rounded-lg border border-[#e8ded0] overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer flex flex-col group text-center hover:-translate-y-1 duration-300">
                    <div class="relative h-36 sm:h-44 overflow-hidden">
                        <img src="{{ $dish->image }}" alt="{{ $dish->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        @if($dish->is_popular)
                            <span class="absolute top-2 right-2 bg-[#721c1c] text-white text-[10px] font-bold px-2 py-0.5 rounded shadow">Must Have</span>
                        @endif
                    </div>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-serif font-bold text-base sm:text-lg text-[#2c221e] group-hover:text-[#721c1c] transition">{{ $dish->name }}</h3>
                            @if($dish->traditional_name)
                                <span class="text-xs text-[#b8860b] font-serif block mt-0.5 mb-2">{{ $dish->traditional_name }}</span>
                            @endif
                        </div>
                        <div class="mt-2 pt-2 border-t border-[#eee2d0] flex items-center justify-between text-[11px] text-[#721c1c] font-semibold">
                            <span class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-[#b8860b]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                                <span>Pure Sattvic</span>
                            </span>
                            <span class="text-[#4a6123] flex items-center space-x-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Recipe</span>
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-4 text-center py-12 text-gray-500">
                    <p class="text-lg font-serif">Our signature dishes are being updated. Please check back soon!</p>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <p class="text-xs text-[#6e5d50] mb-4">Craving something not on our menu? We happily tailor every menu to your function's needs.</p>
            <a href="#quote" class="bg-[#800000] hover:bg-[#600000] text-white px-7 py-3 rounded text-xs font-bold uppercase tracking-widest transition shadow-md border border-[#a13d2d] inline-block">
                Customize Your Menu
            </a>
        </div>
    </div>
</section>
