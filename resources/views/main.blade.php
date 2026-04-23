<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang App - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex">
        @include('partials.sidebar')

        <main class="flex-1 min-h-screen p-8 sm:ml-64">
            @yield('content')
        </main>
    </div>
</body>
</html>