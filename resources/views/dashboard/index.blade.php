@extends('layouts.app')

@section('content')
@php
    // 1. Dynamic Greeting Engine
    $hour = date('H');
    $greeting = $hour < 12 ? 'Good Morning' : ($hour < 18 ? 'Good Afternoon' : 'Good Evening');
    $userName = auth()->check() ? auth()->user()->name : 'Mensur';

    // 2. High-Fidelity Stats Grid Configuration
        // 2. High-Fidelity Stats Grid Array Config utilizing real model dependencies passed from your controller
        // High-Fidelity Stats Grid Array Config utilizing real model dependencies passed from your controller
        // Add an optional 'url' mapping property cleanly inside your configuration array items
    $stats = [
        'revenue' => ['label' => "Today's Revenue", 'count' => '14,850', 'currency' => 'ETB', 'trend' => '12.5%', 'subtext' => 'from yesterday', 'bg' => 'bg-[#E6F4EA]', 'text' => 'text-[#137333]', 'type' => 'revenue', 'url' => '/finance/reports'],
        'borrowed' => ['label' => 'Library Books', 'count' => '24', 'currency' => '', 'trend' => '', 'subtext' => 'Total Books Volume', 'bg' => 'bg-[#EEF2FF]', 'text' => 'text-[#4F46E5]', 'type' => 'borrowed', 'url' => '/books'],
        
        // 💡 Fully integrated Categories link
        'categories' => ['label' => 'Book Categories', 'count' => '0', 'currency' => '', 'trend' => '', 'subtext' => 'Active categories cataloged', 'bg' => 'bg-[#E6F4EA]', 'text' => 'text-[#137333]', 'type' => 'members', 'url' => '/book-categories'],
        
        'cafe_sales' => ['label' => 'Café Sales', 'count' => '9,450', 'currency' => 'ETB', 'trend' => '8.1%', 'subtext' => 'from yesterday', 'bg' => 'bg-[#FDF2F2]', 'text' => 'text-[#9B1C1C]', 'type' => 'cafe_sales', 'url' => '/cafe/products'],
        'alerts' => ['label' => 'Total Authors Group', 'count' => '0', 'currency' => '', 'trend' => 'alert', 'subtext' => 'Items need attention', 'bg' => 'bg-[#FFF7ED]', 'text' => 'text-[#EA580C]', 'type' => 'alerts', 'url' => '/authors'],
    ];




    // 3. Middle Timeline Activity Stream Dataset
    $activityLogStream = [
        ['title' => 'Book borrowed', 'desc' => 'The Alchemist by Paulo Coelho borrowed by <span class="font-semibold text-slate-700">Abeba Tesfaye</span>', 'time' => '10:30 AM'],
        ['title' => 'New member registered', 'desc' => '<span class="font-semibold text-slate-700">Kidist Alemu</span> joined as a new member', 'time' => '09:15 AM'],
        ['title' => 'Café sale completed', 'desc' => 'Invoice <span class="font-mono font-semibold text-slate-700">#INV-2025-0157</span>', 'time' => '09:00 AM'],
        ['title' => 'Book returned', 'desc' => 'Atomic Habits by James Clear returned by <span class="font-semibold text-slate-700">Henok Mengistu</span>', 'time' => 'Yesterday'],
        ['title' => 'Inventory alert', 'desc' => '3 items are running low in stock', 'time' => 'Yesterday'],
    ];

    // 4. Middle Donut Chart Dataset
    $topProductsBreakdown = [
        ['name' => 'Americano', 'amount' => '2,850', 'color' => '#78350F'],
        ['name' => 'Latte', 'amount' => '2,100', 'color' => '#FDBA74'],
        ['name' => 'Cappuccino', 'amount' => '1,950', 'color' => '#FCA5A5'],
        ['name' => 'Mocha', 'amount' => '1,350', 'color' => '#A78BFA'],
        ['name' => 'Others', 'amount' => '1,200', 'color' => '#94A3B8'],
    ];

    // 5. Bottom Low Stock Warnings Dataset
    $bottomLowStockItems = [
        ['name' => 'Ethiopian Coffee Beans', 'category' => 'Café', 'stock' => 2, 'status' => 'Low Stock'],
        ['name' => 'Paper Cups', 'category' => 'Café', 'stock' => 5, 'status' => 'Low Stock'],
        ['name' => 'Green Tea', 'category' => 'Café', 'stock' => 1, 'status' => 'Out of Stock'],
    ];

    // 6. Bottom Popular Books Rating Dataset
    $bottomPopularBooks = [
        ['title' => 'The Alchemist', 'author' => 'Paulo Coelho', 'borrowed_count' => 12, 'rating' => '4.8'],
        ['title' => 'Atomic Habits', 'author' => 'James Clear', 'borrowed_count' => 9, 'rating' => '4.7'],
        ['title' => 'Think and Grow Rich', 'author' => 'Napoleon Hill', 'borrowed_count' => 7, 'rating' => '4.6'],
    ];
    
