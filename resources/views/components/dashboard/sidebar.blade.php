<!-- Sidebar -->
<aside
    class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-200 shadow-md
           transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out
           z-30"
    id="sidebar">
    <div class="flex flex-col h-full">

        <!-- Logo / Brand -->
        <div class="flex items-center justify-center h-16 border-b border-gray-200 px-6">
            <span class="text-xl font-bold text-gray-700">Pertamini</span> <!-- Warna abu gelap -->
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-4 mt-4">

            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon rumah -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4H9v4a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2z" />
                </svg>
                Dashboard
            </a>

            <a href="{{ route('lowongan.index') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('lowongan.*') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon briefcase (lowongan) -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                    <path d="M16 3H8a2 2 0 0 0-2 2v2h12V5a2 2 0 0 0-2-2z" />
                </svg>
                Lowongan
            </a>

            <a href="{{ route('lamaran.index') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('lamaran.*') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon document (lamaran) -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                </svg>
                Lamaran Saya
            </a>

            <a href="{{ route('tes.index') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('tes.*') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon clipboard checklist (tes) -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 12l2 2 4-4" />
                    <path d="M12 20h9" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-1" />
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1" />
                </svg>
                Tes Online
            </a>

            {{-- <a href="{{ route('hasil.index') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('hasil.*') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon trophy (hasil seleksi) -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 21h8M12 17v4M5 11V7a7 7 0 0 1 14 0v4M3 11h18" />
                </svg>
                Hasil Seleksi
            </a>

            <a href="{{ route('profil.index') }}"
                class="flex items-center gap-4 px-6 py-3 rounded-lg hover:bg-blue-100
                text-gray-700 hover:text-blue-600 font-semibold transition
                {{ request()->routeIs('profil.*') ? 'bg-blue-100 text-blue-600' : '' }}">
                <!-- Ikon user (profil) -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="7" r="4" />
                    <path d="M5.5 21a6.5 6.5 0 0 1 13 0" />
                </svg>
                Profil Saya
            </a> --}}
        </nav>

        <!-- Logout -->
        {{-- <div class="px-6 py-4 border-t border-gray-200">
            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin mau logout?')">
                @csrf
                <button type="submit"
                    class="w-full text-left text-red-600 hover:text-red-800 font-semibold transition px-6 py-3 rounded-md">
                    Logout
                </button>
            </form>
        </div> --}}
    </div>
</aside>
