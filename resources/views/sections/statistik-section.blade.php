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
