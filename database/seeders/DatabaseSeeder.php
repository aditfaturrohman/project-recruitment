<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    // User Seeder dulu supaya ada user id 1
    \App\Models\User::factory()->create([
        'id' => 1,
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password123'),
    ]);

    // Setelah itu baru seeder Lowongan dan Lamaran
    $this->call([
        LowonganSeeder::class,
        LamaranSeeder::class,
    ]);
}

}