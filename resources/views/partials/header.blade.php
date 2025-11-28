<header
  x-data="{ mobileOpen: false, scrollY: 0, activeSection: 'beranda' }"
  x-on:scroll.window="
    scrollY = window.scrollY;
    const sections = ['beranda', 'profil', 'statistik', 'program', 'prestasi', 'alumni', 'agenda', 'layanan', 'kontak'];
    const current = sections.find(section => {
      const element = document.getElementById(section);
      if (element) {
        const rect = element.getBoundingClientRect();
        return rect.top <= 100 && rect.bottom >= 100;
      }
      return false;
    });
    activeSection = current || 'beranda';
  "
  class="fixed inset-x-0 top-0 z-50 transition-colors duration-300"
  :class="scrollY > 40 ? 'bg-white/95 backdrop-blur shadow-lg' : 'bg-transparent'"
>
  <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
    <a href="#beranda" class="flex items-center gap-3">
      <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-white">
        <span class="text-lg font-semibold">SA</span>
      </div>
      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-primary">
          SMK/SMA/MA
        </p>
        <p class="text-base font-semibold text-slate-900">
          Portal Alumni Resmi
        </p>
      </div>
    </a>
    <nav class="hidden items-center justify-center gap-6 text-sm font-medium text-slate-600 md:flex lg:gap-8">
      <a href="#beranda" :class="activeSection === 'beranda' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Beranda</a>
      <a href="#profil" :class="activeSection === 'profil' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Profil</a>
      <a href="#statistik" :class="activeSection === 'statistik' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Statistik</a>
      <a href="#program" :class="activeSection === 'program' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Program</a>
      <a href="#prestasi" :class="activeSection === 'prestasi' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Prestasi</a>
      <a href="#alumni" :class="activeSection === 'alumni' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Alumni</a>
      <a href="#agenda" :class="activeSection === 'agenda' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Agenda</a>
      <a href="#layanan" :class="activeSection === 'layanan' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Layanan</a>
      <a href="#kontak" :class="activeSection === 'kontak' ? 'text-primary font-semibold' : 'hover:text-primary'" class="transition-colors duration-200">Kontak</a>
    </nav>
    <div class="flex items-center gap-4">
      <a
        href="#register"
        class="hidden rounded-full border border-primary px-5 py-2 text-sm font-semibold text-primary transition hover:bg-primary hover:text-white md:inline-flex"
      >
        Daftar Alumni
      </a>
      <button
        type="button"
        class="inline-flex items-center justify-center rounded-full bg-primary/10 p-2 text-primary hover:bg-primary/20 md:hidden"
        x-on:click="mobileOpen = !mobileOpen"
        aria-label="Buka navigasi"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
  <div
    x-cloak
    x-show="mobileOpen"
    x-transition.opacity
    class="bg-white px-6 pb-6 pt-2 shadow-lg md:hidden"
  >
    <nav class="flex flex-col gap-2 text-sm font-medium text-slate-600">
      <a x-on:click="mobileOpen = false" href="#beranda" :class="activeSection === 'beranda' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Beranda</a>
      <a x-on:click="mobileOpen = false" href="#profil" :class="activeSection === 'profil' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Profil</a>
      <a x-on:click="mobileOpen = false" href="#statistik" :class="activeSection === 'statistik' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Statistik</a>
      <a x-on:click="mobileOpen = false" href="#program" :class="activeSection === 'program' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Program</a>
      <a x-on:click="mobileOpen = false" href="#prestasi" :class="activeSection === 'prestasi' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Prestasi</a>
      <a x-on:click="mobileOpen = false" href="#alumni" :class="activeSection === 'alumni' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Alumni</a>
      <a x-on:click="mobileOpen = false" href="#agenda" :class="activeSection === 'agenda' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Agenda</a>
      <a x-on:click="mobileOpen = false" href="#layanan" :class="activeSection === 'layanan' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Layanan</a>
      <a x-on:click="mobileOpen = false" href="#kontak" :class="activeSection === 'kontak' ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-slate-100'" class="rounded-lg px-4 py-3 transition-colors duration-200">Kontak</a>
    </nav>
    <a
      href="#register"
      class="mt-4 inline-flex w-full items-center justify-center rounded-full bg-primary px-5 py-2 text-sm font-semibold text-white shadow hover:bg-primary/90"
    >
      Daftar Alumni
    </a>
  </div>
</header>
