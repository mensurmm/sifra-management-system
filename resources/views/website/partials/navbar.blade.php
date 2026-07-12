<nav class="w-full bg-white border-b border-slate-100 h-20 px-12 flex items-center justify-between sticky top-0 z-50">
    
    <!-- ==========================================
         🎨 PREMIUM BRAND IDENTITY LOGO MARK
         ========================================== -->
    <a href="{{ route('public.home') }}" class="flex items-center h-14 focus:outline-none select-none transition-transform duration-200 hover:scale-[1.02]">
        <!-- 💡 Loads your gorgeous custom-designed logo graphic directly -->
        <img src="{{ asset('assets/images/sifra-logo.png') }}" 
             alt="SIFRA Library & Coffee Logo" 
             class="h-full w-auto object-contain">
    </a>

    <!-- =========================================================================
     🧭 FIXED CENTER LINKS: Points strictly to public pages, never dashboard!
     ========================================================================= -->
<!-- Center Navigation Links Menu -->
<div class="hidden lg:flex items-center gap-8 text-[12px] font-bold uppercase tracking-widest text-slate-600">
    <a href="{{ route('public.home') }}" class="{{ Route::is('public.home') ? 'text-indigo-600' : 'hover:text-slate-900' }} transition">Home</a>
    <a href="{{ route('public.catalog') }}" class="{{ Route::is('public.catalog') ? 'text-indigo-600' : 'hover:text-slate-900' }} transition">Books</a>
    <a href="{{ route('public.cafe') }}" class="{{ Route::is('public.cafe') ? 'text-indigo-600' : 'hover:text-slate-900' }} transition">Café</a>
    <a href="{{ route('public.events') }}" class="{{ Route::is('public.events') ? 'text-indigo-600' : 'hover:text-slate-900' }} transition">Events</a>
    <a href="{{ route('public.services') }}" class="hover:text-slate-900 transition">Services</a>
    <a href="{{ route('public.about') }}" class="hover:text-slate-900 transition">About</a>
    <a href="{{ route('public.news') }}" class="hover:text-slate-900 transition">News</a>
    <a href="{{ route('public.contact') }}" class="hover:text-slate-900 transition">Contact</a>
</div>



    <!-- Right Control Panel Button Layout Group -->
    <div class="flex items-center gap-6">
        <button type="button" class="text-slate-400 hover:text-slate-900 transition-colors focus:outline-none cursor-pointer">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.602 10.602z" />
            </svg>
        </button>

        <a href="{{ route('login') }}" class="border border-slate-200 text-slate-700 text-[11px] font-bold uppercase tracking-widest px-4 py-2.5 rounded-lg hover:bg-slate-50 transition-colors">
            Member Login
        </a>
        <a href="{{ route('public.join') }}" class="bg-[#1D4ED8] text-white text-[11px] font-bold uppercase tracking-widest px-5 py-2.5 rounded-lg hover:bg-blue-800 shadow-sm transition-all">
            Join Membership
        </a>
    </div>
</nav>
