@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

{{-- Hero Section --}}
<section class="relative -mt-[100px] h-[60vh] flex items-center justify-center bg-gradient-to-b from-[#131e66] via-[#1c2d9a] to-[#01132f]">

    <!-- Top Decorative Shape (Optional for Hero) -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-[1200px] pointer-events-none z-0 opacity-70">
        <img src="{{ asset('images/shape-top.svg') }}" alt="Top Decorative Shape" class="w-full" />
    </div>

    <!-- Bottom Glow Decorative Layer -->
    <div id="bottom-glow-wrapper"
        class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full max-w-[900px] pointer-events-none z-0 opacity-0 scale-90 translate-y-8">
        <img src="{{ asset('images/bg-about.svg') }}" alt="Decorative Glow" class="w-full" />
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-3xl w-full mx-auto text-center px-4">
        <h1 class="text-white font-normal text-3xl md:text-5xl leading-tight mb-5">Our Services</h1>
        <p class="text-white/80 text-lg md:text-xl font-normal mb-6">
            Delivering cutting-edge digital solutions to shape your tomorrow.
        </p>
    </div>
</section>

{{-- Services Listing Section --}}
<section class="relative py-24 bg-gradient-to-b from-[#f8f9fc] via-[#eaf3fe] to-[#e5e9f7] overflow-hidden">
    {{-- Decorative custom SVG at the bottom --}}
    <div class="absolute left-0 right-0 top-0 w-full pointer-events-none z-0">
        <img src="{{ asset('images/shape-top.svg') }}" alt="Decorative Grid Bottom Shape" class="w-full object-cover" style="min-height:120px;">
    </div>

    {{-- Optional top SVG/radial gradients for flair --}}
    <svg class="absolute top-0 left-0 w-56 h-56 -translate-x-1/2 -translate-y-1/2 opacity-10 pointer-events-none" viewBox="0 0 200 200">
        <defs>
            <radialGradient id="radGrad1" cx="50%" cy="50%" r="50%">
                <stop stop-color="#1c2d9a" stop-opacity="0.22" offset="0%" />
                <stop stop-color="#f8f9fc" stop-opacity="0" offset="100%" />
            </radialGradient>
        </defs>
        <circle cx="100" cy="100" r="100" fill="url(#radGrad1)" />
    </svg>

    <x-container>
        @php
            $servicesList = [
                [
                    'title' => 'IT Infrastructure',
                    'bg' => '#E8F1FF',
                    'img' => 'it.png',
                    'description' => 'Robust, scalable, and secure infrastructure services tailored to your enterprise.'
                ],
                [
                    'title' => 'Blockchain Integration',
                    'bg' => '#E8F7FF',
                    'img' => 'blockchain.png',
                    'description' => 'Smart contract development and seamless blockchain ecosystem integration.'
                ],
                [
                    'title' => 'Crypto Consultation',
                    'bg' => '#D9F2FF',
                    'img' => 'crypto.png',
                    'description' => 'Expert guidance for token launches, compliance, and blockchain adoption.'
                ],
                [
                    'title' => 'Digital Transformation',
                    'bg' => '#E2F3FB',
                    'img' => 'digital.png',
                    'description' => 'Modernize operations with AI, automation, and cloud-based strategies.'
                ],
                [
                    'title' => 'Cybersecurity Solutions',
                    'bg' => '#EAF8FF',
                    'img' => 'cyber.png',
                    'description' => 'Advanced security audits, threat detection, and compliance solutions.'
                ],
                [
                    'title' => 'Cloud Services',
                    'bg' => '#E8F8FB',
                    'img' => 'cloud.png',
                    'description' => 'Cloud infrastructure, migration, and optimization for scalable growth.'
                ],
            ];
        @endphp

        <div class="grid sm:grid-cols-2 gap-12 mt-[50px]">
            @foreach($servicesList as $card)
                <a 
                    href="{{ route('services.show', \Str::slug($card['title'])) }}"
                    class="group relative shadow-lg p-8 flex justify-between items-center overflow-hidden "
                    style="background-color: {{ $card['bg'] }}; min-height: 300px;"
                >
                    {{-- Text Content --}}
                    <div class="max-w-[60%]">
                        <h3 class="text-3xl font-medium tracking-tight text-gray-900 group-hover:text-[#2256ac] transition-colors">
                            {{ $card['title'] }}
                        </h3>
                        <p class="text-gray-700 mt-3 text-sm leading-relaxed">
                            {{ $card['description'] }}
                        </p>
                    </div>

                    {{-- Service Image --}}
                    <div class="flex-shrink-0">
                        <img 
                            src="{{ asset('images/services/' . $card['img']) }}" 
                            alt="{{ $card['title'] }}"
                            class="w-28 h-28 object-contain transition-transform group-hover:rotate-6 group-hover:scale-110" 
                        />
                    </div>

                    {{-- CTA Arrow --}}
                    <span
                        class="absolute bottom-6 right-6 w-9 h-9 flex items-center justify-center bg-white text-[#2256ac] shadow-sm group-hover:bg-[#2256ac] group-hover:text-white transition "
                        aria-hidden="true"
                    >
                        <svg 
                            width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            class="transition group-hover:text-white" viewBox="0 0 24 24"
                        >
                            <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            @endforeach
        </div>
    </x-container>
</section>

@endsection

@push('scripts')
<script type="module">
    document.addEventListener('DOMContentLoaded', () => {
        const glowWrapper = document.getElementById('bottom-glow-wrapper');

        if (glowWrapper) {
            // Animate glow in
            gsap.to(glowWrapper, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1.5,
                ease: 'power3.out',
                delay: 0.2
            });

            // Parallax scroll effect
            gsap.to(glowWrapper, {
                y: -80,
                ease: 'none',
                scrollTrigger: {
                    trigger: glowWrapper,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            });
        }
    });
</script>
@endpush
