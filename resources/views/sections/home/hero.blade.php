<section class="relative w-full min-h-screen -mt-[100px] overflow-hidden bg-black">

    {{-- HERO SWIPER --}}
    <div id="hero-swiper" class="swiper min-h-screen">
        <div class="swiper-wrapper">

            {{-- Slide 1: Video --}}
            <div class="swiper-slide relative min-h-screen">
                <video
                    autoplay muted loop playsinline preload="auto"
                    poster="/images/video-1-cover.jpg"
                    class="absolute inset-0 w-full h-full object-cover opacity-90"
                ><source src="/images/videos/vid-1.mp4" type="video/mp4" /></video>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/90"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full flex">
                    <div class="max-w-2xl w-full pb-8 sm:pb-14 px-3 sm:px-6 lg:pl-16" id="hero-slide-content-1">
                        <h1 class="gsap-animate split-text text-2xl sm:text-3xl md:text-5xl font-bold mb-6 sm:mb-8 text-white leading-tight">
                            Where innovation meets technology,<br>
                            expertly built <span class="text-primary">digital solution</span> for a smarter tomorrow.
                        </h1>
                        <div class="gsap-animate flex flex-wrap gap-3 sm:gap-4 items-center">
                            <x-button-arrow 
                                href="{{ url('/contact') }}" 
                                text="Get Started" 
                                class="text-base sm:text-lg border-white bg-white text-gray-900 font-semibold rounded-none transition hover:bg-primary hover:text-white hover:border-primary"
                            />
                            <x-button-arrow 
                                href="#services" 
                                text="Explore Services" 
                                variant="dark"
                                class="text-base sm:text-lg border-white bg-transparent text-white font-semibold rounded-none transition hover:bg-white hover:text-gray-900 hover:border-white"
                            />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 2: Video --}}
            <div class="swiper-slide relative min-h-screen">
                <video
                    autoplay muted loop playsinline preload="auto"
                    poster="/images/video-2-cover.jpg"
                    class="absolute inset-0 w-full h-full object-cover opacity-90"
                ><source src="/images/videos/vid-2.mp4" type="video/mp4" /></video>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/90"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full flex">
                    <div class="max-w-2xl w-full pb-8 sm:pb-14 px-3 sm:px-6 lg:pl-16" id="hero-slide-content-2">
                        <h1 class="gsap-animate split-text text-2xl sm:text-3xl md:text-5xl font-bold mb-6 sm:mb-8 text-white leading-tight">
                            Blockchain for real business,<br>
                            <span class="text-primary">Secure & scalable</span> solutions tailored for you.
                        </h1>
                        <div class="gsap-animate flex flex-wrap gap-3 sm:gap-4 items-center">
                            <x-button-arrow 
                                href="{{ url('/services') }}" 
                                text="Explore Blockchain"
                                class="text-base sm:text-lg border-white bg-white text-gray-900 font-semibold rounded-none transition hover:bg-primary hover:text-white hover:border-primary"
                            />
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slide 3: Static Image --}}
            <div class="swiper-slide relative min-h-screen">
                <img src="/images/chart-bg-slide-3.jpg" class="absolute inset-0 w-full h-full object-cover opacity-90" alt="" />
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/90"></div>
                <div class="absolute bottom-0 left-0 z-10 w-full flex">
                    <div class="max-w-2xl w-full pb-8 sm:pb-14 px-3 sm:px-6 lg:pl-16" id="hero-slide-content-3">
                        <h1 class="gsap-animate split-text text-2xl sm:text-3xl md:text-5xl font-bold mb-6 sm:mb-8 text-white leading-tight">
                            Actionable analytics for<br>
                            <span class="text-primary">business growth</span>.
                        </h1>
                        <div class="gsap-animate flex flex-wrap gap-3 sm:gap-4 items-center">
                            <x-button-arrow 
                                href="{{ url('/contact') }}" 
                                text="Contact Sales"
                                class="text-base sm:text-lg border-white bg-white text-gray-900 font-semibold rounded-none transition hover:bg-primary hover:text-white hover:border-primary"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navigation Arrows: white with border, no radius (accessible) --}}
        <div class="absolute hidden  bottom-9 sm:bottom-16 right-9 sm:right-24 md:flex gap-2 z-20">
            <button id="hero-swiper-prev"
                class="swiper-button-prev absolute !-left-[120px] !w-[50px] !h-[50px] bg-transparent border border-white text-white flex items-center justify-center hover:bg-primary hover:text-black hover:border-white transition"
                type="button"
                aria-label="Previous slide">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="hero-swiper-next"
                class="swiper-button-next !w-[50px] !h-[50px] bg-transparent border border-white text-white flex items-center justify-center hover:bg-primary hover:text-black hover:border-white transition"
                type="button"
                aria-label="Next slide">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        {{-- Swiper Progressbar --}}
        <div class="absolute bottom-0 left-0 w-full h-1.5 z-20">
            <div class="swiper-progressbar bg-white/20 w-full h-full">
                <div id="hero-swiper-progress" class="bg-primary transition-all h-full w-0"></div>
            </div>
        </div>
    </div>
</section>
