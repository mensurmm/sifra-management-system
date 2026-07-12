@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Settings</h1>
            <p class="mt-1 text-sm text-slate-600">Configure platform preferences, permissions, and operational defaults.</p>
        </div>
        <a href="{{ route('settings.index') }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">Save changes</a>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">General preferences</h2>
            <div class="mt-5 space-y-4 text-sm text-slate-600">
                <div class="rounded-xl border border-slate-200 p-4">
                    <p class="font-semibold text-slate-900">Operational mode</p>
                    <p class="mt-1">Standard management and reporting workflows enabled.</p>
                </div>
                <div class="rounded-xl border border-slate-200 p-4">
                    <p class="font-semibold text-slate-900">Notifications</p>
                    <p class="mt-1">Alerts are configured for overdue items, low-stock events, and reservation expiry.</p>
                </div>
            </div>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Security and access</h2>
            <div class="mt-5 space-y-4 text-sm text-slate-600">
                <div class="rounded-xl border border-slate-200 p-4">
                    <p class="font-semibold text-slate-900">Role-based access</p>
                    <p class="mt-1">Staff, managers, and administrators can be configured from this section.</p>
                </div>
                <div class="rounded-xl border border-slate-200 p-4">
                    <p class="font-semibold text-slate-900">Audit logging</p>
                    <p class="mt-1">Change history and admin activity are ready for future policy enforcement.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
