@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="space-y-6 p-4 sm:p-6 select-none bg-[#F8FAFC]">
    
    <!-- Management Module Header Banner -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="space-y-1">
            <h2 class="text-xl font-black text-slate-800 tracking-tight">Edit Category</h2>
            <p class="text-xs font-medium text-slate-400">Modify metadata properties and operational availability statuses for this genre entry.</p>
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
        <form action="{{ route('book-categories.update', $bookCategory->id) }}" method="POST" class="space-y-6 m-0">
            @csrf
            @method('PUT')
            
            <!-- Input 1: Category Name -->
            <div class="space-y-2">
                <label class="block text-xs font-black text-slate-500 uppercase tracking-wider">Category Name <span class="text-rose-500">*</span></label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name', $bookCategory->name) }}" 
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
                          class="w-full bg-slate-50 border border-slate-100 rounded-xl p-4 text-xs font-medium text-slate-600 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white transition-all shadow-2xs resize-none leading-relaxed">{{ old('description', $bookCategory->description) }}</textarea>
            </div>

            <!-- Input 3: Professional Custom Form Toggle Control -->
            <div class="space-y-2">
                <label class="block text-xs font-black text-slate-500 uppercase tracking-wider mb-3">Availability Status</label>
                <label class="relative inline-flex items-center gap-3 cursor-pointer group select-none">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" 
                           name="is_active" 
                           value="1" 
                           class="sr-only peer" 
                           {{ old('is_active', $bookCategory->is_active) ? 'checked' : '' }}>
                    
                    <!-- Clean, Enterprise-Grade Custom Slider Wrapper Base -->
                    <div class="w-10 h-6 bg-slate-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-indigo-100 dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                    
                    <div class="flex flex-col">
                        <span class="text-xs font-bold text-slate-700">Active Classification</span>
                        <span class="text-[10px] font-medium text-slate-400 mt-0.5">Toggle off to make this catalog section invisible during book borrowing entries.</span>
                    </div>
                </label>
            </div>

            <!-- Submission Row Action Panel Block Buttons -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-50">
                <a href="{{ route('book-categories.index') }}" class="px-4 py-2.5 rounded-xl border border-slate-200/60 bg-white text-xs font-bold text-slate-500 hover:bg-slate-50 transition-all text-center">
                    Cancel Updates
                </a>
                <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-[#4f46e5] px-5 py-2.5 text-xs font-bold text-white shadow-xs hover:bg-[#4338ca] transition-all cursor-pointer">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    <span>Update Category</span>
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
