<section id="process" class="py-16 bg-[#f7f2e8] border-t border-b border-[#e5d8c3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Motif -->
        <div class="text-center mb-14">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">Our Catering Process</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
        </div>

        <!-- Steps -->
        <div class="relative">
            <div class="hidden lg:block absolute top-6 left-[10%] right-[10%] h-0.5 border-t-2 border-dashed border-[#b8860b]/50 z-0"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 relative z-10">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Share Your Requirement', 'desc' => 'Tell us about your event, guest count, and date.'],
                        ['num' => '2', 'title' => 'Customized Menu', 'desc' => 'Select traditional dishes tailored to your family custom.'],
                        ['num' => '3', 'title' => 'Quotation', 'desc' => 'Receive transparent pricing with no hidden charges.'],
                        ['num' => '4', 'title' => 'Fresh Preparation', 'desc' => 'Cooked fresh on the day using organic ghee & pure spices.'],
                        ['num' => '5', 'title' => 'Delightful Service', 'desc' => 'Warm hospitality on banana leaves for your honored guests.'],
                    ];
                @endphp

                @foreach($steps as $st)
                    <div class="flex flex-col items-center text-center group">
                        <div class="w-8 h-8 rounded-full bg-[#4a6123] text-white text-xs font-bold flex items-center justify-center shadow-sm mb-3 border-2 border-[#f7f2e8]">
                            {{ $st['num'] }}
                        </div>
                        <div class="w-16 h-16 rounded-full bg-[#fdfbf7] border-2 border-[#d4af37] flex items-center justify-center shadow-md mb-4 group-hover:scale-110 group-hover:border-[#721c1c] transition-all">
                            <svg class="w-5 h-5 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @if($loop->index === 0)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                @elseif($loop->index === 1)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                @elseif($loop->index === 2)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"/>
                                @elseif($loop->index === 3)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
                                @else
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                @endif
                            </svg>
                        </div>
                        <h3 class="font-serif font-bold text-sm sm:text-base text-[#2c221e] mb-1">{{ $st['title'] }}</h3>
                        <p class="text-xs text-[#6e5d50] max-w-[160px] leading-relaxed">{{ $st['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
