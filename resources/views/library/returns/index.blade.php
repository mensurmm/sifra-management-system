@extends('layouts.app')

@section('content')
@php
    $returns = [
        ['id' => 1, 'member' => 'Alicia Chen', 'book' => 'Atomic Habits', 'returned_at' => '2026-07-09', 'condition' => 'Excellent', 'status' => 'Completed'],
        ['id' => 2, 'member' => 'Daniel Brooks', 'book' => 'The Alchemist', 'returned_at' => '2026-07-08', 'condition' => 'Good', 'status' => 'Completed'],
        ['id' => 3, 'member' => 'Maya Patel', 'book' => 'Clean Architecture', 'returned_at' => '2026-07-10', 'condition' => 'Needs Review', 'status' => 'Pending'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Returns</h1>
            <p class="mt-1 text-sm text-slate-600">Track returned assets, review condition reports, and keep circulation operations compliant.</p>
        </div>
        <a href="{{ Route::has('returns.index') ? route('returns.index') : '/library/returns' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Review Queue</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Today’s Returns</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">24</p>
            <p class="mt-2 text-sm text-emerald-600">+8% vs yesterday</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Awaiting Review</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">5</p>
            <p class="mt-2 text-sm text-amber-600">2 need damage inspection</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Late Returns</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">3</p>
            <p class="mt-2 text-sm text-rose-600">Escalation required</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="mb-4 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-base font-semibold text-slate-900">Return Log</h2>
                <p class="text-sm text-slate-600">A live view of incoming returns and their current workflow state.</p>
            </div>
            <a href="{{ Route::has('returns.index') ? route('returns.index') : '/library/returns' }}" class="text-sm font-semibold text-indigo-600">Export report</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Member</th>
                        <th class="px-4 py-3">Book</th>
                        <th class="px-4 py-3">Returned</th>
                        <th class="px-4 py-3">Condition</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($returns as $return)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $return['member'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $return['book'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $return['returned_at'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $return['condition'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $return['status'] === 'Pending' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $return['status'] }}
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
