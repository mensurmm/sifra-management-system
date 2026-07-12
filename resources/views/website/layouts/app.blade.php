<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIFRA — Where Knowledge Meets Coffee</title>
    
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full bg-[#FAFBFC] text-slate-900 antialiased flex flex-col">

    <!-- 🌐 Dynamic Main Content Block View Target Layer -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- 📜 Global Footer Module Component Slot -->
    @include('website.partials.footer')

</body>
</html>
