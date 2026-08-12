@extends('layouts.app')

@section('title', 'Catering Services - SATHYAS CATERING')

@section('content')
    <div class="pt-8"></div>
    @include('components.services', ['hideNavButton' => true])
    @include('components.cta-banner')
    @include('components.contact-footer')
@endsection
