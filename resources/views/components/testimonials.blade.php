<section class="py-16 bg-[#f7f2e8] border-t border-b border-[#e5d8c3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Motif -->
        <div class="text-center mb-12">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">What Our Clients Say</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
        </div>

        <!-- Testimonials Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($testimonials->take(2) as $t)
                <div class="bg-[#fcf9f2] p-8 rounded-lg border border-[#e2d4bf] shadow-sm relative flex flex-col justify-between">
                    <div class="flex items-start space-x-4 mb-4">
                        <svg class="w-10 h-10 text-[#556b2f] flex-shrink-0 rotate-180 opacity-80" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/></svg>
                        <div>
                            <p class="text-sm text-[#4a3b32] font-serif italic leading-relaxed">"{{ $t->comment }}"</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-[#eee2d0] flex items-center justify-between">
                        <div>
                            <h4 class="font-bold text-sm text-[#721c1c]">— {{ $t->name }}</h4>
                            <span class="text-xs text-[#8c7667]">{{ $t->location }} • <span class="italic">{{ $t->event }}</span></span>
                        </div>
                        <div class="flex space-x-1">
                            @for($i = 0; $i < $t->rating; $i++)
                                <svg class="w-4 h-4 fill-[#d4af37] text-[#d4af37]" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center py-12 text-gray-500">
                    <p class="text-lg font-serif">Testimonials coming soon...</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
