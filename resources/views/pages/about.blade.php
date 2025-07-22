@extends('layouts.app')

@section('title', 'About Us | All Things Digital')

@section('content')

    {{-- Hero Section --}}
    <x-hero
        title="About All Things Digital"
        subtitle="We’re not just another IT company—we’re your long-term digital partner, driven to accelerate your success in today’s rapidly-evolving tech world."
        
    />

    {{-- About Description Section --}}
    @include('sections.about.about-dec')

    {{-- Mission & Story Section --}}
    @include('sections.about.mission-story')

    {{-- Call to Action Section --}}
    @include('sections.about.cta')

@endsection
