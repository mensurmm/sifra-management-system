@props(['activities'])

<div class="bg-white rounded-xl sm:rounded-2xl shadow-sm border border-slate-100 p-4 sm:p-5 md:p-6 h-auto md:h-[360px] flex flex-col">
    <div class="flex flex-wrap items-center justify-between gap-2 pb-3 mb-3 border-b border-slate-50">
        <h3 class="text-sm sm:text-base font-bold text-slate-800">Recent Activities</h3>
        <a href="#" class="text-[10px] sm:text-xs font-semibold text-slate-500 bg-slate-50 border border-slate-200 rounded-lg px-2 sm:px-2.5 py-1 sm:py-1.5 hover:bg-slate-100 transition-colors">View all</a>
    </div>

    <div class="flex-1 overflow-y-auto space-y-3 sm:space-y-4 pr-1 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
        @foreach($activities as $item)
            <div class="flex items-start gap-2.5 sm:gap-3.5 text-xs">
                <div class="flex h-7 w-7 sm:h-9 sm:w-9 shrink-0 items-center justify-center rounded-xl bg-slate-100 text-slate-600 font-bold text-sm sm:text-base">
                    •
                </div>
                <div class="flex flex-col min-w-0 flex-1">
                    <span class="font-bold text-slate-800 leading-snug text-xs sm:text-sm">{{ $item['title'] }}</span>
                    <span class="text-slate-400 font-medium mt-0.5 leading-normal text-[10px] sm:text-xs">{!! $item['desc'] !!}</span>
                </div>
                <span class="text-[9px] sm:text-[10px] text-slate-400 font-semibold shrink-0 mt-0.5">{{ $item['time'] }}</span>
            </div>
        @endforeach
    </div>
</div>