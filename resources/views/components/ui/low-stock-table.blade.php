@props(['items'])

<div class="bg-white rounded-xl sm:rounded-2xl shadow-sm border border-slate-100 p-4 sm:p-5 md:p-6 h-auto md:h-[360px] flex flex-col">
    <div class="flex flex-wrap items-center justify-between gap-2 mb-3 sm:mb-4">
        <h3 class="text-sm sm:text-base font-bold text-slate-800">Low Stock Items</h3>
        <a href="#" class="text-[10px] sm:text-xs font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">View all</a>
    </div>

    <div class="flex-1 overflow-y-auto">
        <div class="overflow-x-auto -mx-4 sm:mx-0">
            <table class="w-full text-xs sm:text-sm">
                <thead>
                    <tr class="text-left text-[10px] sm:text-xs font-semibold text-slate-400 border-b border-slate-100">
                        <th class="pb-2 sm:pb-3 pl-4 sm:pl-0 font-medium">Item</th>
                        <th class="pb-2 sm:pb-3 font-medium hidden sm:table-cell">Category</th>
                        <th class="pb-2 sm:pb-3 font-medium text-center">Stock</th>
                        <th class="pb-2 sm:pb-3 pr-4 sm:pr-0 font-medium text-right">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @foreach($items as $item)
                        <tr class="text-xs sm:text-sm hover:bg-slate-50/50 transition-colors">
                            <td class="py-2.5 sm:py-3 pl-4 sm:pl-0 font-medium text-slate-800">{{ $item['name'] }}</td>
                            <td class="py-2.5 sm:py-3 text-slate-500 hidden sm:table-cell">{{ $item['category'] }}</td>
                            <td class="py-2.5 sm:py-3 text-center font-semibold text-slate-700">{{ $item['stock'] }}</td>
                            <td class="py-2.5 sm:py-3 pr-4 sm:pr-0 text-right">
                                <span class="inline-flex px-2 sm:px-3 py-0.5 sm:py-1 rounded-full text-[9px] sm:text-xs font-medium
                                    {{ $item['status'] === 'Out of Stock' ? 'bg-red-50 text-red-600' : 'bg-amber-50 text-amber-600' }}">
                                    {{ $item['status'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>