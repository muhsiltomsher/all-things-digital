<section
    id="cta-section"
    class="py-0 bg-transparent w-full"
>
    <x-container>
        <div
            class="relative w-full mx-auto flex flex-col items-center justify-center min-h-[320px] my-14  overflow-hidden"
            style="background: linear-gradient(90deg, #001C3D 0%, #13458E 100%);"
        >
            {{-- Background Image & Overlay --}}
            <img
                src="/images/cta-bg.jpg"
                alt="CTA Background"
                class="absolute inset-0 w-full h-full object-cover object-center opacity-60 z-0"
                loading="lazy"
            />
            <div class="absolute inset-0 bg-black/70 z-0"></div>

            <div class="relative z-10 flex flex-col justify-center items-center w-full px-4 sm:px-8 py-14">
                <h2 class="text-white font-bold text-2xl md:text-3xl mb-3 text-center" >
                    <span class="whitespace-nowrap">Let’s Connect</span>
                    <span class="text-[#31A9F8] font-bold"> and Build the Future Together!</span>
                </h2>
                <p class="text-white text-center max-w-xl mx-auto mb-6 text-base font-normal">
                    Stay informed with expert articles, trend analysis, and real-world case studies from the frontlines of IT innovation and the crypto revolution.
                </p>
                <x-button-arrow
                    href="{{ url('/contact') }}"
                    text="Contact Us Now"
                    class="mt-2 px-7 py-2 bg-white border-0 shadow font-semibold text-base text-black group-hover:text-white group-hover:bg-primary"
                />
            </div>
        </div>
    </x-container>
</section>
