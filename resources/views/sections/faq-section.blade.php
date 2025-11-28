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
            Registrasi dapat dilakukan melalui tombol "Lengkapi Data Profil". Lengkapi identitas diri, angkatan, kontak aktif, serta unggah dokumen pendukung. Setelah diverifikasi oleh admin, akun akan aktif dalam 1x24 jam kerja.
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
