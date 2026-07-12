@extends('layouts.app')

@section('content')
@php
    $members = [
        ['name' => 'Alicia Chen', 'email' => 'alicia@example.com', 'active_loans' => 2, 'status' => 'Active'],
        ['name' => 'Daniel Brooks', 'email' => 'daniel@example.com', 'active_loans' => 1, 'status' => 'Active'],
        ['name' => 'Maya Patel', 'email' => 'maya@example.com', 'active_loans' => 3, 'status' => 'Priority'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Members</h1>
            <p class="mt-1 text-sm text-slate-600">Manage patron profiles, borrower activity, and membership standing from a unified view.</p>
        </div>
        <a href="{{ Route::has('members.index') ? route('members.index') : '/library/members' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Add member</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Registered Members</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">1,248</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Active Borrowers</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">614</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Priority Accounts</p>
            <p class="mt-3 text-3xl font-semibold text-amber-600">23</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="mb-4 flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-slate-900">Patron roster</h2>
                <p class="text-sm text-slate-600">Profiles with current borrowing activity.</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Active loans</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($members as $member)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $member['name'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $member['email'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $member['active_loans'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $member['status'] === 'Priority' ? 'bg-amber-50 text-amber-700' : 'bg-emerald-50 text-emerald-700' }}">
                                    {{ $member['status'] }}
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
