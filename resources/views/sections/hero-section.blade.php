<!-- Hero Section -->
<section
  id="beranda"
  class="relative overflow-hidden bg-hero-pattern bg-cover bg-center text-white"
>
  <div class="absolute inset-0 bg-gradient-to-br from-primary/70 via-slate-900/80 to-slate-900"></div>
  <div class="relative mx-auto flex max-w-7xl flex-col gap-10 px-6 py-28 lg:flex-row lg:items-center lg:px-10">
    <div class="max-w-2xl">
      <span class="inline-flex items-center rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-white/80 backdrop-blur">
        Portal Alumni Terintegrasi
      </span>
      <h1 class="mt-6 text-4xl font-semibold leading-tight md:text-5xl">
        Jalin Silaturahmi, Raih Kolaborasi, Wujudkan Prestasi Alumni SMK/SMA/MA
      </h1>
      <p class="mt-6 text-base text-white/80 md:text-lg">
        Pusat informasi resmi bagi seluruh lulusan SMK/SMA/MA untuk berbagi peluang karier, update kegiatan, dan kontribusi nyata kepada sekolah.
      </p>
      <div class="mt-10 flex flex-col gap-4 sm:flex-row">
        <a
          href="#register"
          class="group relative inline-flex items-center justify-center rounded-full bg-gradient-to-r from-secondary to-accent px-8 py-4 text-sm font-bold text-slate-900 shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl hover:from-accent hover:to-secondary"
        >
          <span class="relative z-10 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            Masuk / Daftar Alumni
          </span>
          <div class="absolute inset-0 rounded-full bg-gradient-to-r from-accent to-secondary opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
        </a>
        <a
          href="#highlight"
          class="inline-flex items-center justify-center rounded-full border-2 border-white/60 px-6 py-3 text-sm font-semibold text-white backdrop-blur transition-all duration-300 hover:border-white hover:bg-white/10 hover:shadow-lg"
        >
          Lihat Agenda & Prestasi
        </a>
      </div>
    </div>
    <div class="relative w-full max-w-xl rounded-3xl bg-white/10 p-6 backdrop-blur md:p-8">
      <div class="grid grid-cols-2 gap-4 text-center text-sm">
        <div class="rounded-2xl border border-white/20 bg-white/5 p-5" x-data="{ 
          count: 0, 
          target: 12000, 
          counted: false,
          init() {
            setTimeout(() => {
              this.counted = true;
              this.animateCounter();
            }, 500);
          },
          animateCounter() {
            const duration = 2000;
            const start = 0;
            const increment = this.target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
              current += increment;
              if (current >= this.target) {
                current = this.target;
                clearInterval(timer);
              }
              this.count = Math.floor(current);
            }, 16);
          }
        }">
          <p class="text-3xl font-semibold" x-text="count > 1000 ? (count / 1000).toFixed(1) + 'K+' : count">0K+</p>
          <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Total Alumni Terdata</p>
        </div>
        <div class="rounded-2xl border border-white/20 bg-white/5 p-5" x-data="{ 
          count: 0, 
          target: 87, 
          counted: false,
          init() {
            setTimeout(() => {
              this.counted = true;
              this.animateCounter();
            }, 800);
          },
          animateCounter() {
            const duration = 2000;
            const start = 0;
            const increment = this.target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
              current += increment;
              if (current >= this.target) {
                current = this.target;
                clearInterval(timer);
              }
              this.count = Math.floor(current);
            }, 16);
          }
        }">
          <p class="text-3xl font-semibold" x-text="count + '%'">0%</p>
          <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Serapan Kerja & Wirausaha</p>
        </div>
        <div class="rounded-2xl border border-white/20 bg-white/5 p-5" x-data="{ 
          count: 0, 
          target: 120, 
          counted: false,
          init() {
            setTimeout(() => {
              this.counted = true;
              this.animateCounter();
            }, 1100);
          },
          animateCounter() {
            const duration = 2000;
            const start = 0;
            const increment = this.target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
              current += increment;
              if (current >= this.target) {
                current = this.target;
                clearInterval(timer);
              }
              this.count = Math.floor(current);
            }, 16);
          }
        }">
          <p class="text-3xl font-semibold" x-text="count + '+'">0+</p>
          <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Mitra Industri Aktif</p>
        </div>
        <div class="rounded-2xl border border-white/20 bg-white/5 p-5" x-data="{ 
          count: 0, 
          target: 45, 
          counted: false,
          init() {
            setTimeout(() => {
              this.counted = true;
              this.animateCounter();
            }, 1400);
          },
          animateCounter() {
            const duration = 2000;
            const start = 0;
            const increment = this.target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
              current += increment;
              if (current >= this.target) {
                current = this.target;
                clearInterval(timer);
              }
              this.count = Math.floor(current);
            }, 16);
          }
        }">
          <p class="text-3xl font-semibold" x-text="count">0</p>
          <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Program Pengabdian Alumni</p>
        </div>
      </div>
      
            <div class="mt-6 rounded-2xl bg-white/90 p-5 text-slate-700 shadow-lg" x-data="{ currentSlide: 0, slides: [
        {
          title: 'Alumni Gathering Nasional 2024',
          date: '14 Desember 2024',
          location: 'Aula Serbaguna SMK/SMA/MA',
          deadline: 'Registrasi hingga 5 Desember',
          link: '#agenda'
        },
        {
          title: 'Workshop Digital Talent: Cloud & AI Certification',
          date: '20 Januari 2025',
          location: 'Online via Zoom',
          deadline: 'Kuota terbatas, daftar sekarang!',
          link: '#agenda'
        },
        {
          title: 'Bakti Sosial Alumni ke Desa Binaan',
          date: '3 Maret 2025',
          location: 'Desa Ciptasari, Bogor',
          deadline: 'Pendaftaran dibuka 1 Februari',
          link: '#agenda'
        }
      ], autoPlay: true }" x-init="setInterval(() => { if (autoPlay) { currentSlide = (currentSlide + 1) % slides.length; } }, 3000)">
        <div class="flex items-center justify-between mb-3">
          <p class="text-xs font-medium uppercase tracking-[0.4em] text-primary">Update Terkini</p>
          <div class="flex gap-1">
            <template x-for="(slide, index) in slides" :key="index">
              <button 
                @click="currentSlide = index; autoPlay = false"
                :class="currentSlide === index ? 'bg-primary w-6' : 'bg-primary/30 w-2'"
                class="h-1 rounded-full transition-all duration-300"
              ></button>
            </template>
          </div>
        </div>
        
        <div class="relative overflow-hidden">
          <template x-for="(slide, index) in slides" :key="index">
            <div 
              x-show="currentSlide === index"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform translate-x-4"
              x-transition:enter-end="opacity-100 transform translate-x-0"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 transform translate-x-0"
              x-transition:leave-end="opacity-0 transform -translate-x-4"
              class="absolute inset-0"
            >
              <p class="text-sm font-semibold" x-text="slide.title"></p>
              <p class="mt-1 text-xs text-slate-500">
                <span x-text="slide.date"></span> · 
                <span x-text="slide.location"></span> · 
                <span x-text="slide.deadline"></span>
              </p>
              <a :href="slide.link" class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:text-primary/80">
                Lihat Detail Acara
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
              </a>
            </div>
          </template>
          
          <!-- Placeholder untuk maintain height -->
          <div class="invisible">
            <p class="text-sm font-semibold">Alumni Gathering Nasional 2024</p>
            <p class="mt-1 text-xs text-slate-500">14 Desember 2024 · Aula Serbaguna SMK/SMA/MA · Registrasi hingga 5 Desember</p>
            <a href="#agenda" class="mt-4 inline-flex items-center text-sm font-semibold text-primary hover:text-primary/80">
              Lihat Detail Acara
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
