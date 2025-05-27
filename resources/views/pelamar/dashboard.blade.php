@extends('layouts.dashboard')

@section('content')
    <div class="max-w-9xl mx-auto px-6 pb-8">

        <h1 class="text-3xl font-bold text-blue-600 mb-6">Selamat datang</h1>

        <!-- Ringkasan singkat -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Lowongan Aktif</h2>
                <p class="text-gray-600">{{ $lowongans->count() }} posisi tersedia</p>
                <!-- TODO: buat route lowongan.index -->
                <a href="{{ route('lowongan.index') }}"
                    class="mt-4 inline-block text-blue-600 hover:underline text-sm font-medium">Lihat Semua Lowongan
                    &rarr;</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Lamaran Saya</h2>
                <p class="text-gray-600">{{ $lamaran->count() }} lamaran terkirim</p>
                <!-- TODO: buat route lamaran.index -->
                <a href="{{ route('lamaran.index') }}"
                    class="mt-4 inline-block text-blue-600 hover:underline text-sm font-medium">Cek Status Lamaran
                    &rarr;</a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">Tes Online</h2>
                <p class="text-gray-600">Tes yang sudah dan belum dikerjakan</p>
                <!-- TODO: buat route tes.index -->
                <a href="{{ route('tes.index') }}"
                    class="mt-4 inline-block text-blue-600 hover:underline text-sm font-medium">Ikuti Tes Sekarang
                    &rarr;</a>
            </div>

        </div>

        <!-- Daftar Lowongan Singkat -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Lowongan Terbaru</h2>

            @if ($lowongans->isEmpty())
                <p class="text-gray-600">Belum ada lowongan tersedia saat ini.</p>
            @else
                <div class="space-y-4">
                    @foreach ($lowongans->take(5) as $job)
                        <div
                            class="bg-white p-4 rounded-lg shadow hover:shadow-md transition flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-blue-600">{{ $job->judul }}</h3>
                                <p class="text-sm text-gray-600">{{ $job->perusahaan }} &middot; {{ $job->jenis_pekerjaan }}
                                </p>
                                <p class="text-xs text-gray-500">Periode:
                                    {{ \Carbon\Carbon::parse($job->tanggal_mulai)->format('d M Y') }} -
                                    {{ \Carbon\Carbon::parse($job->tanggal_berakhir)->format('d M Y') }}</p>
                            </div>
                            <!-- TODO: buat route lowongan.show -->
                            <a href="{{ route('lowongan.show', $job->id) }}"
                                class="text-blue-600 font-semibold hover:underline text-sm">Detail</a>
                        </div>
                    @endforeach
                </div>
                <!-- TODO: buat route lowongan.index -->
                <a href="{{ route('lowongan.index') }}"
                    class="mt-6 inline-block text-blue-600 hover:underline font-semibold">Lihat Semua Lowongan &rarr;</a>
            @endif
        </section>

        <!-- Status Lamaran Terbaru -->
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Status Lamaran Terbaru</h2>

            @if ($lamaran->isEmpty())
                <p class="text-gray-600">Kamu belum mengirimkan lamaran apapun.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th class="py-3 px-6 text-left">Posisi</th>
                                <th class="py-3 px-6 text-left">Perusahaan</th>
                                <th class="py-3 px-6 text-left">Tanggal Lamaran</th>
                                <th class="py-3 px-6 text-left">Status</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lamaran->take(5) as $item)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-6">{{ $item->lowongan->judul ?? '-' }}</td>
                                    <td class="py-3 px-6">{{ $item->lowongan->perusahaan ?? '-' }}</td>
                                    <td class="py-3 px-6">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                    </td>
                                    <td class="py-3 px-6">
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
                                    <!-- TODO: buat route lamaran.show -->
                                    <td class="py-3 px-6 text-center">
                                        <a href="{{ route('lamaran.show', $item->id) }}"
                                            class="text-blue-600 hover:underline text-sm">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- TODO: buat route lamaran.index -->
                    <a href="{{ route('lamaran.index') }}"
                        class="mt-4 inline-block text-blue-600 hover:underline font-semibold">Lihat Semua Lamaran &rarr;</a>
                </div>
            @endif
        </section>

    </div>
@endsection