@endphp

<div class="space-y-4 sm:space-y-6 p-3 sm:p-4 md:p-6 bg-slate-50 min-h-screen">
    
    <!-- Welcome Header Banner Component Section -->
    <div class="relative overflow-hidden rounded-xl sm:rounded-2xl bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 border border-slate-800 p-4 sm:p-6 md:p-8 shadow-xl">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-25"></div>
        <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 md:gap-6">
            <div class="space-y-1">
                <p class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-indigo-400/90">{{ $greeting }},</p>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold tracking-tight text-white">{{ $userName }}</h2>
                <p class="text-xs sm:text-sm font-medium text-slate-400 max-w-2xl">Here is your high-velocity operational summary. Sifra platforms are stable across both library lending facilities and café point-of-sale registers.</p>
            </div>
            <div class="flex flex-wrap items-center gap-2 sm:gap-3 shrink-0">
                <div class="px-3 py-1.5 sm:px-4 sm:py-2 rounded-xl bg-slate-800/40 border border-slate-700/50 flex flex-col items-center">
                    <span class="text-[8px] sm:text-[10px] font-bold text-slate-500 uppercase tracking-wider">Active Workspace</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-200 mt-0.5">Addis Ababa Core</span>
                </div>
                <div class="px-3 py-1.5 sm:px-4 sm:py-2 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex flex-col items-center">
                    <span class="text-[8px] sm:text-[10px] font-bold text-indigo-400 uppercase tracking-wider">Operational Engine</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-indigo-300 mt-0.5">Online v1.0.0</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 1: UI Kit Modular Metric Cards Loop Grid -->
   <!-- Row 1: UI Kit Modular Metric Cards Loop Grid with Categories Routing Interceptor -->
<!-- Row 1: UI Kit Modular Metric Cards Loop Grid (Hardcoded URL Fallbacks for Stability) -->

   
<!-- Row 1: UI Kit Modular Metric Cards Loop Grid (Perfect, highly maintainable loops) -->
<div class="grid grid-cols-1 gap-3 sm:gap-4 md:gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 w-full">
    @foreach($stats as $key => $stat)
        <x-ui.stat-card 
            :label="$stat['label']"
            :count="$stat['count']"
            :currency="$stat['currency']"
            :trend="$stat['trend']"
            :subtext="$stat['subtext']"
            :bg-color="$stat['bg']"
            :text-color="$stat['text']"
            :type="$stat['type']"
            :url="$stat['url'] ?? null" 
        />
    @endforeach
</div>



    <!-- Row 2: Middle Analytics Segment Chart Blocks -->
    <div class="grid grid-cols-1 gap-4 sm:gap-6 md:grid-cols-2 lg:grid-cols-3 w-full">
        <x-ui.revenue-chart total="72,850" library="32,400" cafe="40,450" />
        <x-ui.activities-timeline :activities="$activityLogStream" />
        <x-ui.products-donut sales="9,450" :products="$topProductsBreakdown" />
    </div>

    <!-- Row 3: Bottom Low Stock Table & Popular Book Components -->
    <div class="grid grid-cols-1 gap-4 sm:gap-6 md:grid-cols-2 lg:grid-cols-3 w-full">
        <x-ui.low-stock-table :items="$bottomLowStockItems" />
        <x-ui.popular-books :books="$bottomPopularBooks" />
        <x-ui.quick-actions />
    </div>

</div>
@endsection
