@extends('website.layouts.app')

@section('content')
<div class="mx-auto max-w-6xl px-6 py-12 space-y-8 bg-white my-6 rounded-2xl border border-slate-100">
    <div class="border-b border-slate-100 pb-5">
        <h2 class="text-2xl font-black text-slate-900 tracking-tight">Our Digital Library Catalog</h2>
        <p class="text-xs font-medium text-slate-400 mt-1">Explore real-time book availability and resource allocations.</p>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($books as $book)
            <div class="bg-[#F8FAFC] border border-slate-100 rounded-2xl p-5 flex flex-col justify-between shadow-xs">
                <div class="space-y-3">
                    <div class="h-40 w-full bg-slate-200/40 rounded-xl flex items-center justify-center text-slate-400">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 truncate">{{ $book->title }}</h3>
                        <p class="text-[11px] font-semibold text-slate-400 mt-0.5">Author Index: {{ $book->author_id }}</p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100/60 flex items-center justify-between">
                    <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-emerald-50 text-emerald-600 border border-emerald-100">Available</span>
                    <button class="bg-[#4f46e5] text-white px-3 py-1.5 rounded-lg text-[11px] font-bold hover:bg-indigo-700 transition shadow-xs">Reserve & Pay</button>
                </div>
            </div>
        @empty
            <div class="col-span-full border border-slate-200 border-dashed rounded-2xl p-12 text-center text-slate-400 text-xs font-semibold">
                No book records added to the catalog database yet.
            </div>
        @endforelse
    </div>
</div>
@endsection
