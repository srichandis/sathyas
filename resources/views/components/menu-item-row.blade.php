@php
    $displayName = str_replace(' (Seasonal)', '', $item->name);
    $seasonal = str_contains($item->name, ' (Seasonal)');
    $initial = mb_substr($displayName, 0, 1);
@endphp
<div class="group/item flex items-center gap-3 rounded-lg px-2 py-2 transition hover:bg-[#f7f2e8]"
     x-show="itemVisible(@js($item->name), @js($item->traditional_name))">
    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-[#e2d4bf] bg-[#f4ece1] font-serif text-[11px] font-bold text-[#721c1c] transition group-hover/item:border-[#d4af37] group-hover/item:bg-[#721c1c] group-hover/item:text-white">{{ $initial }}</span>
    <div class="min-w-0 flex-1">
        <div class="flex flex-wrap items-center gap-x-2 gap-y-0.5">
            <h3 class="text-[13px] sm:text-sm font-semibold leading-snug text-[#2c221e] transition group-hover/item:text-[#721c1c]">{{ $displayName }}</h3>
            @if($seasonal)
                <span class="rounded-full border border-[#4a6123]/30 bg-[#4a6123]/10 px-1.5 py-px text-[9px] font-bold uppercase tracking-wider text-[#4a6123]">Seasonal</span>
            @endif
            @if($item->is_popular)
                <span class="rounded-full border border-[#d4af37]/40 bg-[#d4af37]/15 px-1.5 py-px text-[9px] font-bold uppercase tracking-wider text-[#b8860b]">Must Have</span>
            @endif
        </div>
        @if($item->traditional_name)
            <span class="block font-serif text-[11px] text-[#b8860b] mt-0.5">{{ $item->traditional_name }}</span>
        @endif
    </div>
    <span class="shrink-0 text-[#b8860b] text-xs opacity-0 transition group-hover/item:opacity-100">✦</span>
</div>
