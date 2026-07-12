@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-[11px] font-semibold text-rose-500 space-y-1 mt-1.5 list-none pl-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="flex items-center gap-1 animate-fade-in">
                <span class="text-rose-500 font-bold">•</span>
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif
