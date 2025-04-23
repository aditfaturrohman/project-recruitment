<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('lowongan.show', compact('lowongan'));
    }
}
