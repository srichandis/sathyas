@extends('layouts.app')

@section('title', 'My Dashboard - SATHYAS CATERING')

@section('content')
<!-- Dashboard Header -->
<div class="bg-[#721c1c] text-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-serif font-bold">My Dashboard</h1>
            <p class="text-sm text-[#f5e6d3] mt-1">Welcome back, {{ Auth::user()->name }}!</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}#quote" class="bg-[#c59b27] hover:bg-[#b0881d] text-[#4a1212] px-5 py-2.5 rounded text-xs font-bold uppercase tracking-wider transition shadow-md inline-flex items-center space-x-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                <span>New Enquiry</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-xs text-white/80 hover:text-white border border-white/30 px-3 py-2 rounded transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Dashboard Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
        <div class="bg-white rounded-lg border border-[#e2d4bf] p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Total Enquiries</p>
                    <p class="text-3xl font-serif font-bold text-[#721c1c] mt-1">{{ count($enquiries) }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-[#f7f2e8] flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#721c1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg border border-[#e2d4bf] p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Pending Review</p>
                    <p class="text-3xl font-serif font-bold text-[#b8860b] mt-1">{{ $enquiries->where('status', 'Pending Review')->count() }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-[#f7f2e8] flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#b8860b]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg border border-[#e2d4bf] p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Quotation Sent</p>
                    <p class="text-3xl font-serif font-bold text-[#4a6123] mt-1">{{ $enquiries->where('status', 'Quotation Sent')->count() }}</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-[#f7f2e8] flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#4a6123]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Enquiries Table -->
    <div class="bg-white rounded-lg border border-[#e2d4bf] shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-[#e2d4bf] bg-[#f7f2e8]">
            <h3 class="font-serif font-bold text-lg text-[#2c221e]">My Enquiries</h3>
        </div>

        @if(count($enquiries) > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-[#fdfbf7] border-b border-[#e2d4bf]">
                        <tr>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">ID</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Event Type</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Date</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Guests</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Estimated</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Status</th>
                            <th class="text-left px-6 py-3 text-xs font-bold text-[#721c1c] uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#eee2d0]">
                        @foreach($enquiries as $enquiry)
                            <tr class="hover:bg-[#f7f2e8] transition">
                                <td class="px-6 py-4 font-semibold text-[#721c1c]">#SRI-{{ $enquiry->id }}</td>
                                <td class="px-6 py-4">{{ $enquiry->event_type }}</td>
                                <td class="px-6 py-4">{{ $enquiry->event_date->format('d M Y') }}</td>
                                <td class="px-6 py-4">{{ $enquiry->guest_count }}</td>
                                <td class="px-6 py-4 font-semibold">₹{{ number_format($enquiry->estimated_price) }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $statusColors = [
                                            'Pending Review' => 'bg-[#fef3c7] text-[#92400e] border-[#f59e0b]',
                                            'Quotation Sent' => 'bg-[#dbeafe] text-[#1e40af] border-[#3b82f6]',
                                            'Booking Confirmed' => 'bg-[#d1fae5] text-[#065f46] border-[#10b981]',
                                            'Completed' => 'bg-[#e5e7eb] text-[#374151] border-[#9ca3af]',
                                        ];
                                        $color = $statusColors[$enquiry->status] ?? 'bg-gray-100 text-gray-600 border-gray-300';
                                    @endphp
                                    <span class="inline-block px-2.5 py-1 rounded-full text-[10px] font-bold border {{ $color }}">
                                        {{ $enquiry->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 flex items-center space-x-3">
                                    <button onclick="openEnquiry({{ $enquiry->id }})" class="text-[#721c1c] hover:text-[#581414] text-xs font-semibold hover:underline transition">
                                        View
                                    </button>
                                    <form method="POST" action="{{ route('enquiry.destroy', $enquiry) }}" onsubmit="return confirm('Delete enquiry #SRI-{{ $enquiry->id }}? This cannot be undone.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-xs font-semibold hover:underline transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-16">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <p class="text-gray-500 font-serif text-lg mb-2">No enquiries yet</p>
                <p class="text-gray-400 text-sm mb-6">Start by requesting a catering quote.</p>
                <a href="{{ route('home') }}#quote" class="bg-[#721c1c] hover:bg-[#581414] text-white px-6 py-2.5 rounded text-xs font-bold uppercase tracking-wider transition inline-block">
                    Submit Your First Enquiry
                </a>
            </div>
        @endif
    </div>

    <!-- Quick Links -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href="{{ route('home') }}" class="bg-white rounded-lg border border-[#e2d4bf] p-5 hover:shadow-md transition flex items-center space-x-4 group">
            <div class="w-10 h-10 rounded-full bg-[#f7f2e8] flex items-center justify-center group-hover:bg-[#721c1c] group-hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            </div>
            <div>
                <p class="font-bold text-sm text-[#2c221e]">Back to Home</p>
                <p class="text-xs text-gray-500">Explore catering services and menu</p>
            </div>
        </a>
        <a href="{{ route('profile.edit') }}" class="bg-white rounded-lg border border-[#e2d4bf] p-5 hover:shadow-md transition flex items-center space-x-4 group">
            <div class="w-10 h-10 rounded-full bg-[#f7f2e8] flex items-center justify-center group-hover:bg-[#721c1c] group-hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
                <p class="font-bold text-sm text-[#2c221e]">Profile Settings</p>
                <p class="text-xs text-gray-500">Update your name, email, and password</p>
            </div>
        </a>
    </div>
</div>

<!-- Enquiry Detail Modal -->
<div id="enquiryModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/60 backdrop-blur-xs" onclick="if(event.target===this)closeEnquiry()">
    <div class="bg-[#fdfbf7] rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#d8c3a5] animate-in fade-in zoom-in-95 duration-200">
        <!-- Modal Header -->
        <div class="bg-[#721c1c] text-white p-5 border-b-2 border-[#d4af37] flex justify-between items-center sticky top-0">
            <div>
                <p class="text-xs text-[#f5d77f] font-bold uppercase tracking-widest">Enquiry Details</p>
                <h2 class="text-xl font-serif font-bold mt-1" id="modalTitle">#SRI-</h2>
            </div>
            <button onclick="closeEnquiry()" class="text-white/80 hover:text-white p-1.5 rounded-full hover:bg-white/10 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="p-6 space-y-5" id="modalBody">
            <!-- Details will be populated by JavaScript -->
        </div>

        <!-- Modal Footer -->
        <div class="bg-[#f4ece1] px-6 py-4 border-t border-[#e2d4bf] flex justify-end">
            <button onclick="closeEnquiry()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-5 py-2 rounded text-xs font-bold transition">
                Close
            </button>
        </div>
    </div>
</div>

@php
    $enquiriesData = $enquiries->keyBy->id->map(function($e) {
        return [
            'id' => '#SRI-' . $e->id,
            'user_name' => $e->user_name,
            'user_email' => $e->user_email,
            'phone' => $e->phone,
            'event_type' => $e->event_type,
            'event_date' => $e->event_date->format('l, d F Y'),
            'event_location' => $e->event_location,
            'guest_count' => number_format($e->guest_count),
            'meal_types' => is_array($e->meal_types) ? implode(', ', $e->meal_types) : $e->meal_types,
            'selected_dishes' => is_array($e->selected_dishes) ? implode(', ', $e->selected_dishes) : ($e->selected_dishes ?? 'None selected'),
            'special_instructions' => $e->special_instructions ?: 'None',
            'estimated_price' => '₹' . number_format($e->estimated_price),
            'status' => $e->status,
            'created_at' => $e->created_at->format('d M Y, h:i A'),
        ];
    });
@endphp

<script>
    // Enquiry data store
    const enquiries = @json($enquiriesData);

    function openEnquiry(id) {
        const e = enquiries[id];
        if (!e) return;

        document.getElementById('modalTitle').textContent = e.id;

        document.getElementById('modalBody').innerHTML = `
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Name</p>
                    <p class="text-base font-semibold mt-1">${e.user_name}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Email</p>
                    <p class="text-base mt-1">${e.user_email}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Phone</p>
                    <p class="text-base mt-1">${e.phone}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Event Type</p>
                    <p class="text-base font-semibold text-[#721c1c] mt-1">${e.event_type}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Event Date</p>
                    <p class="text-base mt-1">${e.event_date}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Guest Count</p>
                    <p class="text-base mt-1">${e.guest_count}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Location</p>
                    <p class="text-base mt-1">${e.event_location}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 uppercase tracking-wider font-bold">Estimated Price</p>
                    <p class="text-xl font-serif font-bold text-[#721c1c] mt-1">${e.estimated_price}</p>
                </div>
            </div>

            <div class="border-t border-[#e2d4bf] pt-4">
                <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Meal Types</p>
                <div class="flex flex-wrap gap-2">
                    ${e.meal_types.split(', ').map(m => `<span class="inline-block px-2.5 py-1 bg-[#f7f2e8] text-xs font-medium text-[#5c4a3e] rounded border border-[#d8c3a5]">${m}</span>`).join('')}
                </div>
            </div>

            <div class="border-t border-[#e2d4bf] pt-4">
                <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Selected Dishes</p>
                <p class="text-sm text-[#5c4a3e]">${e.selected_dishes}</p>
            </div>

            <div class="border-t border-[#e2d4bf] pt-4">
                <p class="text-xs text-gray-500 uppercase tracking-wider font-bold mb-2">Special Instructions</p>
                <p class="text-sm text-[#5c4a3e] bg-[#f7f2e8] p-3 rounded border border-[#e2d4bf]">${e.special_instructions}</p>
            </div>

            <div class="border-t border-[#e2d4bf] pt-4 flex justify-between text-xs text-gray-500">
                <span>Status: <strong>${e.status}</strong></span>
                <span>Submitted: ${e.created_at}</span>
            </div>
        `;

        document.getElementById('enquiryModal').classList.remove('hidden');
        document.getElementById('enquiryModal').classList.add('flex');
    }

    function closeEnquiry() {
        document.getElementById('enquiryModal').classList.add('hidden');
        document.getElementById('enquiryModal').classList.remove('flex');
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeEnquiry();
    });
</script>
@endsection
