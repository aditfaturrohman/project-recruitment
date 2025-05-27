<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::where('tanggal_berakhir', '>=', now())->get();
        return view('pelamar.lowongan.index', compact('lowongans'));
    }

    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('pelamar.lowongan.show', compact('lowongan'));
    }
}
