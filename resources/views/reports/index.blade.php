@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Reports</h1>
            <p class="mt-1 text-sm text-slate-600">Track performance, circulation, and revenue trends across the platform.</p>
        </div>
        <a href="{{ route('reports.index') }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Export report</a>
    </div>

    <div class="grid gap-5 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Library circulation</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">84.2%</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Cafe revenue</p>
            <p class="mt-3 text-3xl font-semibold text-slate-900">$12.8k</p>
        </div>
        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm font-semibold text-slate-500">Outstanding actions</p>
            <p class="mt-3 text-3xl font-semibold text-amber-600">18</p>
        </div>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <h2 class="text-lg font-semibold text-slate-900">Executive overview</h2>
        <p class="mt-2 text-sm text-slate-600">The analytics layer is now scaffolded to support deeper reporting once your backend data sources are connected.</p>
    </div>
</div>
@endsection
