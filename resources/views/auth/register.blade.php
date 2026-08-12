@extends('layouts.app')

@section('title', 'Register - SATHYAS CATERING')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-[#f7f2e8]">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-md border border-[#e5d8c3]">
        <div class="text-center">
            <div class="flex items-center justify-center space-x-3 mb-2">
                <div class="h-px bg-[#d4af37] w-12"></div>
                <span class="text-[#b8860b]">❖</span>
                <div class="h-px bg-[#d4af37] w-12"></div>
            </div>
            <h2 class="text-3xl font-serif font-bold text-[#721c1c]">Create Account</h2>
            <p class="mt-2 text-sm text-gray-600">Register to receive quotes and manage your catering events</p>
        </div>

        <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
            @csrf

            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Full Name</label>
                    <input id="name" name="name" type="text" required value="{{ old('name') }}"
                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('name') border-red-500 @enderror"
                        placeholder="Your full name" />
                    @error('name') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Email Address</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}"
                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('email') border-red-500 @enderror"
                        placeholder="your@email.com" />
                    @error('email') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Password</label>
                    <input id="password" name="password" type="password" required
                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent @error('password') border-red-500 @enderror"
                        placeholder="Min. 8 characters" />
                    @error('password') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-xs font-bold text-[#721c1c] uppercase tracking-wider mb-1.5">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="w-full px-3 py-2.5 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#721c1c] focus:border-transparent"
                        placeholder="Repeat password" />
                </div>
            </div>

            <div>
                <button type="submit" class="w-full py-3 px-4 bg-[#4a6123] hover:bg-[#3a4d1b] text-white font-bold text-xs uppercase tracking-widest rounded-md shadow transition">
                    Create Account
                </button>
            </div>

            <div class="text-center">
                <p class="text-xs text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-[#721c1c] font-semibold hover:underline">Sign in</a></p>
            </div>
        </form>

        <div class="text-center">
            <a href="{{ route('home') }}" class="text-xs text-gray-500 hover:text-[#721c1c] transition">← Back to Home</a>
        </div>
    </div>
</div>
@endsection
