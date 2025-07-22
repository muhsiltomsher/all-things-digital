<section class="bg-white py-16 md:py-24">
  <div class="max-w-5xl mx-auto px-4">
    <!-- Our Mission -->
    <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
      <!-- Left: Content -->
      <div class="fade-left">
        <h2 id="about-title" class="font-bold text-2xl md:text-3xl text-[#2256ac] mb-4">
          Our Mission
        </h2>
        <p id="about-text" class="text-gray-700 font-normal leading-relaxed text-lg mb-3">
          To empower businesses, big and small, with world-class digital solutions—harnessing innovation, smart technology, and a security-first mindset.
        </p>
        <p class="text-gray-500 font-normal">
          Founded in Dubai, All Things Digital brings the latest in IT, blockchain, and emerging technologies to forward-thinking clients across sectors.
        </p>
      </div>
      <!-- Right: Image -->
      <div class="fade-right">
        <img src="{{ asset('images/mission.jpg') }}"
             alt="Our Team Digital"
             class="rounded-lg shadow-lg w-full object-cover h-56 md:h-full"
             loading="lazy">
      </div>
    </div>

    <!-- Our Vision -->
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <!-- Left: Image -->
      <div class="fade-left">
        <img src="{{ asset('images/vision.jpg') }}"
             alt="Our Vision"
             class="rounded-lg shadow-lg w-full object-cover h-56 md:h-full"
             loading="lazy">
      </div>
      <!-- Right: Content -->
      <div class="fade-right">
        <h2 class="font-bold text-2xl md:text-3xl text-[#2256ac] mb-4">
          Our Vision
        </h2>
        <p class="text-gray-700 font-normal leading-relaxed text-lg mb-3">
          To be the leading digital partner globally, enabling businesses to thrive through cutting-edge solutions that prioritize performance, scalability, and long-term success.
        </p>
        <p class="text-gray-500 font-normal">
          We envision a future where technology is not just a tool, but a true accelerator of value, progress, and innovation—accessible to all.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- GSAP Scroll Animation -->
<script type="module">


document.addEventListener('DOMContentLoaded', () => {
  gsap.utils.toArray('.fade-left').forEach((el) => {
    gsap.from(el, {
      x: -50,
      opacity: 0,
      duration: 1.2,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: el,
        start: 'top 85%',
        toggleActions: 'play none none none'
      }
    });
  });

  gsap.utils.toArray('.fade-right').forEach((el) => {
    gsap.from(el, {
      x: 50,
      opacity: 0,
      duration: 1.2,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: el,
        start: 'top 85%',
        toggleActions: 'play none none none'
      }
    });
  });
});
</script>
