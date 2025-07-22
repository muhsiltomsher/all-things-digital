<section class="py-20 bg-white" id="about-section">
    <x-container>
        <div class="flex flex-col md:flex-row md:items-start md:space-x-16">
            {{-- Left: Tagline --}}
            <div class="md:w-1/2 mb-10 md:mb-0 flex-shrink-0" id="about-title">
                <h2 class="text-2xl md:text-3xl xl:text-4xl font-bold text-gray-900 leading-snug mb-4" >
                    Your partner in IT innovation &<br>
                    Crypto transformation.
                </h2>
            </div>

            {{-- Right: Description & Button --}}
            <div class="md:w-1/2 flex flex-col space-y-5 justify-center" id="about-text">
                <p class="antialiased  text-base font-normal md:text-lg text-gray-700 leading-relaxed">
                    All Things Digital is a forward-thinking IT company committed to transforming the way businesses operate in today's fast-paced digital world...
                </p>
                <p class="antialiased  text-base font-normal md:text-lg text-gray-700 leading-relaxed">
                    Our team brings together tech enthusiasts, creative strategists, and industry experts...
                </p>
                <div id="about-button">
                    <x-button-arrow href="{{ url('/about') }}" text="Learn More About Us" />
                </div>
            </div>
        </div>

        {{-- STATISTICS BLOCKS --}}
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mt-20" id="about-stats">
    <div class="text-left">
        <div id="counter-1" class="text-6xl font-normal text-gray-900 mb-2 counter" data-count="99" data-suffix="%">0%</div>
        <div class="text-gray-500 font-normal text-base">of clients feel secure using our<br>digital solutions</div>
    </div>
    <div class="text-left">
        <div id="counter-2" class="text-6xl font-normal text-gray-900 mb-2 counter" data-count="98" data-suffix="%">0%</div>
        <div class="text-gray-500 font-normal text-base">customer satisfaction across IT<br>and crypto services</div>
    </div>
    <div class="text-left">
        <div id="counter-3" class="text-6xl font-normal text-gray-900 mb-2 counter" data-count="100" data-suffix="+">0+</div>
        <div class="text-gray-500 font-normal text-base">projects delivered across<br>various tech industries</div>
    </div>
    <div class="text-left">
        <div id="counter-4" class="text-6xl font-normal text-gray-900 mb-2 counter" data-count="24" data-suffix="/7">0</div>
        <div class="text-gray-500 font-normal text-base">support available to keep your<br>systems running smoothly</div>
    </div>
</div>

    </x-container>
</section>
