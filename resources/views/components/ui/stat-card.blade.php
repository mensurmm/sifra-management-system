@props([
    'label',
    'count',
    'currency' => '',
    'trend' => '',
    'subtext' => '',
    'bgColor' => 'bg-slate-50',
    'textColor' => 'text-slate-600',
    'type' => 'default',
    'url' => null
])

@php
    $isAlert = $trend === 'alert';
@endphp

@if($isAlert)
<style>
    @keyframes enterpriseAlertGlow {
        0%, 100% { border-color: rgb(244, 63, 94); box-shadow: 0 0 0 1px rgba(244, 63, 94, 0.05); }
        50% { border-color: rgb(225, 29, 72); box-shadow: 0 0 0 3px rgba(244, 63, 94, 0.15); }
    }
    @keyframes professionalTextPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    .animate-enterprise-card { animation: enterpriseAlertGlow 2s infinite ease-in-out; }
    .animate-enterprise-text { animation: professionalTextPulse 2s infinite ease-in-out; }
</style>
@endif

@if($url)
<a href="{{ $url }}" class="block w-full h-full cursor-pointer stat-card-link-wrapper">
@endif

    <div class="flex flex-col items-start rounded-2xl border p-5 bg-white w-full min-w-0 h-full transition-all duration-200 group-hover:border-indigo-500
        {{ $isAlert ? 'animate-enterprise-card border-rose-500' : 'border-slate-100/80' }}">
        
        <!-- Large Vector Container Block -->
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full mb-4.5 {{ $isAlert ? 'bg-rose-50 text-rose-600' : "$bgColor $textColor" }}">
            @if($type === 'revenue')
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.281m5.94 2.281l-2.28 5.941" />
                </svg>
            @elseif($type === 'borrowed')
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            @elseif($type === 'members')
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235A10.137 10.137 0 0110 18c2.439 0 4.7.86 6.47 2.295" />
                </svg>
            @elseif($type === 'cafe_sales')
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                    <path stroke-linecap="round" d="M14 5c.2-.5.2-1 0-1.5M16 4.5c.2-.5.2-1 0-1.5" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8h7a1 1 0 011 1v2.5a3.5 3.5 0 01-3.5 3.5h-1A3.5 3.5 0 019 11.5V9a1 1 0 011-1z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 9h1a1.5 1.5 0 011.5 1.5v0A1.5 1.5 0 0118 12h-1" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 17h9" />
                </svg>
            @else
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                </svg>
            @endif
        </div>

        <!-- Text Body Section -->
        <div class="w-full flex-1 flex flex-col justify-between">
            <div>
                <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block leading-none">{{ $label }}</span>
                <div class="mt-3 mb-1.5 flex items-baseline gap-1">
                    <span class="text-2xl font-black text-slate-800 tracking-tight leading-none">{{ $count }}</span>
                    @if($currency)
                        <span class="text-xs font-bold text-slate-500 uppercase ml-0.5 tracking-wide leading-none">{{ $currency }}</span>
                    @endif
                </div>
            </div>
            <div class="flex items-center text-[11px] font-bold mt-1.5 w-full">
                @if($trend && !$isAlert)
                    <span class="inline-flex items-center text-emerald-600 mr-1.5 shrink-0">
                        <svg class="h-3 w-3 mr-0.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                        </svg>
                        {{ $trend }}
                    </span>
                @endif
                <span class="truncate tracking-wide {{ $isAlert ? 'text-rose-600 font-bold animate-enterprise-text' : 'text-slate-400 font-semibold' }}">
                    {{ $subtext }}
                </span>
            </div>
        </div>
    </div>

@if($url)
</a>
@endif