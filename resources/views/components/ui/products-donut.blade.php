@props(['sales', 'products'])
<div class="rounded-2xl border border-slate-100 bg-white p-6 shadow-xs h-[360px] flex flex-col justify-between">
    <!-- Header Block Section Control -->
    <div class="flex items-center justify-between">
        <h3 class="text-sm font-bold text-slate-800 tracking-tight">Top Café Products</h3>
        <button type="button" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-600 bg-white border border-slate-200 rounded-xl px-3 py-1.5 hover:bg-slate-50 transition-all cursor-pointer">
            <span>This Week</span>
            <svg class="h-3.5 w-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>

    <!-- Main Chart & Legend Body Workspace -->
    <div class="flex items-center justify-between flex-1 mt-4 gap-4">
        <!-- Upgraded Bold, Fat SVG Donut Radial Diagram -->
        <div class="relative w-40 h-40 flex items-center justify-center shrink-0">
            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 42 42">
                <!-- Base Background Track ring element -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#F1F5F9" stroke-width="4.8"/>
                
                <!-- Fat Data Arc Segments mapping proportion metrics -->
                <!-- Mocha Segment (Violet Accent) -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#A78BFA" stroke-width="4.8" stroke-dasharray="30 100" stroke-dashoffset="0"/>
                <!-- Latte Segment (Warm Sand Orange Accent) -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#FDBA74" stroke-width="4.8" stroke-dasharray="25 100" stroke-dashoffset="-30"/>
                <!-- Cappuccino Segment (Soft Coral Red Accent) -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#FCA5A5" stroke-width="4.8" stroke-dasharray="20 100" stroke-dashoffset="-55"/>
                <!-- Americano Segment (Deep Roast Espresso Brown Accent) -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#78350F" stroke-width="4.8" stroke-dasharray="15 100" stroke-dashoffset="-75"/>
                <!-- Others Segment (Slate Gray Accent) -->
                <circle cx="21" cy="21" r="15.915" fill="none" stroke="#94A3B8" stroke-width="4.8" stroke-dasharray="10 100" stroke-dashoffset="-90"/>
            </svg>
            
            <!-- Central Typography Badge Readout Core -->
            <div class="absolute flex flex-col items-center text-center">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Sales</span>
                <span class="text-sm font-black text-slate-800 tracking-tight mt-0.5 whitespace-nowrap">
                    {{ $sales }} <span class="text-[10px] font-bold text-slate-600">ETB</span>
                </span>
            </div>
        </div>

        <!-- Clean, Balanced Legend Block Layout (Stacked Name over Price Row) -->
        <div class="flex flex-col gap-2.5 flex-1 pl-2 min-w-0">
            @foreach($products as $prod)
                <div class="flex flex-col w-full min-w-0">
                    <!-- Top Line: Colored Dot indicator + Product Title -->
                    <div class="flex items-center gap-2 w-full min-w-0">
                        <span class="h-2 w-2 rounded-full shrink-0" style="background-color: {{ $prod['color'] }}"></span>
                        <span class="text-slate-700 font-bold text-xs tracking-tight truncate leading-none">{{ $prod['name'] }}</span>
                    </div>
                    
                    <!-- Bottom Line: Amount + ETB text kept tight on their own line underneath -->
                    <div class="flex items-baseline gap-0.5 shrink-0 pl-4 mt-1 leading-none">
                        <span class="text-slate-800 font-black text-xs tracking-tight">{{ $prod['amount'] }}</span>
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wide select-none">ETB</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Action Link Footer Button -->
    <div class="w-full flex justify-center mt-4">
        <button class="px-6 py-2.5 rounded-xl border border-indigo-100 bg-indigo-50/20 text-xs font-bold text-indigo-600 hover:bg-indigo-50/50 transition-colors cursor-pointer text-center">
            View All Products
        </button>
    </div>
</div>
