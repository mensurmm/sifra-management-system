@extends('layouts.app')

@section('content')
<div class="space-y-4">
    @include('profile.partials.nav')
    
    <div class="bg-white border border-slate-100 rounded-2xl p-6 max-w-2xl shadow-xs flex items-center gap-6">
        <div class="h-16 w-16 bg-indigo-600 rounded-2xl flex items-center justify-center font-black text-xl text-white">
            {{ substr($user->name ?? $user->full_name ?? 'ME', 0, 2) }}
        </div>
        <div class="flex-1 min-w-0">
            <h2 class="text-base font-bold text-slate-800">{{ $user->name ?? $user->full_name }}</h2>
            <p class="text-xs text-slate-400 mt-0.5">{{ $user->email }}</p>
            <span class="inline-block mt-2 px-2.5 py-0.5 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-indigo-50 text-indigo-600 border border-indigo-100">
                {{ $user->role ?? 'Platform Administrator' }}
            </span>
        </div>
    </div>
</div>
@endsection
