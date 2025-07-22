@extends('layouts.app')

@section('content')
    {{-- Hero section with sticky header --}}
    @include('sections.home.hero')

    {{-- About section --}}
    @include('sections.home.about')

@include('sections.home.industry-leaders')

 @include('sections.home.services') 

 @include('sections.home.why-choose')

@include('sections.home.cta')

@endsection
