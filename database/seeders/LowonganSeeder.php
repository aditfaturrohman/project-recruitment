<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lowongan;

class LowonganSeeder extends Seeder
{
    public function run()
    {
        Lowongan::create([
            'judul' => 'Frontend Developer',
            'perusahaan' => 'PT XYZ Digital',
            'jenis_pekerjaan' => 'Fulltime',
            'tanggal_mulai' => '2025-05-01',
            'tanggal_berakhir' => '2025-06-01',
            'deskripsi' => 'Membangun antarmuka pengguna untuk aplikasi web modern.',
        ]);
        Lowongan::create([
            'judul' => 'Backend Developer',
            'perusahaan' => 'PT ABC Teknologi',
            'jenis_pekerjaan' => 'Part-time',
            'tanggal_mulai' => '2025-05-15',
            'tanggal_berakhir' => '2025-06-15',
            'deskripsi' => 'Mengelola server dan API aplikasi backend.',
        ]);
        // Tambah lowongan lain sesuai kebutuhan
    }
}
