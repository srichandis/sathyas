<section id="services" class="py-16 bg-[#f7f2e8] border-t border-b border-[#e5d8c3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">Catering Services</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
        </div>

        <!-- Services Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $services = [
                    [
                        'id' => 'wedding',
                        'title' => 'Weddings',
                        'subtitle' => 'ಕಲ್ಯಾಣ ಮಹೋತ್ಸವಗಳು',
                        'description' => 'Complete traditional wedding catering with authentic menus, multi-course banana leaf spreads, and flawless service.',
                        'image' => 'https://images.pexels.com/photos/15459821/pexels-photo-15459821.jpeg?auto=compress&cs=tinysrgb&w=800',
                    ],
                    [
                        'id' => 'religious',
                        'title' => 'Religious Functions',
                        'subtitle' => 'ಧಾರ್ಮಿಕ ಪೂಜೆ ಹಾಗೂ ಸಮಾರಂಭಗಳು',
                        'description' => 'Poojas, Satyanarayana Vratha, Seemantha, Upanayanam and all religious ceremonies served with strict sattvic purity.',
                        'image' => 'https://images.pexels.com/photos/6359420/pexels-photo-6359420.jpeg?auto=compress&cs=tinysrgb&w=800',
                    ],
                    [
                        'id' => 'family',
                        'title' => 'Family Celebrations',
                        'subtitle' => 'ಗೃಹಪ್ರವೇಶ ಮತ್ತು ಕೌಟುಂಬಿಕ ಕಾರ್ಯಕ್ರಮಗಳು',
                        'description' => 'Housewarming, birthdays, anniversaries and all special family gatherings made memorable with authentic flavors.',
                        'image' => 'https://images.pexels.com/photos/8818741/pexels-photo-8818741.jpeg?auto=compress&cs=tinysrgb&w=800',
                    ],
                ];
            @endphp

            @foreach($services as $srv)
                <div class="bg-[#fcf9f2] rounded-lg border border-[#e2d4bf] overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $srv['image'] }}" alt="{{ $srv['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-[#fdfbf7] border-2 border-[#4a6123] flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-[#4a6123]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @if($loop->index === 0)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4m7-4l-3 3m0 0l3 3m-3-3h10"/>
                                @elseif($loop->index === 1)
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>
                                @else
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                @endif
                            </svg>
                        </div>
                    </div>

                    <div class="pt-8 pb-6 px-6 text-center flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-serif font-bold text-xl text-[#2c221e] mb-1">{{ $srv['title'] }}</h3>
                            <span class="text-xs text-[#b8860b] font-serif block mb-3">{{ $srv['subtitle'] }}</span>
                            <p class="text-xs text-[#6e5d50] leading-relaxed mb-6">{{ $srv['description'] }}</p>
                        </div>
                        <a href="#quote" class="block w-full py-2.5 px-4 bg-[#f4ece1] hover:bg-[#4a6123] hover:text-white text-[#4a6123] text-xs font-bold uppercase tracking-wider rounded border border-[#d1be9f] transition">
                            Book for {{ $srv['title'] }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        @if(!isset($hideNavButton) || !$hideNavButton)
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="bg-[#4a6123] hover:bg-[#384a1a] text-white px-8 py-3 rounded text-xs font-bold uppercase tracking-widest transition shadow-md border border-[#324217] inline-block">
                EXPLORE SERVICES
            </a>
        </div>
        @endif
    </div>
</section>
