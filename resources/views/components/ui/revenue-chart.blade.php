@props(['total', 'library', 'cafe'])

<div class="bg-white rounded-xl sm:rounded-2xl shadow-sm border border-slate-100 p-4 sm:p-5 md:p-6 h-auto md:h-[360px] flex flex-col">
    <!-- Header -->
    <div class="flex flex-wrap items-center justify-between gap-2 mb-3 sm:mb-4">
        <h3 class="text-sm sm:text-base font-bold text-slate-800">Revenue Overview</h3>
        <span class="text-[10px] sm:text-xs font-semibold text-slate-500 bg-slate-50 px-2 sm:px-3 py-1 sm:py-1.5 rounded-lg border border-slate-200 cursor-pointer hover:bg-slate-100 transition-colors">
            This Week ▼
        </span>
    </div>

    <!-- Chart Area -->
    <div class="flex-1 relative min-h-[140px] sm:min-h-[160px] md:min-h-[180px]">
        <!-- Y-Axis Labels -->
        <div class="absolute left-0 top-0 bottom-5 sm:bottom-6 flex flex-col justify-between text-[8px] sm:text-[10px] font-bold text-slate-400">
            <span>20K</span>
            <span>15K</span>
            <span>10K</span>
            <span>5K</span>
            <span>0</span>
        </div>
        
        <!-- Grid Lines -->
        <div class="absolute left-6 sm:left-8 right-0 top-0 bottom-5 sm:bottom-6 flex flex-col justify-between">
            <div class="border-b border-slate-100 w-full"></div>
            <div class="border-b border-slate-100 w-full"></div>
            <div class="border-b border-slate-100 w-full"></div>
            <div class="border-b border-slate-100 w-full"></div>
            <div class="border-b border-slate-100 w-full"></div>
        </div>

        <!-- SVG Chart -->
        <div class="absolute left-6 sm:left-8 right-0 top-1 bottom-5 sm:bottom-6">
            <svg class="w-full h-full" viewBox="0 0 100 40" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="gradient" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#4F46E5" stop-opacity="0.2"/>
                        <stop offset="100%" stop-color="#4F46E5" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <path d="M 0 35 C 10 20, 20 25, 30 15 C 40 5, 50 20, 60 12 C 70 5, 80 18, 90 22 L 90 40 L 0 40 Z" fill="url(#gradient)"/>
                <path d="M 0 35 C 10 20, 20 25, 30 15 C 40 5, 50 20, 60 12 C 70 5, 80 18, 90 22" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round"/>
                <circle cx="90" cy="22" r="2.5 sm:r-3" fill="#4F46E5" stroke="white" stroke-width="1.5"/>
                <path d="M 90 22 C 95 28, 98 32, 100 35" fill="none" stroke="#4F46E5" stroke-width="1.5" stroke-dasharray="3,3"/>
            </svg>
        </div>

        <!-- X-Axis -->
        <div class="absolute left-6 sm:left-8 right-0 bottom-0 flex justify-between text-[8px] sm:text-[10px] font-bold text-slate-400">
            <span class="text-center w-6 sm:w-auto">Mon</span>
            <span class="text-center w-6 sm:w-auto">Tue</span>
            <span class="text-center w-6 sm:w-auto">Wed</span>
            <span class="text-center w-6 sm:w-auto">Thu</span>
            <span class="text-center w-6 sm:w-auto">Fri</span>
            <span class="text-center w-6 sm:w-auto">Sat</span>
            <span class="text-center w-6 sm:w-auto">Sun</span>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-3 gap-2 sm:gap-4 border-t border-slate-100 pt-3 sm:pt-4 mt-3 sm:mt-4">
        <div class="min-w-0">
            <p class="text-[8px] sm:text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Revenue</p>
            <p class="text-xs sm:text-sm font-bold text-slate-800 truncate">{{ $total }} <span class="text-[8px] sm:text-[10px] text-indigo-600">ETB</span></p>
        </div>
        <div class="min-w-0">
            <p class="text-[8px] sm:text-[10px] font-bold text-slate-400 uppercase tracking-wider">Library Revenue</p>
            <p class="text-xs sm:text-sm font-bold text-slate-800 truncate">{{ $library }} <span class="text-[8px] sm:text-[10px] text-emerald-600">ETB</span></p>
        </div>
        <div class="min-w-0">
            <p class="text-[8px] sm:text-[10px] font-bold text-slate-400 uppercase tracking-wider">Café Revenue</p>
            <p class="text-xs sm:text-sm font-bold text-slate-800 truncate">{{ $cafe }} <span class="text-[8px] sm:text-[10px] text-amber-600">ETB</span></p>
        </div>
    </div>
</div>