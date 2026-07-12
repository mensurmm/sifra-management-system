@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-xs font-black text-slate-500 uppercase tracking-wider mb-2']) }}>
    {{ $value ?? $slot }}
</label>
