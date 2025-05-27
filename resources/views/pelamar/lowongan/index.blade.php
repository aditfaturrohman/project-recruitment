@extends('layouts.dashboard')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-semibold mb-6">Lowongan Tersedia</h2>

        @if ($lowongans->isEmpty())
            <p class="text-gray-600">Belum ada lowongan tersedia saat ini.</p>
        @else
            <ul class="space-y-4">
                @foreach ($lowongans as $job)
                    <li class="bg-white p-4 rounded shadow hover:shadow-lg transition flex justify-between items-center">
                        <div>
                            <p class="font-semibold text-blue-600">{{ $job->judul }}</p>
                            <p class="text-sm text-gray-500">{{ $job->perusahaan }}</p>
                            <p class="text-xs text-gray-400">Periode: {{ $job->tanggal_mulai->format('d M Y') }} -
                                {{ $job->tanggal_berakhir->format('d M Y') }}</p>
                        </div>
                        <a href="{{ route('lowongan.show', $job->id) }}"
                            class="text-blue-600 hover:underline text-sm">Detail</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
