@extends('layouts.dashboard')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-semibold mb-6">Lamaran Saya</h2>

        @if ($lamaran->isEmpty())
            <p class="text-gray-600">Kamu belum mengirimkan lamaran apapun.</p>
        @else
            <ul class="space-y-4">
                @foreach ($lamaran as $item)
                    <li class="bg-white p-4 rounded shadow hover:shadow-lg transition flex justify-between items-center">
                        <div>
                            <p class="font-semibold">{{ $item->lowongan->judul ?? '-' }}</p>
                            <p class="text-sm text-gray-500">{{ $item->lowongan->perusahaan ?? '-' }}</p>
                            <p class="text-xs text-gray-400">Dikirim: {{ $item->created_at->format('d M Y') }}</p>
                        </div>
                        <a href="{{ route('lamaran.show', $item->id) }}"
                            class="text-blue-600 hover:underline text-sm">Detail</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
