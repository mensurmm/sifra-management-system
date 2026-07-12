@props(['title' => 'Nothing here yet', 'description' => 'Start by adding your first record.'])
<div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-8 text-center">
    <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
    <p class="mt-2 text-sm text-slate-600">{{ $description }}</p>
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
