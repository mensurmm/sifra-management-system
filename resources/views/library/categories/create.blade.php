@extends('layouts.app')

@section('title', 'Add New Category')

@section('content')
<div class="space-y-6 p-4 sm:p-6 select-none bg-[#F8FAFC]">
    
    <!-- Management Module Header Banner -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="space-y-1">
            <h2 class="text-xl font-black text-slate-800 tracking-tight">Add New Category</h2>
            <p class="text-xs font-medium text-slate-400">Register a new book classification genre or group into the core database index.</p>
        </div>
        <div class="shrink-0">
            <a href="{{ route('book-categories.index') }}" class="inline-flex items-center gap-2 rounded-xl bg-slate-100 border border-slate-200/60 px-4 py-2.5 text-xs font-bold text-slate-600 shadow-2xs hover:bg-slate-200/50 transition-all cursor-pointer">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                <span>Back to List</span>
            </a>
        </div>
    </div>

    <!-- Error Validation Alert Feedback Message Strip Container -->
    @if($errors->any())
        <div class="rounded-xl border border-rose-100 bg-rose-50/50 p-4 text-xs font-semibold text-rose-600">
            <ul class="list-disc pl-4 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Premium Form Content Wrapper Card Grid Box Container -->
    <div class="bg-white border border-slate-100/80 rounded-2xl shadow-xs p-6 max-w-2xl">
        <form action="{{ route('book-categories.store') }}" method="POST" class="space-y-6 m-0">
            @csrf
            
            <!-- Input 1: Category Name -->
            <div class="space-y-2">
                <label class="block text-xs font-black text-slate-500 uppercase tracking-wider">Category Name <span class="text-rose-500">*</span></label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       placeholder="e.g. Computer Science, Fiction, History..." 
                       class="h-10 w-full bg-slate-50 border border-slate-100 rounded-xl px-4 text-xs font-medium text-slate-600 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white transition-all shadow-2xs" 
                       required />
            </div>

            <!-- Input 2: Description Text Area Field -->
            <div class="space-y-2">
                <label class="block text-xs font-black text-slate-500 uppercase tracking-wider">Description</label>
                <textarea name="description" 
                          rows="4" 
                          placeholder="Provide a detailed administrative breakdown summary for books attached inside this catalog entry group..." 
                          class="w-full bg-slate-50 border border-slate-100 rounded-xl p-4 text-xs font-medium text-slate-600 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white transition-all shadow-2xs resize-none leading-relaxed">{{ old('description') }}</textarea>
            </div>

            <!-- Hidden Static Values Configuration parameters -->
            <input type="hidden" name="is_active" value="1">

            <!-- Submission Row Action Panel Block Buttons -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-50">
                <button type="reset" class="px-4 py-2.5 rounded-xl border border-slate-200/60 bg-white text-xs font-bold text-slate-500 hover:bg-slate-50 transition-all cursor-pointer">
                    Clear Form
                </button>
                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-[#4f46e5] px-5 py-2.5 text-xs font-bold text-white shadow-xs hover:bg-[#4338ca] transition-all cursor-pointer">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span>Save Category</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
