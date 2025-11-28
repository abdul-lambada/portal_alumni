@extends('layouts.app')

@section('title', 'Portal Alumni SMK/SMA/MA')

@section('content')
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
            class="inline-flex items-center justify-center rounded-full bg-secondary px-6 py-3 text-sm font-semibold text-slate-900 shadow-soft transition hover:bg-secondary/90"
          >
            Gabung Komunitas Alumni
          </a>
          <a
            href="#highlight"
            class="inline-flex items-center justify-center rounded-full border border-white/60 px-6 py-3 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10"
          >
            Lihat Agenda & Prestasi
          </a>
        </div>
      </div>
      <div class="relative w-full max-w-xl rounded-3xl bg-white/10 p-6 backdrop-blur md:p-8">
        <div class="grid grid-cols-2 gap-4 text-center text-sm">
          <div class="rounded-2xl border border-white/20 bg-white/5 p-5">
            <p class="text-3xl font-semibold">12K+</p>
            <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Total Alumni Terdata</p>
          </div>
          <div class="rounded-2xl border border-white/20 bg-white/5 p-5">
            <p class="text-3xl font-semibold">87%</p>
            <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Serapan Kerja & Wirausaha</p>
          </div>
          <div class="rounded-2xl border border-white/20 bg-white/5 p-5">
            <p class="text-3xl font-semibold">120+</p>
            <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Mitra Industri Aktif</p>
          </div>
          <div class="rounded-2xl border border-white/20 bg-white/5 p-5">
            <p class="text-3xl font-semibold">45</p>
            <p class="mt-1 text-xs uppercase tracking-widest text-white/70">Program Pengabdian Alumni</p>
          </div>
        </div>
        <div class="mt-6 rounded-2xl bg-white/90 p-5 text-slate-700 shadow-lg">
          <p class="text-xs font-medium uppercase tracking-[0.4em] text-primary">Update Terkini</p>
          <p class="mt-2 text-sm font-semibold">Alumni Gathering Nasional 2024</p>
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
  </section>

  <!-- Profil Section -->
  <section id="profil" class="relative bg-white py-24">
    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-primary/10 to-transparent"></div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-10">
      <div class="grid gap-12 lg:grid-cols-[1.1fr,0.9fr] lg:items-center">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">Tentang Portal</p>
          <h2 class="mt-3 text-3xl font-semibold text-slate-900 md:text-4xl">
            Wadah Resmi Kolaborasi dan Pengembangan Alumni SMK/SMA/MA
          </h2>
          <p class="mt-6 text-sm leading-relaxed text-slate-600 md:text-base">
            Portal Alumni SMK/SMA/MA dirancang untuk memperkuat jejaring lulusan, menghadirkan informasi terbaru mengenai kegiatan sekolah, serta mewadahi kontribusi alumni bagi adik kelas dan almamater. Melalui platform ini, data alumni dikelola secara terpusat, memudahkan proses verifikasi, rekonsiliasi, dan pemutakhiran profil secara berkala.
          </p>
          <div class="mt-8 grid gap-6 sm:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
              <p class="text-sm font-semibold text-slate-900">Transparansi Data Alumni</p>
              <p class="mt-2 text-sm text-slate-600">
                Penyajian data lulusan lintas angkatan yang terstandardisasi, akurat, dan mudah diakses.
              </p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
              <p class="text-sm font-semibold text-slate-900">Kolaborasi & Karier</p>
              <p class="mt-2 text-sm text-slate-600">
                Ruang berbagi informasi lowongan kerja, magang, mentorship, dan program kewirausahaan.
              </p>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="absolute -inset-4 rounded-3xl bg-primary/10 blur-3xl"></div>
          <div class="relative rounded-3xl bg-white shadow-soft">
            <div class="grid divide-y divide-slate-100">
              <div class="flex items-center gap-4 px-8 py-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3 3" />
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-semibold text-slate-900">Integrasi Riwayat</p>
                  <p class="text-xs text-slate-500">
                    Data akademik dan pencapaian terdokumentasi bagi setiap alumni.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-4 px-8 py-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-semibold text-slate-900">Standar Sekolah</p>
                  <p class="text-xs text-slate-500">
                    Desain dan tata kelola mengacu pada standar mutu SMK/SMA/MA.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-4 px-8 py-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c-1.657 0-3 .895-3 2v1h6v-1c0-1.105-1.343-2-3-2z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7a3 3 0 110 6 3 3 0 010-6z" />
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-semibold text-slate-900">Layanan Terpadu</p>
                  <p class="text-xs text-slate-500">
                    Fitur permohonan legalisir, surat rekomendasi, dan dukungan alumni.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistik Section -->
  <section id="statistik" class="bg-slate-900 py-24 text-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
      <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
        <div>
          <p class="text-xs font-semibold uppercase tracking-[0.4em] text-secondary">Data Alumni</p>
          <h2 class="mt-3 text-3xl font-semibold md:text-4xl">
            Statistik Terkini Keterlacakkan dan Keterlibatan Alumni
          </h2>
          <p class="mt-4 max-w-2xl text-sm text-white/70 md:text-base">
            Data berikut diperbarui setiap triwulan melalui kolaborasi dengan wali kelas, ketua angkatan, serta tim tracer study SMK/SMA/MA.
          </p>
        </div>
        <a
          href="#register"
          class="inline-flex items-center justify-center rounded-full border border-white/30 px-6 py-3 text-sm font-semibold text-white transition hover:border-white hover:bg-white/10"
        >
          Perbarui Data Alumni
        </a>
      </div>
      <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        @foreach ($statistics as $stat)
          <x-stat-card
            :label="$stat['label']"
            :value="$stat['value']"
            :description="$stat['description']"
          />
        @endforeach
      </div>
    </div>
  </section>

  <!-- Program Section -->
  <section id="program" class="relative bg-gradient-to-b from-white via-surface to-white py-24">
    <div class="absolute inset-x-0 top-0 -z-10 h-40 bg-gradient-to-b from-primary/15 via-transparent"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
      <div class="max-w-2xl">
        <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">Program & Layanan</p>
        <h2 class="mt-3 text-3xl font-semibold text-slate-900 md:text-4xl">
          Layanan Unggulan yang Memperkuat Jejaring dan Kontribusi Alumni
        </h2>
        <p class="mt-4 text-sm text-slate-600 md:text-base">
          Program dirancang untuk memastikan alumni tetap terhubung dengan almamater serta memiliki akses ke peluang pengembangan diri dan karier.
        </p>
      </div>
      <div class="mt-12 grid gap-6 lg:grid-cols-3">
        @foreach ($programs as $program)
          <x-program-card
            :title="$program['title']"
            :description="$program['description']"
            :features="$program['features']"
            :icon-class="$program['icon_class']"
            :icon-markup="$program['icon_markup']"
          />
        @endforeach
      </div>
    </div>
  </section>

        <!-- Prestasi Section -->
        <section id="prestasi" class="bg-white py-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-10">
            <div class="flex flex-col items-start gap-8 md:flex-row md:items-end md:justify-between">
              <div>
                <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                  Prestasi & Apresiasi
                </p>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900 md:text-4xl">
                  Kisah Inspiratif Alumni yang Mengharumkan Nama Sekolah
                </h2>
                <p class="mt-4 text-sm text-slate-600 md:text-base">
                  Setiap pencapaian alumni adalah bukti kualitas pendidikan dan karakter unggul SMK/SMA/MA.
                </p>
              </div>
              <div class="flex gap-3" x-data="{ filter: '2024' }">
                <button
                  type="button"
                  class="rounded-full border px-4 py-2 text-xs font-semibold uppercase tracking-widest transition"
                  :class="filter === '2024' ? 'border-primary bg-primary text-white' : 'border-slate-200 text-slate-500'"
                  x-on:click="filter = '2024'"
                >
                  Sorotan 2024
                </button>
                <button
                  type="button"
                  class="rounded-full border px-4 py-2 text-xs font-semibold uppercase tracking-widest transition"
                  :class="filter === 'Semua' ? 'border-primary bg-primary text-white' : 'border-slate-200 text-slate-500'"
                  x-on:click="filter = 'Semua'"
                >
                  Semua Tahun
                </button>
              </div>
            </div>
            <div class="mt-12 grid gap-6 lg:grid-cols-3">
              <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 p-8 transition hover:-translate-y-1 hover:shadow-xl">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/0 via-primary/5 to-primary/0 opacity-0 transition group-hover:opacity-100"></div>
                <div class="relative">
                  <p class="text-xs font-semibold uppercase tracking-[0.35em] text-primary/80">
                    ICT Innovation
                  </p>
                  <h3 class="mt-3 text-lg font-semibold text-slate-900">
                    Juara I Lomba Inovasi Digital Nasional 2024
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Tim alumni Rekayasa Perangkat Lunak menghadirkan solusi IoT untuk efisiensi energi sekolah.
                  </p>
                  <div class="mt-4 flex items-center gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-primary">
                      Angkatan 2018
                    </span>
                    <span>PT Astra Digital</span>
                  </div>
                </div>
              </article>
              <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-8 transition hover:-translate-y-1 hover:shadow-xl">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/0 via-secondary/10 to-secondary/0 opacity-0 transition group-hover:opacity-100"></div>
                <div class="relative">
                  <p class="text-xs font-semibold uppercase tracking-[0.35em] text-secondary/80">
                    Wirausaha
                  </p>
                  <h3 class="mt-3 text-lg font-semibold text-slate-900">
                    Alumni Technopreneur Award Asia 2023
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Founder AgriTech alumnus SMK/SMA/MA memimpin inovasi pertanian presisi berbasis AI dan IoT.
                  </p>
                  <div class="mt-4 flex items-center gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-secondary/10 px-3 py-1 text-secondary">
                      Angkatan 2011
                    </span>
                    <span>CEO AgriSense ID</span>
                  </div>
                </div>
              </article>
              <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 p-8 transition hover:-translate-y-1 hover:shadow-xl">
                <div class="absolute inset-0 bg-gradient-to-r from-accent/0 via-accent/10 to-accent/0 opacity-0 transition group-hover:opacity-100"></div>
                <div class="relative">
                  <p class="text-xs font-semibold uppercase tracking-[0.35em] text-accent">
                    Sosial & Pengabdian
                  </p>
                  <h3 class="mt-3 text-lg font-semibold text-slate-900">
                    Program SMK/SMA/MA Mengajar ke Desa 4.0
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Alumni elektro dan multimedia melatih digitalisasi UMKM desa binaan bersama KemenKopUKM.
                  </p>
                  <div class="mt-4 flex items-center gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-accent/10 px-3 py-1 text-accent">
                      Angkatan 2016
                    </span>
                    <span>Tim Relawan Nasional</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>

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
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
              <article class="rounded-3xl bg-white/10 p-8 backdrop-blur">
                <div class="flex items-center gap-4">
                  <img
                    src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=160&q=80"
                    alt="Foto alumni"
                    class="h-16 w-16 rounded-full object-cover"
                  />
                  <div>
                    <h3 class="text-base font-semibold text-white">Rizky Pratama</h3>
                    <p class="text-xs uppercase tracking-widest text-white/60">IT Solution Architect · Angkatan 2010</p>
                  </div>
                </div>
                <p class="mt-5 text-sm text-white/80">
                  “Portal ini memudahkan saya memberi mentoring kepada siswa jurusan RPL. Kini saya bisa menjadwalkan sesi daring dan berbagi modul pembelajaran terkini dengan mudah.”
                </p>
              </article>
              <article class="rounded-3xl bg-white/10 p-8 backdrop-blur">
                <div class="flex items-center gap-4">
                  <img
                    src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=160&q=80"
                    alt="Foto alumni"
                    class="h-16 w-16 rounded-full object-cover"
                  />
                  <div>
                    <h3 class="text-base font-semibold text-white">Salsabila Ardhani</h3>
                    <p class="text-xs uppercase tracking-widest text-white/60">Founder Kreatif · Angkatan 2014</p>
                  </div>
                </div>
                <p class="mt-5 text-sm text-white/80">
                  “Komunitas alumni membantu saya mendapatkan kolaborasi dengan BUMN untuk program CSR. Hubungannya kini lebih mudah karena semua kontak terstruktur.”
                </p>
              </article>
              <article class="rounded-3xl bg-white/10 p-8 backdrop-blur">
                <div class="flex items-center gap-4">
                  <img
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=160&q=80"
                    alt="Foto alumni"
                    class="h-16 w-16 rounded-full object-cover"
                  />
                  <div>
                    <h3 class="text-base font-semibold text-white">Aditya Wirawan</h3>
                    <p class="text-xs uppercase tracking-widest text-white/60">Kepala Divisi HR · Angkatan 2008</p>
                  </div>
                </div>
                <p class="mt-5 text-sm text-white/80">
                  “Tracer study dan data digital membuat proses rekrutmen alumni jauh lebih cepat. Kami bisa langsung menghubungi lulusan sesuai kebutuhan industri.”
                </p>
              </article>
            </div>
          </div>
        </section>

        <!-- Highlight Section -->
        <section id="highlight" class="bg-white py-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-10">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
              <div class="relative overflow-hidden rounded-3xl bg-slate-900 p-8 text-white">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1515524738708-327f6b0037a7?auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center opacity-30"></div>
                <div class="relative">
                  <p class="text-xs font-semibold uppercase tracking-[0.4em] text-secondary">
                    Sambutan Kepala Sekolah
                  </p>
                  <h3 class="mt-4 text-2xl font-semibold">
                    “Portal alumni adalah etalase prestasi dan kolaborasi untuk membangun generasi unggul.”
                  </h3>
                  <p class="mt-4 text-sm text-white/80">
                    Kami berkomitmen menjaga kesinambungan hubungan dengan seluruh alumni untuk mendukung program vokasi, pengembangan industri, dan pemberdayaan masyarakat.
                  </p>
                  <div class="mt-8 flex items-center gap-4 text-sm">
                    <div class="h-12 w-12 rounded-full bg-white/20"></div>
                    <div>
                      <p class="font-semibold">Drs. H. Ahmad Syafii</p>
                      <p class="text-white/70">Kepala SMK/SMA/MA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                  Video Alumni
                </p>
                <div class="mt-4 aspect-video overflow-hidden rounded-2xl">
                  <iframe
                    class="h-full w-full"
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="Pesan Alumni SMK/SMA/MA"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                  ></iframe>
                </div>
                <p class="mt-4 text-sm text-slate-600">
                  Simak pesan alumni lintas generasi mengenai peluang kolaborasi dan dukungan nyata untuk almamater.
                </p>
                <a
                  href="#agenda"
                  class="mt-6 inline-flex items-center text-sm font-semibold text-primary hover:text-primary/80"
                >
                  Lihat dokumentasi kegiatan lainnya
                  <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- Agenda Section -->
        <section id="agenda" class="bg-slate-100 py-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-10">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
              <div>
                <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                  Agenda & Pengumuman
                </p>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900 md:text-4xl">
                  Bentuk Keterlibatan Alumni dalam Kegiatan Sekolah
                </h2>
                <p class="mt-4 text-sm text-slate-600 md:text-base">
                  Update rangkaian kegiatan, seminar, hingga bakti sosial yang dapat diikuti oleh seluruh alumni.
                </p>
              </div>
              <a
                href="#register"
                class="inline-flex items-center rounded-full border border-primary px-6 py-3 text-sm font-semibold text-primary transition hover:bg-primary hover:text-white"
              >
                Konfirmasi Kehadiran
              </a>
            </div>
            <div class="mt-12 grid gap-10 lg:grid-cols-[1.2fr,0.8fr]">
              <div class="space-y-6">
                <article class="rounded-3xl bg-white p-6 shadow-sm">
                  <div class="flex items-center justify-between">
                    <span class="rounded-full bg-primary/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                      14 Des 2024
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-slate-400">
                      OFFLINE
                    </span>
                  </div>
                  <h3 class="mt-4 text-lg font-semibold text-slate-900">
                    Alumni Homecoming & Career Networking Day
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Forum temu kangen lintas generasi dilanjutkan dengan kurasi peluang kerja dan sharing industri bersama mitra strategis.
                  </p>
                  <div class="mt-4 flex flex-wrap gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Expo Industri
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Bimbingan Karier
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Donasi Perpustakaan
                    </span>
                  </div>
                </article>
                <article class="rounded-3xl bg-white p-6 shadow-sm">
                  <div class="flex items-center justify-between">
                    <span class="rounded-full bg-secondary/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-secondary">
                      20 Jan 2025
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-slate-400">
                      HYBRID
                    </span>
                  </div>
                  <h3 class="mt-4 text-lg font-semibold text-slate-900">
                    Workshop Digital Talent: Cloud & AI Certification
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Pelatihan bersertifikat khusus alumni bidang TIK dengan mentor profesional dari perusahaan teknologi global.
                  </p>
                  <div class="mt-4 flex flex-wrap gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Sertifikasi Resmi
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Mentor Alumni
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Kuota Terbatas
                    </span>
                  </div>
                </article>
                <article class="rounded-3xl bg-white p-6 shadow-sm">
                  <div class="flex items-center justify-between">
                    <span class="rounded-full bg-accent/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-accent">
                      3 Mar 2025
                    </span>
                    <span class="text-xs font-semibold uppercase tracking-widest text-slate-400">
                      ONLINE
                    </span>
                  </div>
                  <h3 class="mt-4 text-lg font-semibold text-slate-900">
                    Webinar Alumni Mengajar: Tantangan Revolusi Industri 5.0
                  </h3>
                  <p class="mt-3 text-sm text-slate-600">
                    Diskusi panel bersama alumni lintas jurusan mengenai inovasi teknologi dan strategi adaptasi ke dunia kerja.
                  </p>
                  <div class="mt-4 flex flex-wrap gap-3 text-xs text-slate-500">
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Panel Alumni
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Live Q&A
                    </span>
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1">
                      Sertifikat Kehadiran
                    </span>
                  </div>
                </article>
              </div>
              <aside class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm" x-data="{ tab: 'pengumuman' }">
                <div class="flex gap-2 rounded-full bg-slate-100 p-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                  <button
                    type="button"
                    class="flex-1 rounded-full px-4 py-2 transition"
                    :class="tab === 'pengumuman' ? 'bg-white text-primary shadow' : 'text-slate-500'"
                    x-on:click="tab = 'pengumuman'"
                  >
                    Pengumuman
                  </button>
                  <button
                    type="button"
                    class="flex-1 rounded-full px-4 py-2 transition"
                    :class="tab === 'beasiswa' ? 'bg-white text-primary shadow' : 'text-slate-500'"
                    x-on:click="tab = 'beasiswa'"
                  >
                    Beasiswa
                  </button>
                </div>
                <div class="mt-6 space-y-5">
                  <div x-show="tab === 'pengumuman'" x-transition class="space-y-5">
                    <article class="rounded-2xl border border-slate-100 p-5">
                      <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary/80">
                        Update Portal
                      </p>
                      <h3 class="mt-2 text-sm font-semibold text-slate-900">
                        Fitur Legalisir Online dan Tracking Status Dokumen
                      </h3>
                      <p class="mt-2 text-xs text-slate-500">
                        Berlaku mulai 1 Desember 2024 • SLA 3 Hari Kerja
                      </p>
                    </article>
                    <article class="rounded-2xl border border-slate-100 p-5">
                      <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary/80">
                        Mitra Baru
                      </p>
                      <h3 class="mt-2 text-sm font-semibold text-slate-900">
                        Kerja Sama Program Studi Independen dengan Telkom University
                      </h3>
                      <p class="mt-2 text-xs text-slate-500">
                        Batch pertama dibuka untuk alumni maksimal 3 tahun lulus.
                      </p>
                    </article>
                  </div>
                  <div x-show="tab === 'beasiswa'" x-transition class="space-y-5">
                    <article class="rounded-2xl border border-slate-100 p-5">
                      <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary/80">
                        Alumni Peduli
                      </p>
                      <h3 class="mt-2 text-sm font-semibold text-slate-900">
                        Beasiswa Lanjut Kuliah D3/D4 oleh Angkatan 2005
                      </h3>
                      <p class="mt-2 text-xs text-slate-500">
                        Kuota 5 penerima · Deadline 10 Januari 2025.
                      </p>
                    </article>
                    <article class="rounded-2xl border border-slate-100 p-5">
                      <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary/80">
                        CSR Industri
                      </p>
                      <h3 class="mt-2 text-sm font-semibold text-slate-900">
                        Program Pelatihan Digital Marketing Bersertifikat
                      </h3>
                      <p class="mt-2 text-xs text-slate-500">
                        Kerja sama PT Sumber Daya Kreatif • Subsidi penuh.
                      </p>
                    </article>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </section>

        <!-- Layanan Section -->
        <section id="layanan" class="bg-white py-24">
          <div class="mx-auto max-w-7xl px-6 lg:px-10">
            <div class="grid gap-12 lg:grid-cols-[1.05fr,0.95fr] lg:items-center">
              <div>
                <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                  Layanan Administrasi
                </p>
                <h2 class="mt-3 text-3xl font-semibold text-slate-900 md:text-4xl">
                  Kemudahan Layanan Digital untuk Administrasi Alumni
                </h2>
                <p class="mt-4 text-sm text-slate-600 md:text-base">
                  Tim tata usaha menyediakan beberapa layanan daring untuk memastikan kebutuhan administrasi alumni terpenuhi secara cepat, akurat, dan terdokumentasi.
                </p>
                <div class="mt-8 grid gap-6 sm:grid-cols-2">
                  <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h3 class="text-sm font-semibold text-slate-900">Legalisir Ijazah</h3>
                    <p class="mt-2 text-sm text-slate-600">
                      Permohonan daring dengan tracking status realtime dan notifikasi email.
                    </p>
                  </div>
                  <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h3 class="text-sm font-semibold text-slate-900">Surat Rekomendasi</h3>
                    <p class="mt-2 text-sm text-slate-600">
                      Pengajuan rekomendasi pekerjaan atau studi lanjutan dengan SLA 5 hari kerja.
                    </p>
                  </div>
                  <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h3 class="text-sm font-semibold text-slate-900">Tracer Study</h3>
                    <p class="mt-2 text-sm text-slate-600">
                      Kuesioner berkala untuk memantau karier alumni dan meningkatkan kurikulum.
                    </p>
                  </div>
                  <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                    <h3 class="text-sm font-semibold text-slate-900">Kolaborasi Industri</h3>
                    <p class="mt-2 text-sm text-slate-600">
                      Fasilitasi kunjungan industri, teaching factory, dan kerja praktik siswa.
                    </p>
                  </div>
                </div>
              </div>
              <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                  Permohonan Online
                </p>
                <form class="mt-6 space-y-5">
                  <div>
                    <label for="nama" class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Nama Lengkap</label>
                    <input
                      type="text"
                      id="nama"
                      name="nama"
                      placeholder="Masukkan nama lengkap"
                      class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                    />
                  </div>
                  <div>
                    <label for="angkatan" class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Angkatan</label>
                    <input
                      type="text"
                      id="angkatan"
                      name="angkatan"
                      placeholder="Contoh: 2016"
                      class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                    />
                  </div>
                  <div>
                    <label for="layanan" class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Jenis Layanan</label>
                    <select
                      id="layanan"
                      name="layanan"
                      class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                    >
                      <option>Pilih layanan</option>
                      <option>Legalisir Ijazah</option>
                      <option>Surat Rekomendasi</option>
                      <option>Tracer Study</option>
                      <option>Kolaborasi Industri</option>
                    </select>
                  </div>
                  <div>
                    <label for="pesan" class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">Catatan</label>
                    <textarea
                      id="pesan"
                      name="pesan"
                      rows="4"
                      placeholder="Tuliskan kebutuhan atau informasi tambahan"
                      class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20"
                    ></textarea>
                  </div>
                  <button
                    type="submit"
                    class="w-full rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow hover:bg-primary/90"
                  >
                    Kirim Permohonan
                  </button>
                  <p class="text-xs text-slate-500">
                    *Tim tata usaha akan menghubungi melalui email resmi alumni dalam 1x24 jam.
                  </p>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!-- Register CTA Section -->
        <section id="register" class="relative bg-primary py-24 text-white">
          <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.25),_transparent)]"></div>
          <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-10">
            <p class="text-xs font-semibold uppercase tracking-[0.4em] text-white/70">
              Registrasi Alumni
            </p>
            <h2 class="mt-4 text-3xl font-semibold md:text-4xl">
              Mari Perbarui Data dan Jadilah Bagian dari Gerakan Alumni SMK/SMA/MA
            </h2>
            <p class="mt-4 text-sm text-white/80 md:text-base">
              Lengkapi profil, unggah portofolio, dan terhubung dengan lebih dari 12.000 alumni lainnya untuk memperkuat jejaring profesional dan sosial.
            </p>
            <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:justify-center">
              <a
                href="#layanan"
                class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-primary shadow hover:bg-white/90"
              >
                Lengkapi Data Profil
              </a>
              <a
                href="#agenda"
                class="inline-flex items-center justify-center rounded-full border border-white/60 px-6 py-3 text-sm font-semibold text-white hover:bg-white/10"
              >
                Daftar Kegiatan Terdekat
              </a>
            </div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="bg-white py-24">
          <div class="mx-auto max-w-5xl px-6 text-slate-800 md:px-10">
            <div class="text-center">
              <p class="text-xs font-semibold uppercase tracking-[0.4em] text-primary">
                Pertanyaan Umum
              </p>
              <h2 class="mt-3 text-3xl font-semibold md:text-4xl">
                Informasi Penting seputar Portal Alumni SMK/SMA/MA
              </h2>
              <p class="mt-4 text-sm text-slate-600 md:text-base">
                Temukan jawaban atas pertanyaan yang sering diajukan mengenai layanan dan akses portal.
              </p>
            </div>
            <div class="mt-12" x-data="{ open: 1 }">
              <div class="divide-y divide-slate-200 rounded-3xl border border-slate-200 bg-white shadow-sm">
                <div class="p-6" :class="open === 1 ? 'bg-slate-50' : ''">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between text-left"
                    x-on:click="open = open === 1 ? null : 1"
                  >
                    <span class="text-sm font-semibold text-slate-900">
                      Bagaimana cara melakukan registrasi akun portal alumni?
                    </span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 text-primary transition"
                      :class="open === 1 ? 'rotate-45' : ''"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                  </button>
                  <div class="mt-3 text-sm text-slate-600" x-show="open === 1" x-collapse>
                    Registrasi dapat dilakukan melalui tombol “Lengkapi Data Profil”. Lengkapi identitas diri, angkatan, kontak aktif, serta unggah dokumen pendukung. Setelah diverifikasi oleh admin, akun akan aktif dalam 1x24 jam kerja.
                  </div>
                </div>
                <div class="p-6" :class="open === 2 ? 'bg-slate-50' : ''">
                  <button type="button" class="flex w-full items-center justify-between text-left" x-on:click="open = open === 2 ? null : 2">
                    <span class="text-sm font-semibold text-slate-900">
                      Apakah portal menyediakan layanan legalisir ijazah daring?
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary transition" :class="open === 2 ? 'rotate-45' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                  </button>
                  <div class="mt-3 text-sm text-slate-600" x-show="open === 2" x-collapse>
                    Ya. Alumni dapat mengajukan legalisir ijazah dan transkrip secara daring. Status permohonan dapat dipantau melalui dashboard pribadi dan menerima notifikasi email ketika dokumen siap diambil atau dikirim.
                  </div>
                </div>
                <div class="p-6" :class="open === 3 ? 'bg-slate-50' : ''">
                  <button type="button" class="flex w-full items-center justify-between text-left" x-on:click="open = open === 3 ? null : 3">
                    <span class="text-sm font-semibold text-slate-900">
                      Bagaimana alumni dapat berkontribusi terhadap program sekolah?
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary transition" :class="open === 3 ? 'rotate-45' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                  </button>
                  <div class="mt-3 text-sm text-slate-600" x-show="open === 3" x-collapse>
                    Alumni dapat berkolaborasi melalui program pengabdian masyarakat, pengembangan fasilitas sekolah, donasi beasiswa, serta menjadi mentor pada kegiatan keahlian dan kewirausahaan.
                  </div>
                </div>
                <div class="p-6" :class="open === 4 ? 'bg-slate-50' : ''">
                  <button type="button" class="flex w-full items-center justify-between text-left" x-on:click="open = open === 4 ? null : 4">
                    <span class="text-sm font-semibold text-slate-900">
                      Siapa yang dapat dihubungi untuk bantuan teknis portal?
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary transition" :class="open === 4 ? 'rotate-45' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                  </button>
                  <div class="mt-3 text-sm text-slate-600" x-show="open === 4" x-collapse>
                    Hubungi Tim Admin Alumni melalui email alumni@smksam.sch.id atau hotline resmi portal di (021) 555-1234 pada hari kerja pukul 08.00-16.00 WIB.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontak" class="bg-slate-900 py-24 text-white">
          <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[0.9fr,1.1fr] lg:items-center lg:px-10">
            <div>
              <p class="text-xs font-semibold uppercase tracking-[0.4em] text-secondary">
                Hubungi Kami
              </p>
              <h2 class="mt-3 text-3xl font-semibold md:text-4xl">
                Tim Sekretariat dan Admin Portal Alumni
              </h2>
              <p class="mt-4 text-sm text-white/70 md:text-base">
                Kami siap membantu kebutuhan informasi dan koordinasi program alumni. Silakan hubungi kontak berikut untuk pelayanan terbaik.
              </p>
              <div class="mt-8 space-y-5 text-sm text-white/80">
                <div class="flex items-start gap-4">
                  <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <div>
                    <p class="font-semibold">Email Resmi</p>
                    <p>alumni@smksam.sch.id</p>
                  </div>
                </div>
                <div class="flex items-start gap-4">
                  <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h2l3 7-1.35 2.7a1 1 0 00.9 1.45h7.9M16 13h2a2 2 0 012 2v5h-6v-5a2 2 0 012-2z" />
                    </svg>
                  </div>
                  <div>
                    <p class="font-semibold">Hotline Alumni</p>
                    <p>(021) 555-1234 · Senin - Jumat</p>
                  </div>
                </div>
                <div class="flex items-start gap-4">
                  <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a4 4 0 10-5.657 5.657l4.243 4.243a9 9 0 111.414-1.414z" />
                    </svg>
                  </div>
                  <div>
                    <p class="font-semibold">Alamat Sekretariat</p>
                    <p>Jl. Pendidikan Vokasi No. 12, Jakarta Selatan</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="rounded-3xl bg-white/10 p-10 shadow-soft backdrop-blur">
              <p class="text-xs font-semibold uppercase tracking-[0.4em] text-secondary">
                Jejaring Sosial
              </p>
              <p class="mt-3 text-sm text-white/80">
                Ikuti kanal resmi kami untuk informasi terbaru dan dokumentasi kegiatan alumni.
              </p>
              <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <a href="#" class="flex items-center gap-3 rounded-2xl bg-white/10 p-4 transition hover:bg-white/20">
                  <div class="rounded-full bg-white/10 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.25 4.25 0 001.88-2.35 8.5 8.5 0 01-2.7 1.03 4.24 4.24 0 00-7.22 3.87A12.05 12.05 0 013 4.79a4.25 4.25 0 001.31 5.66 4.22 4.22 0 01-1.92-.53v.05a4.24 4.24 0 003.4 4.16 4.3 4.3 0 01-1.91.07 4.25 4.25 0 003.97 2.95A8.5 8.5 0 012 19.54a12 12 0 006.29 1.84c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.35-.02-.53A8.35 8.35 0 0022.46 6z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-semibold">Twitter/X</p>
                    <p class="text-xs text-white/60">@alumni_smksam</p>
                  </div>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-2xl bg-white/10 p-4 transition hover:bg-white/20">
                  <div class="rounded-full bg-white/10 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M21.6 0H2.4A2.4 2.4 0 000 2.4v19.2A2.4 2.4 0 002.4 24h10.33v-8.35H9.69V11h3.04V8.31c0-3 1.82-4.64 4.5-4.64 1.3 0 2.65.23 2.65.23v2.9h-1.49c-1.47 0-1.93.91-1.93 1.84V11h3.29l-.53 4.65h-2.76V24h5.41a2.4 2.4 0 002.4-2.4V2.4A2.4 2.4 0 0021.6 0z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-semibold">Facebook</p>
                    <p class="text-xs text-white/60">SMK/SMA/MA Alumni Official</p>
                  </div>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-2xl bg-white/10 p-4 transition hover:bg-white/20">
                  <div class="rounded-full bg-white/10 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 0C5.372 0 0 5.373 0 12c0 5.302 3.438 9.799 8.205 11.387.6.111.82-.261.82-.58v-2.04c-3.338.725-4.033-1.415-4.033-1.415-.547-1.388-1.336-1.758-1.336-1.758-1.091-.745.082-.73.082-.73 1.205.085 1.84 1.237 1.84 1.237 1.073 1.84 2.809 1.31 3.495 1 .108-.777.42-1.31.762-1.611-2.665-.305-5.466-1.332-5.466-5.932 0-1.31.469-2.382 1.236-3.222-.124-.304-.536-1.527.117-3.184 0 0 1.008-.322 3.3 1.23a11.517 11.517 0 013.003-.404c1.02.005 2.047.138 3.004.404 2.29-1.552 3.297-1.23 3.297-1.23.655 1.657.243 2.88.12 3.184.77.84 1.235 1.912 1.235 3.222 0 4.61-2.804 5.624-5.476 5.92.431.372.815 1.102.815 2.222v3.293c0 .321.217.695.825.577C20.565 21.796 24 17.298 24 12c0-6.627-5.373-12-12-12z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-semibold">LinkedIn</p>
                    <p class="text-xs text-white/60">SMK/SMA/MA Alumni Network</p>
                  </div>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-2xl bg-white/10 p-4 transition hover:bg-white/20">
                  <div class="rounded-full bg-white/10 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.337 3.608 1.311.975.975 1.25 2.242 1.311 3.608.058 1.266.07 1.646.07 4.848 0 3.204-.012 3.584-.07 4.85-.062 1.366-.337 2.633-1.311 3.608-.975.975-2.242 1.25-3.608 1.311-1.266.058-1.646.07-4.85.07-3.204 0-3.584-.012-4.85-.07-1.366-.062-2.633-.337-3.608-1.311-.975-.975-1.25-2.242-1.311-3.608C2.175 15.646 2.163 15.266 2.163 12c0-3.204.012-3.584.07-4.85.062-1.366.337-2.633 1.311-3.608.975-.975 2.242-1.25 3.608-1.311C8.416 2.175 8.796 2.163 12 2.163zM12 0C8.741 0 8.332.013 7.052.072 5.772.131 4.681.417 3.75 1.35c-.932.932-1.218 2.023-1.277 3.302C2.013 5.932 2 6.342 2 9.6v4.8c0 3.259.013 3.668.072 4.948.059 1.28.345 2.371 1.277 3.302.932.932 2.023 1.218 3.302 1.277C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.28-.059 2.371-.345 3.302-1.277.932-.932 1.218-2.023 1.277-3.302.059-1.28.072-1.689.072-4.948V9.6c0-3.259-.013-3.668-.072-4.948-.059-1.28-.345-2.371-1.277-3.302C19.319.417 18.228.131 16.948.072 15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.882 0 1.44 1.44 0 012.882 0z" />
                    </svg>
                  </div>
                  <div>
                    <p class="text-sm font-semibold">Instagram</p>
                    <p class="text-xs text-white/60">@smksam.alumni</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
