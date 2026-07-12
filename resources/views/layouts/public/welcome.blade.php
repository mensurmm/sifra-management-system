@extends('layouts.public')

@section('content')
<!-- ==========================================
     🖼️ SECTION 1: HERO CONTAINER & LIVE STATS
     ========================================== -->
<div class="relative bg-white border-b border-slate-100 overflow-hidden">
    <div class="absolute inset-0 bg-radial-gradient from-indigo-50/20 via-transparent to-transparent opacity-60 pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-8 py-20 lg:py-24 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
        <!-- Hero Text Block -->
        <div class="lg:col-span-7 space-y-6 text-left">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-none">
                Where Knowledge <br><span class="text-indigo-600">Meets Coffee</span>
            </h1>
            <p class="text-sm font-medium text-slate-500 max-w-xl leading-relaxed">
                Sifra is more than a library. It's a community hub where ideas grow, connections are made, and every visit inspires something new.
            </p>
            <div class="flex items-center gap-4 pt-2">
                <a href="/explore-catalog" class="bg-indigo-600 text-white px-6 py-3.5 rounded-xl text-xs font-bold shadow-sm hover:bg-indigo-700 transition duration-150">Browse Books</a>
                <a href="/cafe" class="bg-slate-50 text-slate-700 border border-slate-200 px-6 py-3.5 rounded-xl text-xs font-bold hover:bg-slate-100 transition duration-150">Visit Our Café</a>
            </div>
        </div>

        <!-- Mockup Metric Summary Stat Boxes Row -->
        <div class="lg:col-span-5 grid grid-cols-2 gap-4">
            <div class="bg-slate-50/50 border border-slate-100 rounded-2xl p-5">
                <span class="block text-2xl font-black text-slate-900 tracking-tight">12,458+</span>
                <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Total Books</span>
            </div>
            <div class="bg-slate-50/50 border border-slate-100 rounded-2xl p-5">
                <span class="block text-2xl font-black text-slate-900 tracking-tight">3,215+</span>
                <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Active Members</span>
            </div>
            <div class="bg-slate-50/50 border border-slate-100 rounded-2xl p-5">
                <span class="block text-2xl font-black text-slate-900 tracking-tight">8,742+</span>
                <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Available Books</span>
            </div>
            <div class="bg-slate-50/50 border border-slate-100 rounded-2xl p-5">
                <span class="block text-2xl font-black text-slate-900 tracking-tight">246</span>
                <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Café Orders Today</span>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     📚 SECTION 2: CURATED ROW FEATURES GRID
     ========================================== -->
<div class="max-w-7xl mx-auto px-8 py-16 grid grid-cols-1 lg:grid-cols-12 gap-12">
    <!-- Left Hand: Book Catalog Showcases -->
    <div class="lg:col-span-8 space-y-6">
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <h2 class="text-lg font-black text-slate-900">Featured Books</h2>
            <a href="/explore-catalog" class="text-xs font-bold text-indigo-600 hover:underline">View All Books &rarr;</a>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <!-- Book Card 1 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 space-y-3 flex flex-col justify-between shadow-xs">
                <div class="h-44 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400 text-xs text-center p-2 shadow-inner">
                    Atomic Habits
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-800 truncate">Atomic Habits</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">James Clear</p>
                </div>
            </div>
            <!-- Book Card 2 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 space-y-3 flex flex-col justify-between shadow-xs">
                <div class="h-44 w-full bg-slate-800 border border-slate-700 rounded-xl flex items-center justify-center font-bold text-slate-100 text-xs text-center p-2 shadow-inner">
                    The Midnight Library
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-800 truncate">Midnight Library</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">Matt Haig</p>
                </div>
            </div>
            <!-- Book Card 3 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 space-y-3 flex flex-col justify-between shadow-xs">
                <div class="h-44 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400 text-xs text-center p-2 shadow-inner">
                    Thinking, Fast & Slow
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-800 truncate">Thinking Fast & Slow</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">Daniel Kahneman</p>
                </div>
            </div>
            <!-- Book Card 4 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 space-y-3 flex flex-col justify-between shadow-xs">
                <div class="h-44 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400 text-xs text-center p-2 shadow-inner">
                    The Psychology of Money
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-800 truncate">Psychology of Money</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">Morgan Housel</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Hand: Cafe Specials Menu Row -->
    <div class="lg:col-span-4 space-y-6">
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <h2 class="text-lg font-black text-slate-900">Today's Café Specials</h2>
        </div>
        
        <div class="space-y-4">
            <!-- Product Item Row 1 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 flex items-center gap-4 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 shrink-0 flex items-center justify-center text-lg">☕</div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-xs font-bold text-slate-800 truncate">Cappuccino Premium</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">Perfect match with a good book.</p>
                </div>
                <span class="text-xs font-black text-indigo-600 bg-indigo-50 border border-indigo-100 px-2.5 py-1 rounded-lg">80 ETB</span>
            </div>
            <!-- Product Item Row 2 -->
            <div class="bg-white border border-slate-200/50 rounded-2xl p-4 flex items-center gap-4 shadow-xs">
                <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 shrink-0 flex items-center justify-center text-lg">🥪</div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-xs font-bold text-slate-800 truncate">Chicken Sandwich</h4>
                    <p class="text-[10px] text-slate-400 mt-0.5">Fresh & crispy house specialty.</p>
                </div>
                <span class="text-xs font-black text-indigo-600 bg-indigo-50 border border-indigo-100 px-2.5 py-1 rounded-lg">120 ETB</span>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     📍 SECTION 3: VISITATION DIRECTION MAPS & FORMS
     ========================================== -->
<div class="bg-white border-t border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-8 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Physical Space Details -->
        <div class="space-y-6">
            <div>
                <h3 class="text-xl font-black text-slate-900">Visit Our Space</h3>
                <p class="text-xs font-medium text-slate-400 mt-1">We are located in the vibrant heart of Addis Ababa, Ethiopia.</p>
            </div>
            <div class="space-y-3 text-xs font-medium text-slate-600">
                <p class="flex items-center gap-2">📍 Bole Road, Behind Bole Plaza, Addis Ababa, Ethiopia</p>
                <p class="flex items-center gap-2">📞 +251 911 123 456</p>
                <p class="flex items-center gap-2">✉️ info@sifra.et</p>
            </div>
            <!-- Empty Map Canvas Box -->
            <div class="h-64 w-full bg-slate-50 border border-slate-200 rounded-2xl flex items-center justify-center text-xs font-bold text-slate-400">
                Map Interface View Render Placeholder Area
            </div>
        </div>

        <!-- Form Module Block -->
        <form action="#" method="POST" class="bg-slate-50/50 border border-slate-100 rounded-3xl p-8 space-y-4">
            <div>
                <h3 class="text-lg font-black text-slate-900">Get In Touch</h3>
                <p class="text-xs font-medium text-slate-400 mt-1">Have a request or looking to partner? Drop us a prompt message line.</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                
@endsection