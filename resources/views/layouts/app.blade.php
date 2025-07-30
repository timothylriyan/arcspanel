<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARCS - PT Anugrah Rekatama Cipta Solusi</title>

    {{-- Link ke Font Awesome untuk Ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Memanggil file CSS dan JS yang sudah di-compile oleh Vite --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    
    {{-- Memanggil file CSS kustom Anda --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>