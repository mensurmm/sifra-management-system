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
            <h1 class="text-xl font-bold tracking-tight text-slate-900">Add New Library Book</h1>
            <p class="text-xs font-medium text-slate-400">Register a unique asset identifier item volume into the central catalog collection context.</p>
        </div>
    </div>

    <form method="POST" action="{{ route('library.books.store') }}" class="bg-white border border-slate-200/90 rounded-2xl shadow-xs overflow-hidden">
        @csrf

        <div class="p-6 sm:p-8 space-y-6">
            <h3 class="text-xs font-extrabold tracking-widest text-slate-400 uppercase border-b border-slate-100 pb-3">Asset Core Information</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="space-y-1.5 md:col-span-2">
                    <label for="title" class="text-xs font-bold text-slate-700 tracking-wide">Book Title</label>
                    <input type="text" id="title" name="title" required value="{{ old('title') }}" placeholder="e.g., Clean Architecture: A Craftsman's Guide" 
                           class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-700 placeholder-slate-400/70 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-slate-100 focus:border-slate-300 focus:outline-hidden transition-all" />
                    @error('title') <p class="text-[11px] font-bold text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700 tracking-wide">Author / Creator</label>
                    <div class="relative">
                        <select name="author_id" required class="appearance-none w-full pl-3.5 pr-10 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:border-slate-300 focus:outline-hidden transition-all cursor-pointer">
                            <option value="">Choose Author...</option>
                            {{-- Database iteration --}}
                            <option value="1">Robert C. Martin</option>
                            <option value="2">James Clear</option>
                        </select>
                        <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </span>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700 tracking-wide">Genre / Category</label>
                    <div class="relative">
                        <select name="category_id" required class="appearance-none w-full pl-3.5 pr-10 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:border-slate-300 focus:outline-hidden transition-all cursor-pointer">
                            <option value="">Choose Category...</option>
                            <option value="1">Programming</option>
                            <option value="2">Self-Development</option>
                        </select>
                        <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </span>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700 tracking-wide">Publisher Entity</label>
                    <div class="relative">
                        <select name="publisher_id" required class="appearance-none w-full pl-3.5 pr-10 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:border-slate-300 focus:outline-hidden transition-all cursor-pointer">
                            <option value="">Choose Publisher...</option>
                            <option value="1">Prentice Hall</option>
                            <option value="2">O'Reilly Media</option>
                        </select>
                        <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                        </span>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label for="isbn" class="text-xs font-bold text-slate-700 tracking-wide">ISBN-13 Serial Code</label>
                    <input type="text" id="isbn" name="isbn" required value="{{ old('isbn') }}" placeholder="978-0134494166" 
                           class="w-full font-mono px-3.5 py-2.5 text-xs font-semibold text-slate-700 placeholder-slate-400/70 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-slate-100 focus:border-slate-300 focus:outline-hidden transition-all" />
                    @error('isbn') <p class="text-[11px] font-bold text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <h3 class="text-xs font-extrabold tracking-widest text-slate-400 uppercase border-b border-slate-100 pb-3 mt-4 block">Physical Inventory Allocation</h3>
                </div>

                <div class="space-y-1.5">
                    <label for="total_copies" class="text-xs font-bold text-slate-700 tracking-wide">Initial Physical Copies In Stock</label>
                    <input type="number" id="total_copies" name="total_copies" min="1" required value="{{ old('total_copies', 1) }}" placeholder="e.g., 5" 
                           class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-700 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-slate-100 focus:border-slate-300 focus:outline-hidden transition-all" />
                </div>

                <div class="space-y-1.5">
                    <label id="rack_number" class="text-xs font-bold text-slate-700 tracking-wide">Storage Rack Identifier/Location Code</label>
                    <input type="text" id="rack_number" name="rack_number" value="{{ old('rack_number') }}" placeholder="e.g., Shelf B-4" 
                           class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-700 placeholder-slate-400/70 bg-slate-50/40 border border-slate-200 rounded-xl focus:bg-white focus:outline-hidden focus:border-slate-300 transition-all" />
                </div>

            </div>
        </div>

        <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3">
            <a href="{{ route('library.books.index') }}" class="px-4 py-2.5 text-xs font-semibold text-slate-500 hover:text-slate-700 transition-colors">Cancel</a>
            <button type="submit" class="px-4 py-2.5 text-xs font-bold text-white bg-indigo-600 rounded-xl hover:bg-indigo-700 shadow-md transition-all">
                Save Book to Catalog
            </button>
        </div>
    </form>
</div>
@endsection