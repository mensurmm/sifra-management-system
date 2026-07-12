@extends('layouts.app')

@section('content')
<div class="space-y-6 p-4 sm:p-6 select-none bg-[#F8FAFC]">
    
    <!-- Management Module Header Banner Section -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-100 pb-5">
        <div class="space-y-1">
            <h2 class="text-xl font-black text-slate-800 tracking-tight flex items-center gap-2">
                <span>Book Categories</span>
            </h2>
            <p class="text-xs font-medium text-slate-400">Organize and manage your library book classification systems, genres, and divisions.</p>
        </div>
        <div class="shrink-0">
            <a href="{{ route('book-categories.create') }}" class="inline-flex items-center gap-2 rounded-xl bg-[#4f46e5] px-4 py-2.5 text-xs font-bold text-white shadow-xs hover:bg-[#4338ca] transition-all cursor-pointer">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span>+ Add New Category</span>
            </a>
        </div>
    </div>

    <!-- Feedback Message Notifications Box Container Strips -->
    @if (session('success'))
        <div class="rounded-xl border border-emerald-100 bg-emerald-50/60 p-4 text-xs font-bold text-emerald-700 flex items-center gap-2 shadow-2xs">
            <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="rounded-xl border border-rose-100 bg-rose-50/60 p-4 text-xs font-bold text-rose-700 flex items-center gap-2 shadow-2xs">
            <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <span>{{ $errors->first() }}</span>
        </div>
    @endif

    <!-- Data-Table Container Box Component Shell Base Structure -->
    <div class="bg-white border border-slate-100/80 rounded-2xl shadow-xs overflow-hidden w-full">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-left text-[11px] font-black uppercase tracking-wider text-slate-400 border-b border-slate-100 bg-slate-50/50 select-none">
                    <th class="p-4 pl-6 w-[10%]">System ID</th>
                    <th class="p-4 w-[30%]">Category Name</th>
                    <th class="p-4 w-[35%]">Description Summary</th>
                    <th class="p-4 w-[12%]">Availability</th>
                    <th class="p-4 text-right pr-6 w-[13%]">Management Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50 text-xs text-slate-600">
                @forelse($categories as $category)
                    <tr class="hover:bg-slate-50/30 transition-colors">
                        <!-- Category ID Column -->
                        <td class="p-4 pl-6 font-mono text-slate-400 font-bold text-[11px] select-all">#{{ $category->id }}</td>
                        
                        <!-- Category Title Block Column -->
                        <td class="p-4">
                            <span class="font-bold text-slate-800 text-sm tracking-tight">{{ $category->name }}</span>
                        </td>
                        
                        <!-- Description Paragraph Column -->
                        <td class="p-4 max-w-xs">
                            @if($category->description)
                                <span class="text-slate-500 font-medium leading-relaxed truncate block max-w-[280px]" title="{{ $category->description }}">
                                    {{ $category->description }}
                                </span>
                            @else
                                <span class="text-slate-300 font-medium italic select-none">No administrative description provided.</span>
                            @endif
                        </td>
                        
                        <!-- Dynamic Status Badge Render Block Column -->
                        <td class="p-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold tracking-wide select-none
                                {{ $category->is_active ? 'bg-emerald-50 text-emerald-600' : 'bg-slate-100 text-slate-400' }}">
                                <span class="h-1 w-1 rounded-full mr-1.5 {{ $category->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                {{ $category->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        
                        <!-- Action Trigger Control Links Panel Column -->
                        <td class="p-4 text-right pr-6">
                            <div class="inline-flex items-center justify-end gap-2.5">
                                <!-- Edit Button Action Trigger Link -->
                                <a href="{{ route('book-categories.edit', $category->id) }}" class="p-1.5 text-slate-400 hover:text-indigo-600 rounded-lg hover:bg-indigo-50/60 transition-all cursor-pointer" title="Edit Metadata Profile">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                                
                                <!-- Delete Button Action Trigger Form Box Panel -->
                                <form action="{{ route('book-categories.destroy', $category->id) }}" method="POST" class="inline-block m-0" onsubmit="return confirm('Delete this category? This action cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-500 rounded-lg hover:bg-rose-50/60 transition-all cursor-pointer" title="Purge Record Row">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-slate-400/80 font-medium">
                            <div class="flex flex-col items-center justify-center select-none">
                                <svg class="h-8 w-8 text-slate-300 stroke-1 mb-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.008 1.24l.885 1.77a2.25 2.25 0 002.007 1.24h1.98a2.25 2.25 0 002.007-1.24l.885-1.77a2.25 2.25 0 012.007-1.24h3.86m-18 0h18" />
                                </svg>
                                <span class="text-xs">No book categories registered yet. Click '+ Add New Category' to get started.</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Navigation Pagination Links Section Footer Footer Area Link Bar -->
        @if($categories->hasPages())
            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
                {{ $categories->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
