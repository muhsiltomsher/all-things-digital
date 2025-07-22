<section class="relative overflow-hidden bg-gradient-to-r from-[#2256ac] to-[#1e293b] py-14 md:py-20">
  <!-- Full Background Image Layer -->
  <div id="cta-overlay-bg"
       class="absolute inset-0 w-full h-full z-0 pointer-events-none opacity-20 animate-pulse-slow">
    <img src="/images/cta.jpg"
         alt="Background Image"
         class="w-full h-full object-cover" />
  </div>

  <!-- CTA Content -->
  <div class="relative z-10 max-w-2xl mx-auto px-4 text-center">
    <h2 class="text-white font-bold text-2xl md:text-3xl mb-4">
      Ready to Transform Your Business?
    </h2>
    <p class="text-white/80 mb-6 text-lg">
      Let’s create your digital future. Schedule a free strategy call with our experts.
    </p>
    <a href="{{ url('/contact') }}"
       class="inline-block px-8 py-3 rounded bg-white text-[#2256ac] font-semibold shadow hover:bg-[#f3f4fa] transition text-lg">
      Contact Our Team
    </a>
  </div>
</section>

<style>
/* Pulse Animation */
@keyframes pulse-slow {
  0%, 100% {
    transform: scale(1);
    opacity: 0.2;
  }
  50% {
    transform: scale(1.05);
    opacity: 0.3;
  }
}
.animate-pulse-slow {
  animation: pulse-slow 5s ease-in-out infinite;
}
</style>

<script type="module">


document.addEventListener('DOMContentLoaded', () => {
  const overlay = document.getElementById('cta-overlay-bg');

  if (overlay) {
    // Subtle float motion for background image
    gsap.to(overlay, {
      y: -20,
      duration: 8,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut"
    });
  }
});
</script>
