@extends('layouts.app')

@section('content')
@php
    $categories = [
        ['name' => 'Hot Drinks', 'products' => 24, 'status' => 'Active'],
        ['name' => 'Bakery', 'products' => 12, 'status' => 'Active'],
        ['name' => 'Seasonal', 'products' => 8, 'status' => 'Draft'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Categories</h1>
            <p class="mt-1 text-sm text-slate-600">Organize café offerings into clear product groupings that support merchandising and reporting.</p>
        </div>
        <a href="{{ Route::has('book-categories.index') ? route('book-categories.index') : '/cafe/categories' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">New category</a>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Products</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($categories as $category)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $category['name'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $category['products'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $category['status'] === 'Draft' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $category['status'] }}
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
