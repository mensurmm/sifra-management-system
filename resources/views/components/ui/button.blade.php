@props(['variant' => 'primary', 'href' => null])
@php
$base = 'inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold transition';
$variants = [
    'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700',
    'secondary' => 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50',
    'danger' => 'bg-rose-600 text-white hover:bg-rose-700',
];
@endphp
@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </button>
@endif
