
@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="flex h-full w-full flex-col bg-[#111827] text-slate-300 font-sans select-none border-r border-slate-800/40">
    
    <div class="flex h-20 shrink-0 items-center px-6 border-b border-slate-800" style="background-color: #0F172A;">
        <div class="flex items-center gap-3">
            <div class="flex h-10 w-14 shrink-0 items-center justify-center text-[#f3af65]">
                <svg class="h-9 w-12" fill="none" viewBox="0 0 32 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22.5 5.5c.15-.4.15-.8 0-1.2M24.5 5c.15-.4.15-.8-.1-1.2" />
                    <path d="M13 7.5C9 4.7 5 4.7 2 6v8c3-1.3 7-1.3 11 1.5V7.5z" />
                    <path d="M13 7.5c4-2.8 8-2.8 11-1.5v8c-3-1.3-7-1.3-11 1.5V7.5z" />
                    <path d="M19 10h5.5c0 0 .5 1.5-.5 3s-2 2-2.5 2H21c-.5 0-1.5-.5-2-2v-3z" fill="#0F172A" />
                    <path d="M24.5 11h1a1.2 1.2 0 0 1 1.2 1.2v0a1.2 1.2 0 0 1-1.2 1.2h-1" />
                    <path d="M17.5 17h8" />
                </svg>
            </div>
            <div class="flex flex-col min-w-0">
                <span class="text-base font-black text-[#f3af65] tracking-wide leading-none">SIFRA</span>
                <span class="text-[10px] font-bold text-slate-400 tracking-widest uppercase mt-0.5">Library & Café</span>
            </div>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto px-3 py-4 space-y-6 no-scrollbar">
        
        <div class="space-y-1">
            <a href="/dashboard" 
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-semibold tracking-wide transition-all duration-150 {{ Request::is('dashboard*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" 
               @if(Request::is('dashboard*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>Dashboard</span>
            </a>
        </div>

        <div class="space-y-1">
            <span class="px-3 text-[10px] font-extrabold tracking-widest text-slate-500 uppercase block mb-2">Library</span>
            
            <a href="/library/books" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('library/books*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('library/books*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                <span>Books</span>
            </a>

            <a href="/library/categories" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('library/categories*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('library/categories*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.008 1.24l.885 1.77a2.25 2.25 0 002.007 1.24h1.98a2.25 2.25 0 002.007-1.24l.885-1.77a2.25 2.25 0 012.007-1.24h3.86m-18 0h18" /></svg>
                <span>Categories</span>
            </a>

            <a href="/library/authors" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('library/authors*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('library/authors*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                <span>Authors</span>
            </a>

            <a href="/library/publishers" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('library/publishers*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('library/publishers*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 16.5h1.5m3 0h1.5" /></svg>
                <span>Publishers</span>
            </a>

            <a href="{{ route('members.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Route::is('members.index') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Route::is('members.index')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" /></svg>
                <span>Members</span>
            </a>
            
            <a href="{{ route('borrowings.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Route::is('borrowings.index') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Route::is('borrowings.index')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.875L6 12zm0 0h7.5" /></svg>
                <span>Borrowing</span>
            </a>
            
            <a href="{{ route('returns.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Route::is('returns.index') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Route::is('returns.index')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" /></svg>
                <span>Returns</span>
            </a>
        </div>

        <div class="space-y-1">
            <span class="px-3 text-[10px] font-extrabold tracking-widest text-slate-500 uppercase block mb-2">Café</span>
            
            <a href="/cafe/pos" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('cafe/pos*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('cafe/pos*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                <span>POS Register</span>
            </a>

            <a href="/cafe/products" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('cafe/products*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('cafe/products*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" /></svg>
                <span>Products</span>
            </a>

            <a href="/cafe/inventory" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold transition-all duration-150 {{ Request::is('cafe/inventory*') ? 'text-white font-bold' : 'text-slate-400 hover:bg-slate-800/40 hover:text-slate-200' }}" @if(Request::is('cafe/inventory*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h12M6 10h12m-12 4h12m-12 4h12" /></svg>
                <span>Inventory</span>
            </a>
        </div>

        @if(auth()->check() && auth()->user()->hasRole('admin'))
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-extrabold tracking-widest text-slate-500 uppercase block mb-2">Reports</span>
                <a href="/reports" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold text-slate-400 hover:bg-slate-800/40 hover:text-slate-200 {{ Request::is('reports*') ? 'text-white font-bold' : '' }}" @if(Request::is('reports*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0V12m0 4.5v3m3.75-7.5V12m0 4.5v3M15 7.5V12m0 4.5v3M20.25 21H3.75" />
                    </svg>
                    <span>Business Analytics</span>
                </a>
            </div>

            <div class="space-y-1">
                <span class="px-3 text-[10px] font-extrabold tracking-widest text-slate-500 uppercase block mb-2">Management</span>
                <a href="/staff" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold text-slate-400 hover:bg-slate-800/40 hover:text-slate-200 {{ Request::is('staff*') ? 'text-white font-bold' : '' }}" @if(Request::is('staff*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <span>Staff Workspace</span>
                </a>
                
                <a href="/settings" class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs font-semibold text-slate-400 hover:bg-slate-800/40 hover:text-slate-200 {{ Request::is('settings*') ? 'text-white font-bold' : '' }}" @if(Request::is('settings*')) style="background-color: #4f46e5; color: #ffffff;" @endif>
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.43l-1.003.767a1.123 1.123 0 00-.417 1.03c.004.074.006.148.006.222 0 .074-.002.148-.006.222a1.123 1.123 0 00.417 1.03l1.003.767a1.125 1.125 0 01.26 1.43l-1.296 2.247a1.125 1.125 0 01-1.37.49l-1.216-.456a1.125 1.125 0 00-1.075.124c-.073.044-.146.087-.22.128-.332.183-.582.495-.645.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281a1.125 1.125 0 00-.645-.869c-.074-.04-.147-.083-.22-.127a1.125 1.125 0 00-1.075-.124l-1.217.456a1.125 1.125 0 01-1.37-.49l-1.296-2.247a1.125 1.125 0 01.26-1.43l1.003-.767a1.122 1.122 0 00.417-1.03c-.004-.074-.006-.148-.006-.222 0-.074.002-.148.006-.222a1.122 1.122 0 00-.417-1.03l-1.003-.767a1.125 1.125 0 01-.26-1.43l1.296-2.247a1.125 1.125 0 011.37-.49l1.216.456c.356.133.751.072 1.076-.124.073-.041.146-.084.22-.128.332-.183.582-.495.645-.869l.213-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Global Settings</span>
                </a>
            </div>
        @endif

    </div>
</div>

