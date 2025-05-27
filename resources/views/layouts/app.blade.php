<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/tailadmin.css', 'resources/js/tailadmin.js'])
</head>

<body class="bg-gray-100">
    <div id="app">
        <div class="flex">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Content -->
            <div class="flex-1">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
