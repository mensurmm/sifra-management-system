@extends('layouts.app')

@section('content')
@php
    $reservations = [
        ['member' => 'Alicia Chen', 'book' => 'Atomic Habits', 'date' => '2026-07-12', 'status' => 'Confirmed'],
        ['member' => 'Daniel Brooks', 'book' => 'The Alchemist', 'date' => '2026-07-14', 'status' => 'Pending'],
        ['member' => 'Maya Patel', 'book' => 'Clean Architecture', 'date' => '2026-07-16', 'status' => 'Ready'],
    ];
@endphp

<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Reservations</h1>
            <p class="mt-1 text-sm text-slate-600">Coordinate hold requests, confirm pickups, and keep the reservation queue under control.</p>
        </div>
        <a href="{{ Route::has('reservations.index') ? route('reservations.index') : '/library/reservations' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Create reservation</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Active Holds</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">42</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Ready for Pickup</p>
            <p class="mt-3 text-3xl font-semibold text-emerald-600">11</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Expired</p>
            <p class="mt-3 text-3xl font-semibold text-amber-600">4</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm">
                <thead>
                    <tr class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wider text-slate-500">
                        <th class="px-4 py-3">Member</th>
                        <th class="px-4 py-3">Book</th>
                        <th class="px-4 py-3">Reserved for</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    @foreach($reservations as $reservation)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $reservation['member'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $reservation['book'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $reservation['date'] }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex rounded-full px-2.5 py-1 text-xs font-semibold {{ $reservation['status'] === 'Pending' ? 'bg-amber-50 text-amber-700' : ($reservation['status'] === 'Ready' ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-700') }}">
                                    {{ $reservation['status'] }}
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
