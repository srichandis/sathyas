@extends('layouts.app')

@section('title', 'Our Menu - SATHYAS CATERING')

@section('content')
    {{-- ============ HERO ============ --}}
    <section class="relative bg-[#721c1c] overflow-hidden">
        <!-- Decorative dotted pattern -->
        <div class="absolute inset-0 opacity-[0.06]" style="background-image: radial-gradient(circle, #f5d77f 1px, transparent 1px); background-size: 26px 26px;"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[#d4af37]/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-24 w-96 h-96 rounded-full bg-[#f5d77f]/10 blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 text-center">
            <span class="inline-flex items-center gap-3 text-[11px] tracking-[0.35em] uppercase text-[#f5d77f] font-semibold">
                <span class="h-px w-10 bg-[#d4af37]/70"></span>
                Sathya's Events &amp; Catering
                <span class="h-px w-10 bg-[#d4af37]/70"></span>
            </span>

            <h1 class="mt-5 font-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-white">
                Our <span class="text-[#f5d77f]">Menu</span>
            </h1>

            <p class="mt-5 mx-auto max-w-2xl text-sm sm:text-base text-[#f5e6d3]/90 font-light leading-relaxed">
                From indulgent milkshakes and fresh fruit coolers to the authentic flavours of a traditional Karnataka feast —
                every dish is prepared fresh, pure &amp; sattvic.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-xs font-bold">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-4 py-2 text-[#f5e6d3] backdrop-blur">
                    <span class="text-base">🍽️</span> {{ $totalItems }}+ Dishes
                </span>
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-4 py-2 text-[#f5e6d3] backdrop-blur">
                    <span class="text-base">🍲</span> {{ $totalCategories }} Categories
                </span>
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-4 py-2 text-[#f5e6d3] backdrop-blur">
                    <span class="text-base">🌱</span> 100% Pure Sattvic
                </span>
            </div>
        </div>
    </section>

    {{-- ============ CATEGORY CARDS + FULL MENU ============ --}}
    <div class="py-10 sm:py-14"
         x-data="{
            active: '',
            q: '',
            menu: @js($menuJson),
            init() {
                this.active = this.menu[0].category;
            },
            get searching() {
                return this.q.trim().length > 0;
            },
            matchesIn(cat) {
                const q = this.q.trim().toLowerCase();
                const sec = this.menu.find(s => s.category === cat);
                if (!sec) return 0;
                if (!q) return sec.items.length;
                return sec.items.filter(i => i.name.toLowerCase().includes(q) || (i.trad && i.trad.toLowerCase().includes(q))).length;
            },
            itemVisible(name, trad) {
                const q = this.q.trim().toLowerCase();
                if (!q) return true;
                return name.toLowerCase().includes(q) || (trad && trad.toLowerCase().includes(q));
            },
            get totalMatches() {
                const q = this.q.trim().toLowerCase();
                if (!q) return 0;
                return this.menu.reduce((n, s) => n + s.items.filter(i => i.name.toLowerCase().includes(q) || (i.trad && i.trad.toLowerCase().includes(q))).length, 0);
            },
            setActive(cat) {
                this.q = '';
                this.active = cat;
                this.$nextTick(() => {
                    if (this.$refs.panel) {
                        this.$refs.panel.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            }
         }">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section header + search --}}
            <div class="text-center mb-8 sm:mb-10">
                <div class="flex items-center justify-center space-x-3 mb-2">
                    <div class="h-px bg-[#d4af37] w-12"></div>
                    <span class="text-[#b8860b]">❖</span>
                    <div class="h-px bg-[#d4af37] w-12"></div>
                </div>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#721c1c]">Browse by Category</h2>
                <p class="mt-3 mx-auto max-w-xl text-xs sm:text-sm text-[#6e5d50] font-medium">
                    Tap a category card to explore every dish, or search the full menu below.
                </p>

                <div class="relative mx-auto mt-6 max-w-md">
                    <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-[#b8860b]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" x-model="q" autocomplete="off" placeholder="Search the menu… e.g. milkshake, rasamalai"
                           class="w-full rounded-full border border-[#e2d4bf] bg-white py-3 pl-11 pr-10 text-sm font-medium text-[#2c221e] placeholder:text-[#9c8a76] shadow-sm outline-none transition focus:border-[#b8860b] focus:ring-2 focus:ring-[#d4af37]/40" />
                    <button x-show="q.length > 0" @click="q = ''" title="Clear search"
                            class="absolute right-2 top-1/2 -translate-y-1/2 flex h-7 w-7 items-center justify-center rounded-full bg-[#f4ece1] text-[#721c1c] hover:bg-[#721c1c] hover:text-white transition">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>

            {{-- Category cards --}}
            <div class="grid grid-cols-2 gap-3 sm:gap-4 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                @foreach($menu as $cat => $items)
                    @php $meta = $categories[$cat]; @endphp
                    <button type="button"
                            @click="setActive(@js($cat))"
                            :aria-pressed="!searching && active === @js($cat) ? 'true' : 'false'"
                            :class="[
                                !searching && active === @js($cat)
                                    ? 'border-[#721c1c] bg-[#721c1c] shadow-xl shadow-[#721c1c]/25'
                                    : 'border-[#e8ded0] bg-[#fcf9f2] hover:-translate-y-1 hover:border-[#d4af37] hover:bg-white hover:shadow-lg',
                                searching && matchesIn(@js($cat)) === 0 ? 'opacity-40' : ''
                            ]"
                            class="group relative flex flex-col items-start overflow-hidden rounded-2xl border p-4 text-left transition-all duration-200 sm:p-5">
                        <div class="flex w-full items-start justify-between gap-2">
                            <span class="flex h-10 w-10 sm:h-11 sm:w-11 shrink-0 items-center justify-center rounded-xl bg-[#f4ece1] text-xl sm:text-2xl ring-1 ring-[#e2d4bf]/70 transition duration-200 group-hover:scale-105 group-hover:rotate-3"
                                  :class="!searching && active === @js($cat) ? '!bg-[#f5d77f]/20 !ring-[#f5d77f]/40' : ''">
                                {{ $meta['emoji'] }}
                            </span>
                            <span class="shrink-0 rounded-full px-2 py-1 text-[10px] font-bold leading-none transition"
                                  :class="!searching && active === @js($cat) ? 'bg-white/15 text-[#f5d77f]' : 'bg-[#f4ece1] text-[#721c1c]'">
                                <span x-text="searching ? matchesIn(@js($cat)) : {{ count($items) }}"></span>
                                <span x-show="!searching" class="font-medium opacity-70"> items</span>
                                <span x-show="searching" class="font-medium opacity-70"> found</span>
                            </span>
                        </div>

                        <div class="mt-2.5 min-w-0">
                            @if($meta['kannada'])
                                <span class="block truncate font-serif text-[15px] sm:text-lg font-bold leading-tight" :title="@js($meta['kannada'])">{{ $meta['kannada'] }}</span>
                                <span class="mt-0.5 block truncate text-[10.5px] font-semibold uppercase tracking-wide"
                                      :class="!searching && active === @js($cat) ? 'text-[#f5e6d3]' : 'text-[#6e5d50]'"
                                      :title="@js($cat)">{{ $cat }}</span>
                            @else
                                <span class="block truncate font-serif text-[15px] sm:text-lg font-bold leading-tight" :title="@js($cat)">{{ $cat }}</span>
                            @endif
                        </div>

                        <p class="mt-auto hidden pt-2 text-[10.5px] font-medium leading-snug text-[#9c8a76] sm:line-clamp-2 sm:block"
                           :class="!searching && active === @js($cat) ? '!text-[#f5e6d3]/80' : ''">{{ $meta['subtitle'] }}</p>

                        <span class="pointer-events-none absolute inset-x-0 bottom-0 h-[3px] w-0 rounded-r-full bg-gradient-to-r from-[#d4af37] via-[#f5d77f] to-[#d4af37] transition-all duration-300 group-hover:w-full"
                              :class="!searching && active === @js($cat) ? 'w-full' : ''"></span>
                    </button>
                @endforeach
            </div>

            {{-- Items panel --}}
            <div x-ref="panel" class="mt-10 sm:mt-14 scroll-mt-32 lg:scroll-mt-24">
                {{-- Legend --}}
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 mb-6 text-[11px] font-medium text-[#6e5d50]" x-show="!searching">
                    <span class="inline-flex items-center gap-1.5">
                        <span class="rounded-full border border-[#d4af37]/40 bg-[#d4af37]/15 px-1.5 py-px text-[9px] font-bold uppercase tracking-wider text-[#b8860b]">Must Have</span>
                        Guest favourites
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="rounded-full border border-[#4a6123]/30 bg-[#4a6123]/10 px-1.5 py-px text-[9px] font-bold uppercase tracking-wider text-[#4a6123]">Seasonal</span>
                        Available by season
                    </span>
                </div>

                {{-- Active category panel --}}
                @foreach($menu as $cat => $items)
                    @php $meta = $categories[$cat]; @endphp
                    <section x-show="!searching && active === @js($cat)" x-transition.opacity.duration.200ms>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex h-12 w-12 sm:h-14 sm:w-14 shrink-0 items-center justify-center rounded-full bg-[#721c1c] text-2xl sm:text-[26px] shadow-lg ring-4 ring-[#721c1c]/10">
                                <span class="drop-shadow">{{ $meta['emoji'] }}</span>
                            </div>
                            <div class="min-w-0">
                                <div class="flex flex-wrap items-baseline gap-x-3 gap-y-0.5">
                                    @if($meta['kannada'])
                                        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-[#721c1c] leading-tight">{{ $meta['kannada'] }}</h2>
                                        <span class="text-[#b8860b] font-serif text-xl">/</span>
                                    @endif
                                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-[#2c221e] leading-tight">{{ $cat }}</h2>
                                </div>
                                <p class="mt-1 text-xs font-medium text-[#6e5d50]">
                                    {{ $meta['subtitle'] }}
                                    <span class="text-[#b8860b]">·</span>
                                    <span class="font-semibold text-[#721c1c]">{{ count($items) }} items</span>
                                </p>
                            </div>
                            <div class="ml-2 hidden sm:block h-px flex-1 bg-gradient-to-r from-[#d4af37]/70 to-transparent"></div>
                        </div>

                        <div class="rounded-2xl border border-[#e8ded0] bg-white/70 p-4 sm:p-6 shadow-sm">
                            <div class="grid grid-cols-1 gap-x-10 gap-y-0.5 sm:grid-cols-2">
                                @foreach($items as $item)
                                    @include('components.menu-item-row', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach

                {{-- Search results (across all categories) --}}
                <div x-show="searching">
                    <div class="mb-6">
                        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-[#721c1c]">Search Results</h2>
                        <p class="mt-1.5 text-xs text-[#6e5d50]">
                            <span class="font-semibold text-[#721c1c]" x-text="totalMatches"></span> dish<span x-show="totalMatches !== 1">es</span> match
                            "<span class="font-semibold text-[#721c1c]" x-text="q"></span>"
                        </p>
                    </div>

                    @foreach($menu as $cat => $items)
                        @php $meta = $categories[$cat]; @endphp
                        <div x-show="matchesIn(@js($cat)) > 0" class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="text-lg leading-none">{{ $meta['emoji'] }}</span>
                                <h3 class="font-serif font-bold text-lg text-[#2c221e]">{{ $meta['kannada'] ?? $cat }}</h3>
                                <span class="text-[11px] font-semibold text-[#6e5d50]">
                                    <span x-text="matchesIn(@js($cat))"></span> found
                                </span>
                                <div class="flex-1 h-px bg-gradient-to-r from-[#d4af37]/60 to-transparent ml-2"></div>
                            </div>
                            <div class="rounded-2xl border border-[#e8ded0] bg-white/70 p-4 sm:p-6 shadow-sm">
                                <div class="grid grid-cols-1 gap-x-10 gap-y-0.5 sm:grid-cols-2">
                                    @foreach($items as $item)
                                        @include('components.menu-item-row', ['item' => $item])
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div x-show="totalMatches === 0" class="py-20 text-center">
                        <div class="text-5xl mb-4">🔍</div>
                        <h3 class="font-serif text-2xl font-bold text-[#721c1c]">No dishes found</h3>
                        <p class="mt-2 text-xs text-[#6e5d50]">
                            We couldn't find anything matching <span class="font-semibold text-[#721c1c]" x-text="q"></span>. Try a different search term.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============ CTA + QUOTE + FOOTER ============ --}}
    @include('components.cta-banner')
    @include('components.quote-form')
    @include('components.contact-footer')
@endsection
