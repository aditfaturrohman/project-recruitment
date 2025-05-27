<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;

class PelamarDashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data lamaran dan lowongan tanpa filter user (karena belum login)
        $lamaran = Lamaran::all();
        $lowongans = Lowongan::all();

        // Kirim data ke view
        return view('pelamar.dashboard', compact('lamaran', 'lowongans'));
    }
}
