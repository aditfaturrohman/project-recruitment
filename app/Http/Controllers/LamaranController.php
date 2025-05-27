<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $lamaran = Lamaran::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('pelamar.lamaran.index', compact('lamaran'));
    }

    public function show($id)
    {
        $lamaran = Lamaran::findOrFail($id);
        return view('pelamar.lamaran.show', compact('lamaran'));
    }
}
