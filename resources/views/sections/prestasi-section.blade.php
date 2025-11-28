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
