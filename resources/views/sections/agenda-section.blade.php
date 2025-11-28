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
