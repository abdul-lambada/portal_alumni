<?php

namespace App\Http\Controllers;

use Illuminate\Support\HtmlString;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function index(): View
    {
        $statistics = [
            [
                'label' => 'Sebaran Alumni',
                'value' => '67%',
                'description' => 'Bekerja di sektor industri prioritas (manufaktur, teknologi, dan kreatif).',
            ],
            [
                'label' => 'Kegiatan Mentoring',
                'value' => '320',
                'description' => 'Sesi mentoring karier dan wirausaha selama 12 bulan terakhir.',
            ],
            [
                'label' => 'Kontribusi Alumni',
                'value' => 'Rp1,2M',
                'description' => 'Bantuan beasiswa, sarana, dan program pengabdian almamater.',
            ],
            [
                'label' => 'Update Profil',
                'value' => '92%',
                'description' => 'Alumni aktif memperbarui data personal dan profesional tahun ini.',
            ],
        ];

        $programs = [
            [
                'title' => 'Hub Alumni',
                'description' => 'Direktori terintegrasi berisi profil lulusan, bidang keahlian, dan lokasi kerja untuk mempermudah kolaborasi lintas angkatan.',
                'features' => [
                    'Filter industri, keahlian, dan domisili',
                    'Fitur pesan aman antar-alumni',
                    'Pembaruan otomatis dari tracer study',
                ],
                'icon_class' => 'bg-primary/10 text-primary',
                'icon_markup' => new HtmlString('<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 7.5l-9 9m0-9l9 9" /></svg>'),
            ],
            [
                'title' => 'Karier & Beasiswa',
                'description' => 'Kurasi informasi lowongan kerja, peluang magang, sertifikasi, serta beasiswa lanjutan bagi alumni berprestasi.',
                'features' => [
                    'Portal lowongan eksklusif mitra industri',
                    'Rekomendasi kompetensi digital terbaru',
                    'Klinik karier dan sesi mock interview',
                ],
                'icon_class' => 'bg-secondary/10 text-secondary',
                'icon_markup' => new HtmlString('<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0c0 6.627-5.373 12-12 12S-3 18.627-3 12 2.373 0 9 0s12 5.373 12 12z" /></svg>'),
            ],
            [
                'title' => 'Pengabdian & Sosial',
                'description' => 'Fasilitasi kegiatan bakti sosial, pengabdian masyarakat, dan dukungan pengembangan fasilitas sekolah.',
                'features' => [
                    'Gerakan alumni peduli pendidikan',
                    'Program pengembangan laboratorium',
                    'Aksi bencana dan solidaritas alumni',
                ],
                'icon_class' => 'bg-accent/10 text-accent',
                'icon_markup' => new HtmlString('<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" /></svg>'),
            ],
        ];

        return view('public', [
            'statistics' => $statistics,
            'programs' => $programs,
        ]);
    }
}
