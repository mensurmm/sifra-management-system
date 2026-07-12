@extends('layouts.app')

@section('content')
<div class="space-y-6 animate-fade-in select-none">
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-200 pb-5">
        <div class="flex items-center gap-3">
            <a href="{{ route('library.books.index') }}" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 hover:text-slate-700 hover:bg-slate-50 transition-all">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            <div class="space-y-0.5">
                <h1 class="text-xl font-bold tracking-tight text-slate-900">Asset Record File Deck</h1>
                <p class="text-xs font-medium text-slate-400">Deep-dive circulation logs, active allocation parameters, and ledger histories.</p>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <a href="{{ route('library.books.edit', $book->id ?? 1) }}" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-bold text-slate-700 bg-white border border-slate-200 rounded-xl shadow-xs hover:bg-slate-50 transition-all">
                <svg class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg>
                <span>Edit Meta Mapping</span>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
        
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-6">
            <div class="flex flex-col items-center text-center space-y-4">
                <div class="h-44 w-32 rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-600 text-white font-extrabold text-2xl flex items-center justify-center shadow-lg shadow-emerald-500/10">
                    AH
                </div>
                <div class="space-y-1">
                    <h2 class="text-base font-extrabold text-slate-900">Atomic Habits</h2>
                    <p class="text-xs font-semibold text-indigo-600">James Clear</p>
                </div>
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-bold rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-100 uppercase tracking-wide">
                    <span class="h-1 w-1 rounded-full bg-emerald-500"></span>
                    Available on Shelves
                </span>
            </div>

            <div class="border-t border-slate-100 pt-4 space-y-3 text-xs font-semibold">
                <div class="flex items-center justify-between"><span class="text-slate-400 font-medium">Genre/Category:</span><span class="text-slate-800">Self-Development</span></div>
                <div class="flex items-center justify-between"><span class="text-slate-400 font-medium">ISBN-13 Key:</span><span class="font-mono text-slate-800 select-all">978-0735211292</span></div>
                <div class="flex items-center justify-between"><span class="text-slate-400 font-medium">Placement Rack:</span><span class="text-slate-800">Shelf Alpha-3</span></div>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-6">
            
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-xs">
                    <span class="text-[10px] font-extrabold tracking-wider uppercase text-slate-400 block">Total Catalog Balance</span>
                    <span class="text-xl font-extrabold text-slate-900 mt-2 block">20 Copies</span>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-xs">
                    <span class="text-[10px] font-extrabold tracking-wider uppercase text-slate-400 block">Active Borrow Leases</span>
                    <span class="text-xl font-extrabold text-indigo-600 mt-2 block">9 Issued</span>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-4 shadow-xs">
                    <span class="text-[10px] font-extrabold tracking-wider uppercase text-slate-400 block">Net Available On Shelf</span>
                    <span class="text-xl font-extrabold text-emerald-600 mt-2 block">11 Remainder</span>
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-2xl shadow-xs overflow-hidden">
                <div class="px-5 py-4 border-b border-slate-100 bg-slate-50/60">
                    <h3 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider">Active Circulation Logs Queue</h3>
                </div>
                
                <div class="divide-y divide-slate-100 text-xs font-semibold text-slate-600">
                    <div class="p-4 flex items-center justify-between hover:bg-slate-50/40 transition-colors">
                        <div class="flex items-center gap-3">
                            <div class="h-8 w-8 rounded-lg bg-indigo-50 text-indigo-600 font-bold flex items-center justify-center text-[11px]">MA</div>
                            <div>
                                <p class="text-slate-800 font-bold">Mensur Ali</p>
                                <p class="text-[10px] text-slate-400 font-medium mt-0.5">Lease tracking code Reference: #L-98421</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="text-slate-700 font-bold block">Issued: 2026-07-01</span>
                            <span class="text-[10px] text-amber-500 font-bold uppercase tracking-wide mt-0.5 block">Due Target: 14 Days Remaining</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection