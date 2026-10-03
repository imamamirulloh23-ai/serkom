<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::query()->where('username', 'admin')->first();

        if (!$admin) {
            throw new RuntimeException('Jalankan DatabaseSeeder terlebih dahulu agar akun admin tersedia.');
        }

        $berita = [
            [
                'judul' => 'Pembukaan Tahun Ajaran Baru',
                'isi' => 'Sekolah Kita memulai tahun ajaran baru dengan kegiatan penyambutan siswa dan pengenalan lingkungan sekolah.',
                'tanggal' => now()->subDays(1)->toDateString(),
                'gambar' => 'berita/tahun-ajaran-baru.jpg',
                'slug' => 'pembukaan-tahun-ajaran-baru',
            ],
            [
                'judul' => 'Siswa Raih Prestasi Akademik',
                'isi' => 'Siswa Sekolah Kita meraih prestasi dalam kompetisi akademik tingkat daerah berkat semangat belajar dan kerja keras.',
                'tanggal' => now()->subDays(2)->toDateString(),
                'gambar' => 'berita/prestasi-akademik.jpg',
            ],
            [
                'judul' => 'Pekan Seni dan Budaya Sekolah',
                'isi' => 'Pekan seni dan budaya menjadi ruang bagi siswa untuk menampilkan kreativitas melalui musik, tari, dan karya seni.',
                'tanggal' => now()->subDays(3)->toDateString(),
                'gambar' => 'berita/pekan-seni-budaya.jpg',
            ],
            [
                'judul' => 'Kegiatan Jumat Bersih',
                'isi' => 'Siswa dan guru bergotong royong menjaga kebersihan kelas serta lingkungan sekolah dalam kegiatan Jumat Bersih.',
                'tanggal' => now()->subDays(4)->toDateString(),
                'gambar' => 'berita/jumat-bersih.jpg',
            ],
            [
                'judul' => 'Klub Teknologi Gelar Pameran Karya',
                'isi' => 'Klub teknologi memamerkan hasil karya digital siswa sebagai bagian dari pembelajaran kreatif dan kolaboratif.',
                'tanggal' => now()->subDays(5)->toDateString(),
                'gambar' => 'berita/pameran-teknologi.jpg',
            ],
        ];

        foreach ($berita as $item) {
            Berita::query()->updateOrCreate(
                ['judul' => $item['judul']],
                [...$item, 'id_user' => $admin->id_user],
            );
        }
    }
}
