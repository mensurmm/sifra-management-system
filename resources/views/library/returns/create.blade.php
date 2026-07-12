@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Record Return</h1>
            <p class="mt-1 text-sm text-slate-600">Capture a return event, verify the item condition, and update circulation availability.</p>
        </div>
        <a href="{{ Route::has('returns.index') ? route('returns.index') : '/library/returns' }}" class="inline-flex items-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800">Back to returns</a>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Return details</h2>
            <div class="mt-6 space-y-5">
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Borrowing record</label>
                    <input type="text" value="BR-1042" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Member</label>
                        <input type="text" value="Maya Patel" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Book</label>
                        <input type="text" value="Clean Architecture" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                    </div>
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Return date</label>
                        <input type="date" value="2026-07-10" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100" />
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-700">Condition</label>
                        <select class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100">
                            <option>Excellent</option>
                            <option>Good</option>
                            <option>Needs Review</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Notes</label>
                    <textarea rows="4" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-100">Minor wear on cover. No structural damage detected.</textarea>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-slate-900">Workflow summary</h2>
                <div class="mt-4 space-y-4 text-sm text-slate-600">
                    <div class="rounded-xl border border-slate-200 p-4">
                        <p class="font-semibold text-slate-900">Availability update</p>
                        <p class="mt-1">The book will be returned to active inventory immediately after confirmation.</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 p-4">
                        <p class="font-semibold text-slate-900">Fine assessment</p>
                        <p class="mt-1">No penalty applies for the current condition and return timing.</p>
                    </div>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <button class="w-full rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Confirm return</button>
            </div>
        </div>
    </div>
</div>
@endsection
