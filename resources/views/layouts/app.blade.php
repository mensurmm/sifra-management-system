<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#F8FAFC] antialiased">
<head>
    {{-- <x-ui.theme /> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta class="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sifra') }} — Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
        
        /* Premium Webkit Scrollbar Eraser for Sidebar Module Layout */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Enterprise Dashboard Interactive Card Utility Architecture */
        .stat-card-link-wrapper .group-hover\:border-indigo-500 {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .stat-card-link-wrapper:hover .group-hover\:border-indigo-500 {
            border-color: #4f46e5 !important;
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.08), 0 2px 4px -1px rgba(79, 70, 229, 0.04) !important;
        }
    </style>
</head>
<body class="h-full overflow-hidden bg-[#F8FAFC] text-slate-800" x-data="{ mobileSidebarOpen: false }">

    <div class="flex h-full w-full overflow-hidden">
        
        <div x-show="mobileSidebarOpen" 
             x-transition:enter="transition-opacity ease-linear duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-40 bg-slate-900/30 backdrop-blur-xs lg:hidden"
             @click="mobileSidebarOpen = false"
             x-cloak>
         </div>

        <aside class="fixed inset-y-0 left-0 z-50 flex h-full w-64 flex-col bg-[#0F172A] border-r border-slate-800/40 transition-transform duration-200 ease-in-out lg:static lg:translate-x-0"
               :class="mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
            @include('components.ui.sidebar')
        </aside>

        <div class="flex flex-1 flex-col overflow-hidden min-w-0">
            
            <header class="sticky top-0 z-30">
                @include('components.ui.navbar')
            </header>

            <main id="main-content" class="flex-1 overflow-y-auto px-6 py-6 sm:px-8 focus:outline-hidden" tabindex="-1">
                <div class="mx-auto max-w-[1600px] space-y-6">
                    @yield('content')
                </div>
            </main>
        </div>

    </div>

</body>
</html>