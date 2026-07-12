<div class="max-w-7xl mx-auto px-12 py-16 space-y-8">
    <div class="flex items-center justify-between border-b border-slate-200/60 pb-4">
        <div>
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Featured Publications</h2>
            <p class="text-xs font-medium text-slate-400 mt-0.5">Explore curated, premium catalog arrivals recommended by our space curators.</p>
        </div>
        <a href="{{ route('public.catalog') }}" class="text-[12px] font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
            View All Books &rarr;
        </a>
    </div>
    
    <!-- Fine-Tuned Responsive Product Card Grid Grid Slot Layout -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Book Card Unit Block 1 -->
        <div class="group bg-white border border-slate-200/60 rounded-2xl p-4 flex flex-col justify-between shadow-xs hover:shadow-md hover:border-slate-300 transition-all duration-200">
            <div class="space-y-4">
                <div class="h-48 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-300 text-xs text-center p-4 transition-colors group-hover:bg-slate-100/50 shadow-inner">
                    <!-- Custom SVG Icon representing premium item book layout context -->
                    <svg class="w-8 h-8 text-slate-300 group-hover:text-indigo-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                </div>
                <div class="px-1">
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-indigo-600 transition-colors truncate">Atomic Habits</h4>
                    <p class="text-xs font-medium text-slate-400 mt-1">James Clear</p>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-50 flex items-center justify-between px-1">
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 border border-emerald-100/50">In Stock</span>
                <span class="text-xs font-bold text-slate-400">ID: #01</span>
            </div>
        </div>

        <!-- Book Card Unit Block 2 -->
        <div class="group bg-white border border-slate-200/60 rounded-2xl p-4 flex flex-col justify-between shadow-xs hover:shadow-md hover:border-slate-300 transition-all duration-200">
            <div class="space-y-4">
                <div class="h-48 w-full bg-slate-900 border border-slate-800 rounded-xl flex items-center justify-center font-bold text-slate-100 text-xs text-center p-4 shadow-lg">
                    The Midnight Library
                </div>
                <div class="px-1">
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-indigo-600 transition-colors truncate">The Midnight Library</h4>
                    <p class="text-xs font-medium text-slate-400 mt-1">Matt Haig</p>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-50 flex items-center justify-between px-1">
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 border border-emerald-100/50">In Stock</span>
                <span class="text-xs font-bold text-slate-400">ID: #02</span>
            </div>
        </div>

        <!-- Book Card Unit Block 3 -->
        <div class="group bg-white border border-slate-200/60 rounded-2xl p-4 flex flex-col justify-between shadow-xs hover:shadow-md hover:border-slate-300 transition-all duration-200">
            <div class="space-y-4">
                <div class="h-48 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400 text-xs text-center p-4 shadow-inner">
                    Thinking, Fast & Slow
                </div>
                <div class="px-1">
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-indigo-600 transition-colors truncate">Thinking, Fast & Slow</h4>
                    <p class="text-xs font-medium text-slate-400 mt-1">Daniel Kahneman</p>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-50 flex items-center justify-between px-1">
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 border border-emerald-100/50">In Stock</span>
                <span class="text-xs font-bold text-slate-400">ID: #03</span>
            </div>
        </div>

        <!-- Book Card Unit Block 4 -->
        <div class="group bg-white border border-slate-200/60 rounded-2xl p-4 flex flex-col justify-between shadow-xs hover:shadow-md hover:border-slate-300 transition-all duration-200">
            <div class="space-y-4">
                <div class="h-48 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center font-bold text-slate-400 text-xs text-center p-4 shadow-inner">
                    The Psychology of Money
                </div>
                <div class="px-1">
                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-indigo-600 transition-colors truncate">The Psychology of Money</h4>
                    <p class="text-xs font-medium text-slate-400 mt-1">Morgan Housel</p>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-50 flex items-center justify-between px-1">
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-amber-50 text-amber-600 border border-amber-100/50">Borrowed</span>
                <span class="text-xs font-bold text-slate-400">ID: #04</span>
            </div>
        </div>

    </div>
</div>
