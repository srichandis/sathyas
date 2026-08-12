@extends('layouts.app')

@section('title', 'Enquiry #SRI-' . $enquiry->id . ' - SATHYAS CATERING')

@section('content')
<div class="py-12 bg-[#f7f2e8] min-h-screen">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('dashboard') }}" class="text-xs text-gray-500 hover:text-[#721c1c] transition">← Back to Dashboard</a>
        </div>

        <div class="bg-white rounded-xl border border-[#e2d4bf] shadow-md overflow-hidden">
            <div class="bg-[#721c1c] text-white p-6 border-b-2 border-[#d4af37]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs text-[#f5d77f] font-bold uppercase tracking-widest">Enquiry Details</p>
                        <h2 class="text-2xl font-serif font-bold mt-1">#SRI-{{ $enquiry->id }}</h2>
                    </div>
                    <span class="inline-block px-3 py-1.5 rounded-full text-xs font-bold border
                        @if($enquiry->status === 'Pending Review') bg-[#fef3c7] text-[#92400e] border-[#f59e0b]
                        @elseif($enquiry->status === 'Quotation Sent') bg-[#dbeafe] text-[#1e40af] border-[#3b82f6]
                        @elseif($enquiry->status === 'Booking Confirmed') bg-[#d1fae5] text-[#065f46] border-[#10b981]
                        @else bg-[#e5e7eb] text-[#374151] border-[#9ca3af] @endif">
                        {{ $enquiry->status }}
                    </span>
                </div>
            </div>

            <div class="p-6 sm:p-8 space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Event Type</p>
                        <p class="text-base font-semibold text-[#2c221e] mt-1">{{ $enquiry->event_type }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Event Date</p>
                        <p class="text-base font-semibold text-[#2c221e] mt-1">{{ $enquiry->event_date->format('l, d F Y') }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Guest Count</p>
                        <p class="text-base font-semibold text-[#2c221e] mt-1">{{ number_format($enquiry->guest_count) }} Guests</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Estimated Price</p>
                        <p class="text-xl font-serif font-bold text-[#721c1c] mt-1">₹{{ number_format($enquiry->estimated_price) }}</p>
                    </div>
                </div>

                <div class="border-t border-[#e2d4bf] pt-6">
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Meal Types</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($enquiry->meal_types as $meal)
                            <span class="inline-flex items-center px-2.5 py-1 bg-[#f7f2e8] text-xs font-medium text-[#5c4a3e] rounded border border-[#d8c3a5]">{{ $meal }}</span>
                        @endforeach
                    </div>
                </div>

                @if($enquiry->selected_dishes)
                <div class="border-t border-[#e2d4bf] pt-6">
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Selected Dishes</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($enquiry->selected_dishes as $dish)
                            <span class="inline-flex items-center px-2.5 py-1 bg-white text-xs font-medium text-[#4a6123] rounded border border-[#4a6123]/30">
                                <svg class="w-3 h-3 mr-1 text-[#4a6123]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                {{ $dish }}
                            </span>
                        @endforeach
                    </div>
                </div>
                @endif

                @if($enquiry->special_instructions)
                <div class="border-t border-[#e2d4bf] pt-6">
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Special Instructions</p>
                    <p class="text-sm text-[#5c4a3e] bg-[#f7f2e8] p-3.5 rounded border border-[#e2d4bf]">{{ $enquiry->special_instructions }}</p>
                </div>
                @endif

                <div class="border-t border-[#e2d4bf] pt-6 flex justify-between text-xs text-gray-500">
                    <span>Submitted: {{ $enquiry->created_at->format('d M Y, h:i A') }}</span>
                    <span>Your reference: #SRI-{{ $enquiry->id }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
