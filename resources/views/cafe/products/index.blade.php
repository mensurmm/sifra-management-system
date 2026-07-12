@extends('layouts.app')

@section('content')
@php
    $products = [
        ['name' => 'Espresso', 'category' => 'Hot Drinks', 'stock' => 48, 'status' => 'In Stock'],
        ['name' => 'Cappuccino', 'category' => 'Hot Drinks', 'stock' => 22, 'status' => 'Low Stock'],
        ['name' => 'Blueberry Muffin', 'category' => 'Bakery', 'stock' => 8, 'status' => 'Low Stock'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Products</h1>
            <p class="mt-1 text-sm text-slate-600">Manage café offerings, stock availability, and replenishment priorities in one place.</p>
        </div>
        <a href="{{ Route::has('cafe.products.index') ? route('cafe.products.index') : '/cafe/products' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Add product</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Active Skus</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">128</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Low Stock</p>
            <p class="mt-3 text-3xl font-semibold text-amber-600">14</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Out of Stock</p>
            <p class="mt-3 text-3xl font-semibold text-rose-600">3</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="mb-4 flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-slate-900">Inventory overview</h2>
                <p class="text-sm text-slate-600">A practical operating summary for product availability.</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Product</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Stock</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($products as $product)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $product['name'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $product['category'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $product['stock'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $product['status'] === 'Low Stock' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $product['status'] }}
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
