@extends('layouts.app')

@section('title', 'About Us - SATHYAS CATERING')

@section('content')
    <div class="pt-8"></div>
    @include('components.about-story')
    @include('components.feature-bar')
    @include('components.cta-banner')
    @include('components.contact-footer')
@endsection
