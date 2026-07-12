@extends('layouts.public')

@section('content')
<div class="mx-auto max-w-6xl px-6 py-12 space-y-8">
    <div class="border-b border-slate-200 pb-5">
        <h2 class="text-xl font-black text-slate-900 sm:text-2xl">Digital Library Catalog</h2>
        <p class="text-xs font-medium text-slate-400 mt-1">Explore real-time book availability and reserving options directly from your browser.</p>
    </div>

    <!-- Responsive Grid Architecture Slot -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($books as $book)
            <div class="bg-white border border-slate-200/60 rounded-2xl p-5 flex flex-col justify-between shadow-xs transition hover:shadow-md">
                <div class="space-y-3">
                    <div class="h-40 w-full bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-center text-slate-300">
                        <!-- Book Cover Mock SVG graphic -->
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-800 truncate">{{ $book->title }}</h3>
                        <p class="text-[11px] font-semibold text-slate-400 mt-0.5">Author Record ID: {{ $book->author_id }}</p>
                    </div>
                </div>
                
                <div class="mt-5 pt-3 border-t border-slate-50 flex items-center justify-between">
                    <span class="text-xs font-bold px-2 py-0.5 rounded-md bg-emerald-50 text-emerald-600 border border-emerald-100">Available</span>
                    <button onclick="alert('Demo Mode: Online payment modules are currently being linked to the Chapa API engine.')" 
                            class="bg-indigo-50 text-indigo-600 border border-indigo-100 px-3 py-1.5 rounded-lg text-[11px] font-bold hover:bg-indigo-100 transition">
                        Pay & Borrow
                    </button>
                </div>
            </div>
        @empty
            <!-- Beautiful Empty State Placeholder Fallback -->
            <div class="col-span-full bg-white border border-slate-200 border-dashed rounded-2xl p-12 text-center">
                <p class="text-sm font-bold text-slate-500">No catalogue item sets available yet.</p>
                <p class="text-xs text-slate-400 mt-1">Please log into your Staff Portal to insert your first books into the system database!</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
