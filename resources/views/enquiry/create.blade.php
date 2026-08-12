@extends('layouts.app')

@section('title', 'Get a Quote - SATHYAS CATERING')

@section('content')
<div class="py-12 bg-[#f7f2e8] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="text-xs text-gray-500 hover:text-[#721c1c] transition">← Back to Home</a>
        </div>
        @include('components.quote-form')
    </div>
</div>
@endsection
