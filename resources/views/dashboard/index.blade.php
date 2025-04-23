@extends('layouts.dashboard')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    <h1 class="text-2xl font-bold mb-6">Dashboard Kandidat</h1>

    {{-- konten lowongan, dll --}}
    <div class="bg-white p-6 rounded-lg shadow mb-8">
        <h3 class="text-lg font-semibold mb-4">Lowongan Tersedia</h3>
        @if ($lowongans->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($lowongans as $job)
                    <div class="border p-4 rounded-lg shadow hover:shadow-md transition">
                        <h4 class="text-blue-600 font-bold text-lg">{{ $job->judul }}</h4>
                        <p class="text-sm text-gray-500 mb-1">{{ $job->perusahaan }} &middot; {{ $job->jenis_pekerjaan }}</p>
                        <p class="text-sm text-gray-600 mb-1">Periode: {{ $job->tanggal_mulai }} -
                            {{ $job->tanggal_berakhir }}</p>
                        <p class="text-sm text-gray-700 mt-2">{{ Str::limit($job->deskripsi, 100) }}</p>
                        <a href="{{ route('lowongan.show', $job->id) }}"
                            class="inline-block mt-4 text-blue-600 text-sm font-semibold hover:underline">
                            Lihat Detail
                        </a>

                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">Belum ada lowongan yang tersedia saat ini.</p>
        @endif
    </div>
@endsection
