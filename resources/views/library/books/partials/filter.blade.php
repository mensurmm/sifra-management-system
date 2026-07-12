<form action="{{ route('library.books.index') }}" method="GET" class="flex flex-col md:flex-row items-center gap-4 w-full">
    
    <div class="relative flex-1 max-w-md w-full">
        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search books, authors, ISBN..." 
               class="w-full pl-10 pr-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:outline-hidden focus:border-indigo-500 transition-all" />
    </div>

    <div class="w-full md:w-auto">
        <select name="category" onchange="this.form.submit()" 
                class="w-full px-4 py-2 text-xs font-bold text-slate-600 bg-slate-50 border border-slate-200 rounded-xl cursor-pointer focus:outline-hidden focus:border-indigo-500">
            <option value="">All Categories</option>
            <option value="Programming" {{ request('category') == 'Programming' ? 'selected' : '' }}>Programming</option>
            <option value="Fiction" {{ request('category') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
            <option value="Self-Development" {{ request('category') == 'Self-Development' ? 'selected' : '' }}>Self-Development</option>
        </select>
    </div>

    @if(request('search') || request('category'))
        <a href="{{ route('library.books.index') }}" class="text-xs font-bold text-rose-500 hover:text-rose-700 transition-colors">
            Clear Filters
        </a>
    @endif
</form>