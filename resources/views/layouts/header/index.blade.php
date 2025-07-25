<header
  id="main-header"
  class="sticky top-0 left-0 w-full z-30 bg-transparent will-change-transform transition-all"
  x-data="{ mobileOpen: false }"
>
  <x-container>
    <div class="header-inner flex items-center justify-between py-4 md:py-6">
      {{-- Logo (Left) --}}
      <a href="{{ url('/') }}" class="flex items-center">
        <img src="{{ asset('images/logo.svg') }}" alt="All Things Digital logo" class="h-10 w-auto">
        <span class="sr-only">All Things Digital</span>
      </a>

      {{-- Right side: Nav + CTA --}}
      <div class="hidden md:flex items-center ml-auto space-x-8">
        {{-- Desktop Nav --}}
        <nav class="flex items-center space-x-8">
          <a href="{{ url('/') }}" class="text-white hover:text-primary transition font-normal">Home</a>
          <a href="{{ url('/about') }}" class="text-white hover:text-primary transition font-normal">About Us</a>
          <a href="{{ url('/services') }}" class="text-white hover:text-primary transition font-normal">Services</a>
          <a href="{{ url('/contact') }}" class="text-white hover:text-primary transition font-normal">Contact Us</a>
        </nav>

        {{-- Desktop CTA --}}
        <x-button-arrow href="{{ url('/contact') }}" text="Contact Sales" />
      </div>

      {{-- Hamburger Icon (Mobile) --}}
      <button
        @click="mobileOpen = !mobileOpen"
        class="md:hidden inline-flex items-center justify-center p-2 rounded text-white hover:text-primary focus:outline-none transition"
        aria-label="Toggle menu"
      >
        <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </x-container>

  {{-- Mobile Menu --}}
  <nav
    x-show="mobileOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="md:hidden bg-black/95 backdrop-blur text-white absolute top-full left-0 w-full shadow-lg z-30"
    @click.away="mobileOpen = false"
  >
    <div class="flex flex-col space-y-2 py-6 items-center font-normal">
      <a href="{{ url('/') }}" @click="mobileOpen=false" class="px-4 py-2 hover:text-primary transition">Home</a>
      <a href="{{ url('/about') }}" @click="mobileOpen=false" class="px-4 py-2 hover:text-primary transition">About Us</a>
      <a href="{{ url('/services') }}" @click="mobileOpen=false" class="px-4 py-2 hover:text-primary transition">Services</a>
      <a href="{{ url('/contact') }}" @click="mobileOpen=false" class="px-4 py-2 hover:text-primary transition">Contact Us</a>
      <div class="mt-4 w-full flex justify-center">
        <x-button-arrow href="{{ url('/contact') }}" text="Contact Sales" class="w-auto" />
      </div>
    </div>
  </nav>
</header>
