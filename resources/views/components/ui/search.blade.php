@props(['placeholder' => 'Search'])
<div class="relative">
    <input type="search" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-700 focus:border-indigo-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-100']) }} />
</div>
