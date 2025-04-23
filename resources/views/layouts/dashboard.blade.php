<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Dashboard Kandidat' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-[Poppins] text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
        <div class="font-bold text-xl text-blue-600">PT XYZ</div>
        <div class="flex items-center gap-4">
            @auth
                <span class="text-sm">👤 {{ Auth::user()->name }}</span>
            @endauth

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-red-500 hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    {{-- Konten --}}
    <main class="max-w-7xl mx-auto mt-8 px-4">
        @yield('content')
    </main>

</body>

</html>
