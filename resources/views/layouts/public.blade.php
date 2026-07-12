<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIFRA — Where Knowledge Meets Coffee</title>
    <!-- Premium Geometric Typography Engine Load -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full flex flex-col text-slate-800 antialiased bg-[#F8FAFC]">

    <!-- Elegant Light Content Header Navigation Menu Navbar -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 px-8 py-4 flex items-center justify-between shadow-xs">
        <div class="flex items-center gap-2">
            <span class="text-xl font-extrabold tracking-wider text-slate-900">SIFRA</span>
        </div>
        
        <!-- Navigation Menu Center Array Links -->
        <div class="hidden md:flex items-center gap-8 text-xs font-bold uppercase tracking-widest text-slate-600">
            <a href="/" class="text-indigo-600 transition duration-150">Home</a>
            <a href="/explore-catalog" class="hover:text-indigo-600 transition duration-150">Books</a>
            <a href="/cafe" class="hover:text-indigo-600 transition duration-150">Café</a>
            <a href="/events" class="hover:text-indigo-600 transition duration-150">Events</a>
            <a href="/about" class="hover:text-indigo-600 transition duration-150">About</a>
            <a href="/contact" class="hover:text-indigo-600 transition duration-150">Contact</a>
        </div>

        <!-- Right Side Client Portal Action Set -->
        <div class="flex items-center gap-5">
            <a href="/login" class="text-xs font-bold uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition duration-150">Member Login</a>
            <a href="/become-member" class="bg-[#4f46e5] text-white px-5 py-2.5 rounded-xl text-xs font-bold hover:bg-indigo-700 shadow-xs transition duration-150">Join Membership</a>
        </div>
    </nav>

    <!-- Content Slot Wrapper -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Professional Production Scale Footer -->
    <footer class="bg-[#0F172A] text-slate-400 py-16 px-8 border-t border-slate-800 text-xs">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="space-y-4">
                <span class="text-lg font-black text-white tracking-wider">SIFRA</span>
                <p class="text-slate-400 leading-relaxed text-[11px]">Empowering minds, building community, one book and one cup of coffee at a time.</p>
            </div>
            <div>
                <h4 class="font-bold text-white uppercase tracking-wider mb-4">Quick Links</h4>
                <div class="space-y-2.5 flex flex-col font-medium"><a href="/">Home</a><a href="/explore-catalog">Books</a><a href="/cafe">Café</a></div>
            </div>
            <div>
                <h4 class="font-bold text-white uppercase tracking-wider mb-4">Useful Links</h4>
                <div class="space-y-2.5 flex flex-col font-medium"><a href="/become-member">Membership</a><a href="/support">Support</a></div>
            </div>
            <div>
                <h4 class="font-bold text-white uppercase tracking-wider mb-4">Opening Hours</h4>
                <p class="font-medium">Mon - Fri: 8:00 AM - 9:00 PM</p>
                <p class="font-medium">Saturday: 9:00 AM - 9:00 PM</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800/60 mt-10 pt-6 text-center text-slate-500 font-medium">
            &copy; {{ date('Y') }} SIFRA Library & Café. All rights reserved.
        </div>
    </footer>

</body>
</html>
