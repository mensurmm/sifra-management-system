<div class="bg-white rounded-xl sm:rounded-2xl shadow-sm border border-slate-100 p-4 sm:p-5 md:p-6 h-auto md:h-[360px] flex flex-col">
    <h3 class="text-sm sm:text-base font-bold text-slate-800 mb-3 sm:mb-4">Quick Actions</h3>

    <div class="flex-1 grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 content-start">
        @php
            $actions = [
                ['label' => 'Add Book', 'icon' => 'M12 4.5v15m7.5-7.5h-15', 'color' => 'indigo'],
                ['label' => 'New Member', 'icon' => 'M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235A10.137 10.137 0 0110 18c2.439 0 4.7.86 6.47 2.295', 'color' => 'emerald'],
                ['label' => 'New Sale', 'icon' => 'M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z', 'color' => 'orange'],
                ['label' => 'Borrow Book', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'color' => 'indigo'],
                ['label' => 'Return Book', 'icon' => 'M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3', 'color' => 'sky'],
                ['label' => 'View Reports', 'icon' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z', 'color' => 'orange'],
            ];
        @endphp

        @foreach($actions as $action)
            <a href="#" class="flex flex-col items-center justify-center p-2 sm:p-3 md:p-4 rounded-xl border border-slate-100 hover:border-{{ $action['color'] }}-200 hover:bg-{{ $action['color'] }}-50/30 transition-all group">
                <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-xl bg-{{ $action['color'] }}-50 flex items-center justify-center text-{{ $action['color'] }}-600 group-hover:bg-{{ $action['color'] }}-100 transition-all">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $action['icon'] }}" />
                    </svg>
                </div>
                <span class="text-[8px] sm:text-[9px] md:text-xs font-semibold text-slate-600 mt-1 sm:mt-1.5 md:mt-2 group-hover:text-{{ $action['color'] }}-600 text-center leading-tight">{{ $action['label'] }}</span>
            </a>
        @endforeach
    </div>
</div>