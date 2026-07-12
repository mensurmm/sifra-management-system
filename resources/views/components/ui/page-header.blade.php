@props(['title' => 'Page', 'description' => null])
<div class="flex flex-col gap-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <h1 class="text-2xl font-semibold text-slate-900">{{ $title }}</h1>
    @if($description)
        <p class="text-sm text-slate-600">{{ $description }}</p>
    @endif
</div>
