@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">Point of Sale</h1>
            <p class="mt-1 text-sm text-slate-600">Support quick and reliable checkout flows for staff during peak operating hours.</p>
        </div>
        <a href="{{ Route::has('cafe.pos.index') ? route('cafe.pos.index') : '/cafe/pos' }}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Open terminal</a>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-slate-900">Current order</h2>
            <div class="mt-5 space-y-3">
                <div class="flex items-center justify-between rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
                    <div>
                        <p class="font-medium text-slate-900">Espresso</p>
                        <p class="text-sm text-slate-500">x2</p>
                    </div>
                    <p class="font-semibold text-slate-900">$5.60</p>
                </div>
                <div class="flex items-center justify-between rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
                    <div>
                        <p class="font-medium text-slate-900">Blueberry Muffin</p>
                        <p class="text-sm text-slate-500">x1</p>
                    </div>
                    <p class="font-semibold text-slate-900">$3.20</p>
                </div>
            </div>
            <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-4">
                <div class="flex items-center justify-between text-sm text-slate-600">
                    <span>Subtotal</span>
                    <span>$8.80</span>
                </div>
                <div class="mt-2 flex items-center justify-between text-sm text-slate-600">
                    <span>Tax</span>
                    <span>$0.88</span>
                </div>
                <div class="mt-3 flex items-center justify-between border-t border-slate-200 pt-3 text-base font-semibold text-slate-900">
                    <span>Total</span>
                    <span>$9.68</span>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-slate-900">Quick actions</h2>
                <div class="mt-4 grid gap-3">
                    <button class="rounded-xl border border-slate-200 px-4 py-3 text-left text-sm font-medium text-slate-700 hover:bg-slate-50">Add payment method</button>
                    <button class="rounded-xl border border-slate-200 px-4 py-3 text-left text-sm font-medium text-slate-700 hover:bg-slate-50">Apply loyalty discount</button>
                    <button class="rounded-xl border border-slate-200 px-4 py-3 text-left text-sm font-medium text-slate-700 hover:bg-slate-50">Print receipt</button>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <button class="w-full rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Complete sale</button>
            </div>
        </div>
    </div>
</div>
@endsection
