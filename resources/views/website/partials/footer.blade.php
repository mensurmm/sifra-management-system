<footer class="bg-[#0F172A] text-slate-400 py-16 px-8 border-t border-slate-800 text-xs">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
        <div class="space-y-4">
            <span class="text-lg font-black text-white tracking-wider">SIFRA</span>
            <p class="text-slate-400 leading-relaxed text-[11px]">Empowering minds, building community, one book and one cup of coffee at a time.</p>
        </div>
        <div>
            <h4 class="font-bold text-white uppercase tracking-wider mb-4">Quick Links</h4>
            <div class="space-y-2.5 flex flex-col font-medium">
                <a href="{{ route('public.home') }}">Home</a>
                <a href="{{ route('public.catalog') }}">Books</a>
            </div>
        </div>
        <div>
            <h4 class="font-bold text-white uppercase tracking-wider mb-4">Useful Links</h4>
            <div class="space-y-2.5 flex flex-col font-medium">
                <a href="{{ route('public.join') }}">Membership</a>
                <a href="/privacy-policy">Privacy Policy</a>
            </div>
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
