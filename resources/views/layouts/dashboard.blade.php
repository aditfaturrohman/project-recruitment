{{-- resources/views/layouts/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kandidat - Sistem Rekrutmen</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans antialiased flex">

    <x-dashboard.sidebar activeMenu="{{ request()->routeIs('pelamar.dashboard') ? 'dashboard' : '' }}" />

    <div class="flex-1 flex flex-col ml-64"> {{-- Margin kiri sesuai lebar sidebar --}}
        <x-dashboard.navbar>
            {{-- Judul halaman bisa ditaruh di slot navbar --}}
            @yield('page_title')
        </x-dashboard.navbar>

        <main class="flex-grow p-6 mt-5"> {{-- Margin atas sesuai tinggi navbar --}}
            @yield('content')
        </main>

        <x-dashboard.footer />
    </div>
</body>

</html>
