@props(['type' => 'info'])
@php
$classes = [
    'rounded-xl border px-4 py-3 text-sm',
    $type === 'success' ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : '',
    $type === 'danger' ? 'border-rose-200 bg-rose-50 text-rose-700' : '',
    $type === 'warning' ? 'border-amber-200 bg-amber-50 text-amber-700' : 'border-slate-200 bg-slate-50 text-slate-700',
];
@endphp
<div {{ $attributes->merge(['class' => implode($classes, ' ')]) }}>
    {{ $slot }}
</div>
