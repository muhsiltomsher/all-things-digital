@extends('layouts.app')

@section('title', 'Contact Us | All Things Digital')

@section('content')

{{-- Hero Section --}}
<x-hero 
    title="Let’s Connect and Build Something Great" 
    subtitle="Have a project in mind, need a quote, or just want to say hello? We’d love to hear from you." 
/>

{{-- Contact Section with Decorative Bottom SVG --}}
<section class="relative py-24 bg-gradient-to-b from-[#f8f9fc] via-[#eaf3fe] to-[#e5e9f7] overflow-hidden">
    {{-- Decorative custom SVG at the bottom --}}
    <div class="absolute left-0 right-0 bottom-0 w-full pointer-events-none z-0">
        <img src="{{ asset('images/shape-grid-bottom-1.svg') }}" alt="Decorative Grid Bottom Shape" class="w-full object-cover" style="min-height:120px;">
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
        <div class="relative grid md:grid-cols-2 gap-16 items-start z-10">

            {{-- Info Box --}}
            <div class="space-y-8 bg-white/90 rounded-3xl p-10 shadow-xl border border-[#e5e9f7]">
                <h2 class="text-3xl font-bold text-[#1e293b] leading-snug">
                    Let’s Talk Business
                </h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    Whether you're looking to transform your digital presence or have questions about our services, we're here to help. Fill out the form or reach out directly — we typically respond within 1 business day.
                </p>
                <div class="space-y-5 text-gray-700 text-sm font-medium">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center bg-[#1c2d9a] rounded-full w-9 h-9 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M16 12a4 4 0 01-8 0 4 4 0 018 0z" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 14v7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span>
                            <strong>Email:</strong> hello@allthingsdigital.ae
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center bg-[#1c2d9a] rounded-full w-9 h-9 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92V21a1 1 0 01-1.1 1A19.86 19.86 0 013 5.14 1 1 0 014 4h4.09a1 1 0 011 .75 12.1 12.1 0 00.7 2.81 1 1 0 01-.23 1L8.21 10.79a16.53 16.53 0 007 7l1.23-1.23a1 1 0 011-.22 12.1 12.1 0 002.81.69 1 1 0 01.75 1z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span>
                            <strong>Phone:</strong> +971 50 123 4567
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center justify-center bg-[#1c2d9a] rounded-full w-9 h-9 text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M12 2a7 7 0 017 7c0 4.418-7 13-7 13S5 13.418 5 9a7 7 0 017-7z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span>
                            <strong>Address:</strong> Burjuman, Dubai, UAE
                        </span>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <form class="space-y-7 bg-white/90 p-10 rounded-3xl shadow-xl border border-[#e5e9f7]" method="POST" action="#">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#1c2d9a] transition"
                        placeholder="Your full name" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#1c2d9a] transition"
                        placeholder="you@example.com" />
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#1c2d9a] transition"
                        placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit"
                    class="w-full flex items-center justify-center gap-3 bg-[#1c2d9a] text-white font-semibold px-6 py-4 rounded-xl shadow-lg hover:bg-[#233e70] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Send Message
                </button>
            </form>
        </div>
    </x-container>
</section>
@endsection
