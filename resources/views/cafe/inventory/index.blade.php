@extends('layouts.app')

@section('content')
@php
    $inventory = [
        ['item' => 'Coffee Beans', 'supplier' => 'North Roast Co.', 'par_level' => 30, 'on_hand' => 18, 'status' => 'Reorder'],
        ['item' => 'Milk', 'supplier' => 'Fresh Dairy', 'par_level' => 20, 'on_hand' => 16, 'status' => 'Monitor'],
        ['item' => 'Sugar', 'supplier' => 'Sweet Supply', 'par_level' => 15, 'on_hand' => 14, 'status' => 'Healthy'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Inventory</h1>
            <p class="mt-1 text-sm text-slate-600">Track essential supplies, reorder risk, and operating readiness for the café.</p>
        </div>
        <a href="{{ Route::has('cafe.inventory.index') ? route('cafe.inventory.index') : '/cafe/inventory' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Review stock</a>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Item</th>
                        <th class="px-4 py-3">Supplier</th>
                        <th class="px-4 py-3">Par level</th>
                        <th class="px-4 py-3">On hand</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($inventory as $item)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $item['item'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $item['supplier'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $item['par_level'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $item['on_hand'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $item['status'] === 'Reorder' ? 'bg-rose-50 text-rose-700' : ($item['status'] === 'Monitor' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700') }}">
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
@endsection
