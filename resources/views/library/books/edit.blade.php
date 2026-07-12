@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-6 animate-fade-in select-none">
    
    <div class="flex items-center gap-3">
        <a href="{{ route('library.books.index') }}" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-500 hover:text-slate-700 hover:bg-slate-50 transition-all">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </a>
        <div class="space-y-0.5">
            <h1 class="text-xl font-bold tracking-tight text-slate-900">Modify Book Registry</h1>
            <p class="text-xs font-medium text-slate-400">Update item parameters, tracking attributes, or stock count logs for this catalog entry.</p>
        </div>
    </div>

    <form method="POST" action="{{ route('library.books.update', $book->id ?? 1) }}" class="bg-white border border-slate-200/90 rounded-2xl shadow-xs overflow-hidden">
        @csrf
        @method('PUT')

        <div class="p-6 sm:p-8 space-y-6">
            <h3 class="text-xs font-extrabold tracking-widest text-slate-400 uppercase border-b border-slate-100 pb-3">Edit Properties Map</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1.5 md:col-span-2">
                    <label for="title" class="text-xs font-bold text-slate-700 tracking-wide">Book Title</label>
                    <input type="text" id="title" name="title" required value="{{ old('title', $book->title ?? 'Atomic Habits') }}" 
                           class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:outline-hidden focus:border-slate-300 transition-all" />
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700 tracking-wide">Author / Creator</label>
                    <div class="relative">
                        <select name="author_id" required class="appearance-none w-full pl-3.5 pr-10 py-2.5 text-xs font-semibold text-slate-700 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-slate-300 transition-all cursor-pointer">
                            <option value="2" selected>James Clear</option>
                        </select>
                        <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </span>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label for="isbn" class="text-xs font-bold text-slate-700 tracking-wide">ISBN-13 Serial Code</label>
                    <input type="text" id="isbn" name="isbn" required value="{{ old('isbn', $book->isbn ?? '978-0735211292') }}" 
                           class="w-full font-mono px-3.5 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:outline-hidden focus:border-slate-300 transition-all" />
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <h3 class="text-xs font-extrabold tracking-widest text-slate-400 uppercase border-b border-slate-100 pb-3 mt-4 block">Modify Inventory Adjustments</h3>
                </div>

                <div class="space-y-1.5">
                    <label for="total_copies" class="text-xs font-bold text-slate-700 tracking-wide">Total Catalog Copies Allocated</label>
                    <input type="number" id="total_copies" name="total_copies" required value="{{ old('total_copies', $book->total_copies ?? 20) }}" 
                           class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:outline-hidden focus:border-slate-300 transition-all" />
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between gap-3">
            <span class="text-[11px] text-slate-400 font-medium">Record originally created on: {{ now()->format('Y-m-d') }}</span>
            <div class="flex items-center gap-3">
                <a href="{{ route('library.books.index') }}" class="px-4 py-2.5 text-xs font-semibold text-slate-500 hover:text-slate-700 transition-colors">Cancel</a>
                <button type="submit" class="px-4 py-2.5 text-xs font-bold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 shadow-md transition-all">
                    Commit Updates
                </button>
            </div>
        </div>
    </form>
</div>
@endsection