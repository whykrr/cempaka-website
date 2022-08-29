@extends('main')
@section('content')
    @include('section.hero')
    <main id="main">
        {{-- @include('section.featured') --}}
        {{-- @include('section.about') --}}
        {{-- @include('section.whyus') --}}
        @include('section.service')
        @include('section.program')
        @include('section.client')
        @include('section.galeri')
        @include('section.news')
        @include('section.contact')
    </main><!-- End #main -->
@endsection
