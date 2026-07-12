@extends('layouts.app')

@section('content')
@php
    $loans = [
        ['id' => 1, 'member' => 'Alicia Chen', 'book' => 'Atomic Habits', 'due_date' => '2026-07-15', 'status' => 'Active'],
        ['id' => 2, 'member' => 'Daniel Brooks', 'book' => 'The Alchemist', 'due_date' => '2026-07-12', 'status' => 'Due Soon'],
        ['id' => 3, 'member' => 'Maya Patel', 'book' => 'Clean Architecture', 'due_date' => '2026-07-10', 'status' => 'Overdue'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Borrowing</h1>
            <p class="mt-1 text-sm text-slate-600">Monitor active loans, prioritize due dates, and support efficient circulation management.</p>
        </div>
        <a href="{{ Route::has('borrowings.index') ? route('borrowings.index') : '/library/borrowing' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Create loan</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Active Loans</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">186</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Due This Week</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">31</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Overdue</p>
            <p class="mt-3 text-3xl font-semibold text-rose-600">7</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="mb-4 flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-slate-900">Current lending activity</h2>
                <p class="text-sm text-slate-600">High-visibility tracking for loans that need attention.</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Member</th>
                        <th class="px-4 py-3">Book</th>
                        <th class="px-4 py-3">Due date</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($loans as $loan)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $loan['member'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $loan['book'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $loan['due_date'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $loan['status'] === 'Overdue' ? 'bg-rose-50 text-rose-700' : ($loan['status'] === 'Due Soon' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700') }}">
                                    {{ $loan['status'] }}
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
