<div class="relative bg-slate-950 text-white min-h-[540px] flex items-center border-b border-slate-900 overflow-hidden">
    <!-- 💡 BACKDROP IMAGE & BLUR MASK LAYER -->
    <div class="absolute inset-0 z-0">
        <!-- Clean linear transition overlay to isolate background graphic details perfectly -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent z-10"></div>
        <div class="absolute inset-0 bg-slate-950/40 z-10"></div>
        <img src="https://unsplash.com" 
             alt="SIFRA Premium Cozy Library Lounge" 
             class="w-full h-full object-cover object-center transform scale-105 filter brightness-50 contrast-125">
    </div>

    <!-- MAIN GRID FLEX LAYOUT WRAPPER CONTROLLER -->
    <div class="max-w-7xl mx-auto w-full px-12 py-16 lg:py-20 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative z-20">
        
        <!-- LEFT SIDE: MARKETING HERO TEXT TYPOGRAPHY -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <h1 class="text-4xl sm:text-5xl lg:text-[54px] font-extrabold text-white tracking-tight leading-[1.1]">
                Where Knowledge <br>Meets Coffee
            </h1>
            <p class="text-slate-400 font-medium text-xs sm:text-sm max-w-xl leading-relaxed">
                Sifra is more than a library. It's a community hub where ideas grow, connections are made, and every visit inspires something new.
            </p>
            
            <!-- BUTTON INTERACTION SLOT ARCHITECTURE -->
            <div class="flex items-center gap-4 pt-2">
                <a href="{{ route('public.catalog') }}" class="bg-[#2563EB] text-white text-[11px] font-bold uppercase tracking-widest px-6 py-3.5 rounded-lg shadow-md hover:bg-blue-700 transition">
                    Browse Books
                </a>
                <a href="/cafe" class="bg-transparent border border-white/30 text-white text-[11px] font-bold uppercase tracking-widest px-6 py-3.5 rounded-lg hover:bg-white/10 transition">
                    Visit Our Café
                </a>
            </div>

            <!-- 👥 THE CIRCLE AVATAR MEMBER CLUSTER ROW OVERLAY -->
            <div class="flex items-center gap-3 pt-6 border-t border-white/10 max-w-md">
                <div class="flex -space-x-2.5 overflow-hidden">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-slate-950 object-cover" src="https://unsplash.com" alt="Member User 1">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-slate-950 object-cover" src="https://unsplash.com" alt="Member User 2">
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-slate-950 object-cover" src="https://unsplash.com" alt="Member User 3">
                </div>
                <div class="flex flex-col text-left">
                    <span class="text-xs font-bold text-white leading-none">Join 3,200+ members</span>
                    <span class="text-[10px] text-slate-400 mt-1 font-medium">Be part of our growing community</span>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE: THE WHITEOUT REUSABLE STATISTICS ELEMENT PANEL GRID -->
        <div class="lg:col-span-5 w-full">
            @include('website.sections.statistics.statistics')
        </div>

    </div>
</div>

<!-- ==========================================
     🏷️ SUB-HERO SLUT LAYER: THE SIX HIGHLIGHT ICON BADGES BANNER
     ========================================== -->
<div class="w-full bg-white border-b border-slate-100 px-12 py-6">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-6 gap-6 text-center">
        <!-- Badge element slot 1 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">📚</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Rich Collection</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Books for every mind</span></div>
        </div>
        <!-- Badge element slot 2 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">🪑</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Quiet Spaces</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Study, work, and focus</span></div>
        </div>
        <!-- Badge element slot 3 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">⚡</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Fast Wi-Fi</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Stay connected always</span></div>
        </div>
        <!-- Badge element slot 4 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">☕</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Café & Snacks</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Fuel your creativity</span></div>
        </div>
        <!-- Badge element slot 5 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">🎓</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Events & Workshops</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Learn and connect</span></div>
        </div>
        <!-- Badge element slot 6 -->
        <div class="flex items-center gap-3 text-left md:justify-center">
            <span class="text-xl">🤝</span>
            <div class="flex flex-col"><span class="text-[11px] font-bold text-slate-800 leading-none">Open to All</span><span class="text-[9px] text-slate-400 font-medium mt-0.5">Everyone is welcome</span></div>
        </div>
    </div>
</div>
