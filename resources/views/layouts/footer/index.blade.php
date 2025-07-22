{{-- resources/views/components/layouts/footer/index.blade.php --}}
<footer class="bg-[#003380] text-white pt-12 pb-6">
    <x-container>
        <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-12">
            {{-- Left: Logo and Social --}}
            <div class="flex flex-col gap-6 md:w-1/3">
                <div class="flex items-center gap-3">
                    <img src="/images/logo.svg" alt="All Things Digital Logo" class="h-10 w-auto" />
                    <!-- <span class="font-bold text-xl tracking-wide">ALL THINGS<br>DIGITAL</span> -->
                </div>


<div class="flex items-center gap-5 mt-5">
    <a href="#" aria-label="Facebook">
        <img src="/images/icons/facebook.svg" alt="Facebook" class="w-5 h-5 social-icon"/>
    </a>
    <a href="#" aria-label="X">
        <img src="/images/icons/x.svg" alt="X" class="w-5 h-5 social-icon"/>
    </a>
    <a href="#" aria-label="LinkedIn">
        <img src="/images/icons/linkedin.svg" alt="LinkedIn" class="w-5 h-5 social-icon"/>
    </a>
    <a href="#" aria-label="Instagram">
        <img src="/images/icons/instagram.svg" alt="Instagram" class="w-5 h-5 social-icon"/>
    </a>
</div>

            </div>
            {{-- Center: Quick Links --}}
            <div class="md:w-1/3">
                <h4 class="mb-1 font-normal text-gray-100">Quick Links</h4>
                <ul class="space-y-1 text-gray-200 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact Us</a></li>
                </ul>
            </div>
            {{-- Right: Contact Info --}}
            <div class="md:w-1/3">
                <h4 class="mb-1 font-normal text-gray-100">Contact Us</h4>
                <p class="text-gray-200 text-sm mb-2 break-all">contact@allthingsdigital.demo</p>
                <h4 class="mt-4 mb-1 font-normal text-gray-100">Location</h4>
                <p class="text-gray-200 text-sm">
                    Unit 14B, TechTower Building, Innovation Street,<br>
                    Dubai, UAE
                </p>
            </div>
        </div>
        <hr class="my-6 border-white/30">
        <div class="flex flex-col md:flex-row md:justify-between items-center text-xs text-gray-100">
            <div>
                &copy; {{ date('Y') }} All Things Digital. All rights reserved
            </div>
            <div class="mt-2 md:mt-0">
                Designed by Tomsher
            </div>
        </div>
       </x-container>
</footer>
