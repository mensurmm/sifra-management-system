@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Return details</h1>
            <p class="mt-1 text-sm text-slate-600">Review the full return record and operational context for this circulation event.</p>
        </div>
        <a href="{{ Route::has('returns.index') ? route('returns.index') : '/library/returns' }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">Back to log</a>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.2fr_0.8fr]">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-slate-500">Return ID</p>
                    <h2 class="mt-1 text-xl font-semibold text-slate-900">RT-1042</h2>
                </div>
                <span class="rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">Completed</span>
            </div>
            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                    <p class="text-sm font-semibold text-slate-500">Member</p>
                    <p class="mt-1 text-sm font-medium text-slate-900">Maya Patel</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                    <p class="text-sm font-semibold text-slate-500">Book</p>
                    <p class="mt-1 text-sm font-medium text-slate-900">Clean Architecture</p>
                </div>
            </div>
            <div class="mt-4 rounded-xl border border-slate-200 p-4 text-sm text-slate-600">
                <p class="font-semibold text-slate-900">Condition note</p>
                <p class="mt-2">Minor cover wear, no page damage, and no late fee assessed.</p>
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Operational snapshot</h2>
            <div class="mt-4 space-y-3 text-sm text-slate-600">
                <div class="border-b border-slate-100 pb-3">
                    <p class="font-semibold text-slate-900">Returned on</p>
                    <p class="mt-1">10 July 2026</p>
                </div>
                <div class="border-b border-slate-100 pb-3">
                    <p class="font-semibold text-slate-900">Condition</p>
                    <p class="mt-1">Excellent</p>
                </div>
                <div>
                    <p class="font-semibold text-slate-900">Inventory status</p>
                    <p class="mt-1">Available for circulation</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
