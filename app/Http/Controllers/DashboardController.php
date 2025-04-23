<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class DashboardController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::all();

        return view('dashboard.index', compact('lowongans'));
    }
}
