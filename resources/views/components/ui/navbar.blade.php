<header class="flex h-20 w-full items-center justify-between border-b border-slate-100 bg-white px-6"
        x-data="{ notificationOpen: false, profileDropdownOpen: false }">
    
    <!-- 🔴 1. SIDEBAR TOGGLE MENU BUTTON -->
    <div class="flex items-center">
        <button type="button" 
                @click="window.innerWidth >= 1024 ? $dispatch('toggle-sidebar') : mobileSidebarOpen = !mobileSidebarOpen"
                class="flex flex-col items-start gap-[4px] p-2 text-slate-800 cursor-pointer focus:outline-none" 
                title="Toggle Menu">
            <span class="h-[2px] w-[18px] bg-current rounded-full"></span>
            <span class="h-[2px] w-[12px] bg-current rounded-full"></span>
            <span class="h-[2px] w-[6px] bg-current rounded-full"></span>
        </button>
    </div>

    <!-- Center/Right Alignment Container -->
    <div class="flex items-center gap-6">
        
        <!-- 🔴 2. DYNAMIC LIVE GLOBAL SEARCH BAR FORM -->
        <form action="{{ route('global.search') }}" method="GET" class="relative flex items-center bg-[#F8FAFC] rounded-full border border-slate-100 px-4 py-1.5 h-10 w-96 group">
            <div class="pointer-events-none flex items-center text-slate-400 mr-2.5">
                <svg class="h-4 w-4 transition-colors group-focus-within:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
            <input type="text" 
                   name="query"
                   placeholder="Search books, members, invoices..." 
                   class="w-full bg-transparent text-xs font-normal text-slate-600 placeholder-slate-400 outline-none border-none p-0 focus:ring-0" 
                   autocomplete="off" />
            <kbd class="flex h-5 w-5 items-center justify-center rounded bg-slate-200/50 text-[10px] font-bold text-slate-400 ml-2">
                /
            </kbd>
        </form>

        <!-- 🔴 3. NOTIFICATION BELL LAYER WITH ACCORDION -->
        <div class="relative">
            <button type="button" 
                    @click="notificationOpen = !notificationOpen"
                    @click.outside="notificationOpen = false"
                    class="relative p-1 text-slate-700 cursor-pointer focus:outline-none" 
                    title="View Notifications">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
                <span class="absolute -top-0.5 -right-0.5 flex h-4 w-4 items-center justify-center rounded-full bg-[#EF4444] text-[9px] font-black text-white ring-2 ring-white">
                    3
                </span>
            </button>

            <!-- Slideout Notification List Overlay Container -->
            <div x-show="notificationOpen" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-1"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-1"
                 class="absolute right-0 mt-2 w-80 origin-top-right rounded-2xl bg-white p-2 shadow-xl ring-1 ring-slate-200 z-50">
                <div class="px-3 py-2 border-b border-slate-100">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Active Alerts</p>
                </div>
                <div class="divide-y divide-slate-50 max-h-64 overflow-y-auto">
                    <a href="{{ route('borrowings.index') }}" class="block p-3 hover:bg-slate-50 rounded-xl transition-colors">
                        <p class="text-xs font-bold text-slate-800">📕 Overdue Tracking Action Required</p>
                        <p class="text-[10px] text-slate-400 mt-0.5">19 book items are past due thresholds.</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- 🔴 4. USER MENU DROPDOWN INTERACTION LAYER -->
        <div class="relative">
            <!-- User Menu Dropdown Button Context -->
<button type="button" 
        @click="profileDropdownOpen = !profileDropdownOpen"
        @click.outside="profileDropdownOpen = false"
        class="flex items-center gap-3 text-left focus:outline-none cursor-pointer group">
    
    <!-- Dynamic Avatar Frame Container -->
    <div class="h-9 w-9 shrink-0 rounded-full border border-slate-200 overflow-hidden bg-slate-100 flex items-center justify-center text-xs font-bold text-indigo-600 uppercase">
        @if(Auth::user() && Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" alt="User Avatar" class="h-full w-full object-cover" />
        @else
            <!-- Generates first two letters of user's real name dynamically (e.g., "ME") -->
            {{ substr(Auth::user()->name ?? Auth::user()->full_name ?? 'ME', 0, 2) }}
        @endif
    </div>
    
    <div class="flex flex-col min-w-0">
        <!-- 💡 FIXED: Dynamically pulls your real name from the authenticated database session -->
        <span class="text-xs font-bold text-slate-800 leading-none group-hover:text-indigo-600 transition-colors">
            {{ Auth::user()->name ?? Auth::user()->full_name ?? 'Mensur Mohammed' }}
        </span>
        <span class="text-[10px] font-normal text-slate-400 mt-1 uppercase tracking-wider">
            {{ Auth::user()->role ?? 'Administrator' }}
        </span>
    </div>
    <svg class="h-3.5 w-3.5 text-slate-400 transition-transform duration-200" :class="{ 'rotate-180 text-slate-700': profileDropdownOpen }" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
    </svg>
</button>


            <!-- Profile Interactive Dropdown View -->
            <div x-show="profileDropdownOpen" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-1"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-1"
                 class="absolute right-0 mt-2 w-48 origin-top-right rounded-2xl bg-white p-1.5 shadow-xl ring-1 ring-slate-200 z-50">
                
                <div class="px-3 py-2 border-b border-slate-100 mb-1">
                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Account email</p>
                    <p class="text-xs font-medium text-slate-600 truncate mt-0.5">{{ Auth::user()->email ?? 'admin@sifra.com' }}</p>
                </div>

                <a href="/profile" class="flex items-center gap-2 px-3 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-50 rounded-xl transition-all">
                    Profile Management
                </a>

                <!-- Standard CSRF Protected Sign Out Trigger Option Form -->
                <form method="POST" action="{{ route('logout') }}" class="border-t border-slate-100 mt-1 pt-1">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 text-xs font-bold text-rose-600 hover:bg-rose-50 rounded-xl transition-all text-left focus:outline-none">
                        Sign Out Account
                    </button>
                </form>
            </div>
        </div>

    </div>
</header>
