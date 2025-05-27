<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navbar dengan Dropdown Notifikasi Stylish</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Scrollbar minimalis */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(107, 114, 128, 0.5);
            /* gray-500 semi transparan */
            border-radius: 3px;
        }
    </style>
</head>

<body class="bg-gray-100">

    <nav class="bg-white shadow-md px-6 py-3 h-16 flex items-center justify-between sticky top-0 z-50">
        <a href="#" class="text-xl font-bold text-gray-700 hover:text-blue-600 transition-colors duration-300">
            Dashboard
        </a>

        <div class="flex items-center space-x-4">

            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" aria-label="Notification" title="Notifikasi"
                    class="relative focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-gray-700 hover:text-blue-600 transition-colors duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute right-0 mt-5 w-72 bg-white backdrop-blur-sm bg-opacity-90 border border-gray-200 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 z-50"
                    style="display: none;">

                    <div class="p-4 text-gray-800 font-semibold border-b select-none">
                        Notifikasi
                    </div>
                    <ul class="max-h-64 overflow-y-auto custom-scrollbar">
                        <li
                            class="px-5 py-3 hover:bg-blue-50 cursor-pointer border-b border-gray-100 last:border-none rounded-md transition-colors duration-150">
                            <p class="text-sm font-medium text-gray-900">Pesan baru dari Admin</p>
                            <span class="text-xs text-gray-500">5 menit yang lalu</span>
                        </li>
                        <li
                            class="px-5 py-3 hover:bg-blue-50 cursor-pointer border-b border-gray-100 last:border-none rounded-md transition-colors duration-150">
                            <p class="text-sm font-medium text-gray-900">Lowongan kerja terbaru sudah tersedia</p>
                            <span class="text-xs text-gray-500">1 jam yang lalu</span>
                        </li>
                        <li
                            class="px-5 py-3 hover:bg-blue-50 cursor-pointer border-b border-gray-100 last:border-none rounded-md transition-colors duration-150">
                            <p class="text-sm font-medium text-gray-900">Tes psikologi dijadwalkan ulang</p>
                            <span class="text-xs text-gray-500">Kemarin</span>
                        </li>
                    </ul>
                    <div class="p-3 text-center border-t border-gray-100">
                        <a href="#" class="text-blue-600 hover:underline font-medium text-sm select-none">Lihat
                            semua
                            notifikasi</a>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" aria-label="Profil" title="Profil"
                    class="focus:outline-none rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-gray-700 hover:text-blue-600 transition-colors duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>

                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute right-0 mt-5 w-48 bg-white backdrop-blur-sm bg-opacity-90 border border-gray-200 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 z-50"
                    style="display: none;">

                    <div class="p-4 text-gray-800 font-semibold border-b select-none">
                        Akun Saya
                    </div>
                    <ul class="py-1">
                        <li
                            class="px-4 py-2 hover:bg-blue-50 cursor-pointer text-gray-700 hover:text-blue-700 transition-colors duration-150">
                            <a href="#" class="block text-sm">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 0 12 20.003C11.163 20.003 10.327 20.003 9.49 20.003a17.933 17.933 0 0 0-4.999 .115Z" />
                                    </svg>
                                    Profil
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-4 py-2 hover:bg-blue-50 cursor-pointer text-gray-700 hover:text-blue-700 transition-colors duration-150">
                            <a href="#" class="block text-sm">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.17.992c.382.229.759.479 1.133.749l.79-.476c.482-.29.988-.126 1.297.464l.974 1.704c.212.372.037.818-.415 1.036l-.791.477c.07.493.097 1 .097 1.554 0 .556-.027 1.063-.097 1.556l.791.478c.452.218.627.664.415 1.036l-.974 1.704c-.309.59-.815.754-1.297.464l-.79-.476a8.966 8.966 0 0 1-1.133.749l-.17.992c-.09.542-.56.94-1.11.94h-1.093c-.55 0-1.02-.398-1.11-.94l-.17-.992A8.966 8.966 0 0 1 9.07 18.42l-.79.476c-.482.29-.988.126-1.297-.464l-.974-1.704c-.212-.372-.037-.818.415-1.036l.79-.478a8.967 8.967 0 0 1-.097-1.555c0-.556.027-1.062.097-1.555l-.79-.478c-.452-.218-.627-.664-.415-1.036l.974-1.704c.309-.59.815-.754 1.297-.464l.79.476c.374-.27.751-.52 1.133-.749l.17-.992Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Pengaturan
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-4 py-2 text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors duration-150 border-t border-gray-100 mt-1 cursor-pointer">
                            <a href="#" class="block text-sm">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                    </svg>
                                    Keluar
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-3 text-center border-t border-gray-100">
                        <a href="#" class="text-blue-600 hover:underline font-medium text-sm select-none">Kelola
                            Akun</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

</body>

</html>
