<!-- Alumni Stories Section -->
<section id="alumni" class="bg-slate-900 py-24">
  <div class="mx-auto max-w-7xl px-6 lg:px-10">
    <div class="text-center text-white">
      <p class="text-xs font-semibold uppercase tracking-[0.4em] text-secondary">
        Testimoni & Jaringan
      </p>
      <h2 class="mt-3 text-3xl font-semibold md:text-4xl">
        Suara Alumni & Jejaring Profesional Lintas Industri
      </h2>
      <p class="mt-4 text-sm text-white/70 md:text-base">
        Berbagi inspirasi, kolaborasi, dan dampak positif dari alumni SMK/SMA/MA di berbagai bidang.
      </p>
    </div>
    <div class="mt-12 relative" x-data="{ currentSlide: 0, slides: [
        {
          name: 'Rizky Pratama',
          role: 'IT Solution Architect · Angkatan 2010',
          image: 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=160&q=80',
          testimonial: 'Portal ini memudahkan saya memberi mentoring kepada siswa jurusan RPL. Kini saya bisa menjadwalkan sesi daring dan berbagi modul pembelajaran terkini dengan mudah.'
        },
        {
          name: 'Salsabila Ardhani',
          role: 'Founder Kreatif · Angkatan 2014',
          image: 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=160&q=80',
          testimonial: 'Komunitas alumni membantu saya mendapatkan kolaborasi dengan BUMN untuk program CSR. Hubungannya kini lebih mudah karena semua kontak terstruktur.'
        },
        {
          name: 'Aditya Wirawan',
          role: 'Kepala Divisi HR · Angkatan 2008',
          image: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=160&q=80',
          testimonial: 'Tracer study dan data digital membuat proses rekrutmen alumni jauh lebih cepat. Kami bisa langsung menghubungi lulusan sesuai kebutuhan industri.'
        },
        {
          name: 'Maya Putri',
          role: 'Senior UX Designer · Angkatan 2012',
          image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=160&q=80',
          testimonial: 'Melalui portal alumni, saya mendapatkan proyek desain UI/UX dari startup yang didirikan teman seangkatan. Kolaborasi ini sangat berharga.'
        },
        {
          name: 'Budi Santoso',
          role: 'Project Manager · Angkatan 2009',
          image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=160&q=80',
          testimonial: 'Data tracer study yang tersedia membantu perusahaan saya merekrut talenta terbaik dari almamater dengan proses yang sangat efisien.'
        }
      ], autoPlay: true }" x-init="setInterval(() => { if (autoPlay) { currentSlide = (currentSlide + 1) % slides.length; } }, 4000)">
      <!-- Slider Container -->
      <div class="relative overflow-hidden lg:px-12">
        <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${currentSlide * 100}%)`">
          <template x-for="(slide, index) in slides" :key="index">
            <div class="w-full flex-shrink-0 px-4">
              <article class="rounded-3xl bg-white/10 p-8 backdrop-blur">
                <div class="flex items-center gap-4">
                  <img
                    :src="slide.image"
                    :alt="`Foto ${slide.name}`"
                    class="h-16 w-16 rounded-full object-cover"
                    loading="lazy"
                  />
                  <div>
                    <h3 class="text-base font-semibold text-white" x-text="slide.name"></h3>
                    <p class="text-xs uppercase tracking-widest text-white/60" x-text="slide.role"></p>
                  </div>
                </div>
                <p class="mt-5 text-sm text-white/80" x-text="slide.testimonial"></p>
              </article>
            </div>
          </template>
        </div>
      </div>

      <!-- Navigation Dots -->
      <div class="mt-8 flex justify-center gap-2">
        <template x-for="(slide, index) in slides" :key="index">
          <button 
            @click="currentSlide = index; autoPlay = false"
            :class="currentSlide === index ? 'bg-secondary w-8' : 'bg-white/30 w-2'"
            class="h-2 rounded-full transition-all duration-300"
          ></button>
        </template>
      </div>

      <!-- Arrow Navigation -->
      <button 
        @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length; autoPlay = false"
        class="absolute left-0 top-1/2 -translate-y-1/2 hidden rounded-full bg-white/10 p-3 text-white/80 hover:bg-white/20 hover:text-white lg:block"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
      </button>
      <button 
        @click="currentSlide = (currentSlide + 1) % slides.length; autoPlay = false"
        class="absolute right-0 top-1/2 -translate-y-1/2 hidden rounded-full bg-white/10 p-3 text-white/80 hover:bg-white/20 hover:text-white lg:block"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </button>
    </div>
  </div>
</section>
