<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        // TODO: Implementasi nanti untuk menampilkan tes online yang harus dikerjakan pelamar
        return view('pelamar.tes.index');
    }
}
