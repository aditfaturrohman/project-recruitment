<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function store(Request $request, $lowonganId)
    {
        $user = Auth::user();

        // Cek apakah user sudah pernah melamar lowongan ini
        $sudahMelamar = Lamaran::where('user_id', $user->id)
            ->where('lowongan_id', $lowonganId)
            ->exists();

        // if ($sudahMelamar) {
        //     return redirect()->back()->with('error', 'Kamu sudah melamar lowongan ini.');
        // }

        Lamaran::create([
            'user_id' => $user->id,
            'lowongan_id' => $lowonganId,
        ]);

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim!');

    }
}
