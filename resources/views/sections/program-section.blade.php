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
