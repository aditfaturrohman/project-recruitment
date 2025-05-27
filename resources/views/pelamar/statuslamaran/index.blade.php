@extends('layouts.dashboard')

@section('content')
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-semibold mb-6">Status Lamaran</h2>

        @if ($lamaran->isEmpty())
            <p class="text-gray-600">Belum ada data status lamaran.</p>
        @else
            <table class="min-w-full bg-white rounded shadow">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-2 px-4 text-left">Posisi</th>
                        <th class="py-2 px-4 text-left">Perusahaan</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lamaran as $item)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $item->lowongan->judul ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $item->lowongan->perusahaan ?? '-' }}</td>
                            <td class="py-2 px-4">
                                @php
                                    $statusColors = [
                                        'diproses' => 'bg-yellow-200 text-yellow-800',
                                        'diterima' => 'bg-green-200 text-green-800',
                                        'ditolak' => 'bg-red-200 text-red-800',
                                    ];
                                @endphp
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold {{ $statusColors[strtolower($item->status)] ?? 'bg-gray-200 text-gray-800' }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="py-2 px-4">{{ $item->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
