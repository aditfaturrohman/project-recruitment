@extends('layouts.dashboard')

@section('content')
    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="max-w-3xl mx-auto bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold text-blue-600 mb-2">{{ $lowongan->judul }}</h2>
        <p class="text-sm text-gray-500 mb-1">{{ $lowongan->perusahaan }} &middot; {{ $lowongan->jenis_pekerjaan }}</p>
        <p class="text-sm text-gray-600 mb-4">Periode: {{ $lowongan->tanggal_mulai }} – {{ $lowongan->tanggal_berakhir }}</p>

        <div class="text-gray-700 leading-relaxed whitespace-pre-line">
            {{ $lowongan->deskripsi }}
        </div>

        @if (auth()->check())
            <!-- Tombol Pemicu Modal -->
            <button type="button" onclick="openModal()"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow text-sm mt-6">
                Lamar Sekarang
            </button>

            <!-- Modal -->
            <div id="lamarModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full text-center">
                    <h2 class="text-lg font-semibold mb-4">Konfirmasi Lamaran</h2>
                    <p class="text-gray-700 mb-6">Apakah Anda yakin ingin melamar posisi ini?</p>
                    <form id="lamarForm" action="{{ route('lamaran.store', $lowongan->id) }}" method="POST">
                        @csrf
                        <div class="flex justify-center gap-4">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Yakin</button>
                            <button type="button" onclick="closeModal()"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <p class="text-red-500 mt-6 text-sm">Silakan login terlebih dahulu untuk melamar.</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('dashboard') }}"
                class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm px-4 py-2 rounded transition">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
@endsection

<script>
    function openModal() {
        document.getElementById('lamarModal').classList.remove('hidden');
        document.getElementById('lamarModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('lamarModal').classList.remove('flex');
        document.getElementById('lamarModal').classList.add('hidden');
    }
</script>
