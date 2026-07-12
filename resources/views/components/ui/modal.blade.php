@props(['id' => 'modal', 'title' => null])
<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/40 p-4">
    <div class="w-full max-w-lg rounded-2xl bg-white p-6 shadow-xl">
        @if($title)
            <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
        @endif
        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</div>
