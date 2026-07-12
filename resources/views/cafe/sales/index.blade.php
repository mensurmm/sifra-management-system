@extends('layouts.app')

@section('content')
@php
    $sales = [
        ['receipt' => '#1024', 'item' => 'Cappuccino', 'amount' => '$4.50', 'time' => '10:12'],
        ['receipt' => '#1025', 'item' => 'Blueberry Muffin', 'amount' => '$3.20', 'time' => '10:27'],
        ['receipt' => '#1026', 'item' => 'Espresso', 'amount' => '$2.80', 'time' => '10:41'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Sales</h1>
            <p class="mt-1 text-sm text-slate-600">Review the latest transactions and keep the café’s revenue flow visible.</p>
        </div>
        <a href="{{ Route::has('cafe.sales.index') ? route('cafe.sales.index') : '/cafe/sales' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Export summary</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Today</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">$1,840</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Transactions</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">132</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Average Ticket</p>
            <p class="mt-3 text-3xl font-semibold text-emerald-600">$13.94</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="mb-4">
            <h2 class="text-base font-semibold text-slate-900">Recent transactions</h2>
            <p class="text-sm text-slate-600">A concise record of high-volume checkout activity.</p>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Receipt</th>
                        <th class="px-4 py-3">Item</th>
                        <th class="px-4 py-3">Amount</th>
                        <th class="px-4 py-3">Time</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($sales as $sale)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $sale['receipt'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $sale['item'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $sale['amount'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $sale['time'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
