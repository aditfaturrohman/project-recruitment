<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lamaran;

class LamaranSeeder extends Seeder
{
    public function run()
    {
        Lamaran::create([
            'user_id' => 1, // pastikan ada user id 1
            'lowongan_id' => 1,
            'status' => 'diproses',
        ]);
        // Tambah lamaran lain sesuai kebutuhan
    }
}
