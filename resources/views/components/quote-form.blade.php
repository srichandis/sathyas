<section id="quote" class="py-16 bg-[#f7f2e8] border-t border-b border-[#e5d8c3] scroll-mt-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-[#721c1c]">Get a Custom Quote</h2>
            <div class="flex items-center justify-center space-x-3 mt-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <p class="text-xs text-[#6e5d50] mt-3 font-medium">Fill in your details and our catering expert will respond within 2 hours</p>
        </div>

        <form action="{{ route('enquiry.store') }}" method="POST" class="bg-[#fcf9f2] rounded-xl border border-[#e2d4bf] shadow-lg overflow-hidden">
            @csrf                            <div class="p-6 sm:p-8 space-y-6">
                                <!-- Personal Details Row -->
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Your Name</label>
                                        <input type="text" name="user_name" value="{{ old('user_name', auth()->user()->name ?? '') }}" required
                                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('user_name') border-red-500 @enderror"
                                               placeholder="Enter your full name" />
                                        @error('user_name') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Email Address</label>
                                        <input type="email" name="user_email" value="{{ old('user_email', auth()->user()->email ?? '') }}" required
                                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('user_email') border-red-500 @enderror"
                                               placeholder="email@example.com" />
                                        @error('user_email') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Phone Number</label>
                                        <input type="tel" name="phone" value="{{ old('phone') }}" required
                                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('phone') border-red-500 @enderror"
                                               placeholder="+91 98450 12345" />
                                        @error('phone') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <!-- Event Details Row -->
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Event Type</label>
                                        <select name="event_type"
                                                class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent">
                                            <option value="Wedding" {{ old('event_type', 'Wedding') == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                                            <option value="Upanayanam" {{ old('event_type', 'Wedding') == 'Upanayanam' ? 'selected' : '' }}>Upanayanam</option>
                                            <option value="Religious Function" {{ old('event_type', 'Wedding') == 'Religious Function' ? 'selected' : '' }}>Religious Function</option>
                                            <option value="Housewarming" {{ old('event_type', 'Wedding') == 'Housewarming' ? 'selected' : '' }}>Housewarming</option>
                                            <option value="Family Celebrations" {{ old('event_type', 'Wedding') == 'Family Celebrations' ? 'selected' : '' }}>Family Celebrations</option>
                                            <option value="Corporate Event" {{ old('event_type', 'Wedding') == 'Corporate Event' ? 'selected' : '' }}>Corporate Event</option>
                                            <option value="Other" {{ old('event_type', 'Wedding') == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Event Date</label>
                        <input type="date" name="event_date" value="{{ old('event_date') }}" required
                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('event_date') border-red-500 @enderror" />
                        @error('event_date') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Guest Count</label>
                        <input type="number" name="guest_count" value="{{ old('guest_count', 200) }}" min="20" max="10000" required
                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('guest_count') border-red-500 @enderror" />
                        @error('guest_count') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Location</label>
                        <input type="text" name="event_location" value="{{ old('event_location', 'Bengaluru, Karnataka') }}"
                               class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent"
                               placeholder="Event venue address" />
                    </div>
                </div>

                <!-- Meal Types -->
                <div>
                    <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-2">Meal Types Required</label>
                    <div class="flex flex-wrap gap-3">
                        @php $mealOptions = ['Tiffin / Breakfast', 'Lunch', 'High Tea / Snacks', 'Dinner']; @endphp
                        @foreach($mealOptions as $meal)
                            <label class="inline-flex items-center space-x-2 px-3 py-2 bg-white border border-[#d8c3a5] rounded-md text-xs font-medium cursor-pointer hover:bg-[#f7f2e8] transition has-[:checked]:bg-[#721c1c] has-[:checked]:text-white has-[:checked]:border-[#721c1c]">
                                <input type="checkbox" name="meal_types[]" value="{{ $meal }}" class="sr-only"
                                    {{ in_array($meal, old('meal_types', ['Lunch'])) ? 'checked' : '' }}>
                                <span>{{ $meal }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('meal_types') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Special Instructions -->
                <div>
                    <label class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Special Instructions</label>
                    <textarea name="special_instructions" rows="3"
                              class="w-full px-3 py-2.5 border border-[#d8c3a5] rounded-md bg-white text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent"
                              placeholder="Dietary preferences, traditional requirements, banana leaf serving preference...">{{ old('special_instructions') }}</textarea>
                </div>
            </div>

            <!-- Submit Footer -->
            <div class="bg-[#f4ece1] px-6 sm:px-8 py-5 border-t border-[#e2d4bf] flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <p class="text-xs text-[#5c4a3e] font-medium">
                        <svg class="w-4 h-4 inline text-[#4a6123] -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        Your details are safe. No spam. Guaranteed response within 2 hours.
                    </p>
                </div>
                <button type="submit"
                        class="bg-[#800000] hover:bg-[#600000] text-white px-8 py-3 rounded font-bold text-xs uppercase tracking-widest transition shadow-lg border border-[#a13d2d] flex items-center space-x-2">
                    <span>Submit Enquiry</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</section>
