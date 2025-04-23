<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lowongan;

class LowonganSeeder extends Seeder
{
    public function run(): void
    {
        Lowongan::create([
            'judul' => 'Frontend Developer',
            'perusahaan' => 'PT XYZ Digital',
            'jenis_pekerjaan' => 'Fulltime',
            'tanggal_mulai' => '2025-05-01',
            'tanggal_berakhir' => '2025-06-01',
            'deskripsi' => 'Membangun antarmuka pengguna untuk aplikasi web modern menggunakan Tailwind dan Vue.js.'
        ]);

        Lowongan::create([
            'judul' => 'Backend Engineer',
            'perusahaan' => 'PT ABC Teknologi',
            'jenis_pekerjaan' => 'Kontrak',
            'tanggal_mulai' => '2025-04-20',
            'tanggal_berakhir' => '2025-05-30',
            'deskripsi' => 'Bertanggung jawab atas pengembangan API dan integrasi sistem dengan Laravel dan MySQL.'
        ]);
    }
}
