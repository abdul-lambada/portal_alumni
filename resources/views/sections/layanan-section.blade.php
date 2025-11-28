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
