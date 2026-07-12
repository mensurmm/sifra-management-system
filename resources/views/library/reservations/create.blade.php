@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Create reservation</h1>
            <p class="mt-1 text-sm text-slate-600">Capture a new hold request and set expectations for the next pickup window.</p>
        </div>
        <a href="{{ Route::has('reservations.index') ? route('reservations.index') : '/library/reservations' }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">Back to queue</a>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
            <div class="space-y-5">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Patron</label>
                    <input type="text" value="Alicia Chen" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Book</label>
                    <input type="text" value="Atomic Habits" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Reserved date</label>
                        <input type="date" value="2026-07-12" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Pickup window</label>
                        <select class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100">
                            <option>Today</option>
                            <option>Tomorrow</option>
                            <option>This week</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-5">
                <h2 class="text-base font-semibold text-slate-900">Reservation summary</h2>
                <div class="mt-4 space-y-3 text-sm text-slate-600">
                    <div class="rounded-xl border border-slate-200 bg-white p-4">
                        <p class="font-semibold text-slate-900">Pickup reminder</p>
                        <p class="mt-1">The patron will receive a confirmation notice once the reservation is saved.</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4">
                        <p class="font-semibold text-slate-900">Hold duration</p>
                        <p class="mt-1">Reservations remain active for 72 hours unless the item is collected sooner.</p>
                    </div>
                </div>
                <button class="mt-6 w-full rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Save reservation</button>
            </div>
        </div>
    </div>
</div>
@endsection
