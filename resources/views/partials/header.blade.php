<header
  x-data="{ mobileOpen: false, scrollY: 0 }"
  x-on:scroll.window="scrollY = window.scrollY"
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
    <nav class="hidden items-center gap-10 text-sm font-medium text-slate-600 md:flex">
      <a href="#profil" class="hover:text-primary">Profil</a>
      <a href="#statistik" class="hover:text-primary">Statistik</a>
      <a href="#program" class="hover:text-primary">Program</a>
      <a href="#prestasi" class="hover:text-primary">Prestasi</a>
      <a href="#alumni" class="hover:text-primary">Alumni</a>
      <a href="#agenda" class="hover:text-primary">Agenda</a>
      <a href="#layanan" class="hover:text-primary">Layanan</a>
      <a href="#kontak" class="hover:text-primary">Kontak</a>
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
    <nav class="flex flex-col gap-3 text-sm font-medium text-slate-600">
      <a x-on:click="mobileOpen = false" href="#profil" class="rounded-lg px-3 py-2 hover:bg-slate-100">Profil</a>
      <a x-on:click="mobileOpen = false" href="#statistik" class="rounded-lg px-3 py-2 hover:bg-slate-100">Statistik</a>
      <a x-on:click="mobileOpen = false" href="#program" class="rounded-lg px-3 py-2 hover:bg-slate-100">Program</a>
      <a x-on:click="mobileOpen = false" href="#prestasi" class="rounded-lg px-3 py-2 hover:bg-slate-100">Prestasi</a>
      <a x-on:click="mobileOpen = false" href="#alumni" class="rounded-lg px-3 py-2 hover:bg-slate-100">Alumni</a>
      <a x-on:click="mobileOpen = false" href="#agenda" class="rounded-lg px-3 py-2 hover:bg-slate-100">Agenda</a>
      <a x-on:click="mobileOpen = false" href="#layanan" class="rounded-lg px-3 py-2 hover:bg-slate-100">Layanan</a>
      <a x-on:click="mobileOpen = false" href="#kontak" class="rounded-lg px-3 py-2 hover:bg-slate-100">Kontak</a>
    </nav>
    <a
      href="#register"
      class="mt-4 inline-flex w-full items-center justify-center rounded-full bg-primary px-5 py-2 text-sm font-semibold text-white shadow hover:bg-primary/90"
    >
      Daftar Alumni
    </a>
  </div>
</header>
