@extends('layouts.app')

@section('content')
<div class="space-y-4">
    @include('profile.partials.nav')
    
    <form method="POST" action="{{ route('profile.notifications.update') }}" class="bg-white border border-slate-100 rounded-2xl p-6 max-w-2xl shadow-xs space-y-4">
        @csrf
        @method('patch')
        <div>
            <h3 class="text-sm font-bold text-slate-800">Alert Dispatch Settings</h3>
            <p class="text-xs text-slate-400 mt-0.5">Control how the library and café systems dispatch system operations events.</p>
        </div>
        
        <div class="space-y-3 pt-2">
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-xs font-semibold text-slate-700">Email alerts for overdue book items logs</span>
            </label>
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                <span class="text-xs font-semibold text-slate-700">Café inventory stock warning notification dispatches</span>
            </label>
        </div>
        
        <div class="pt-2">
            <x-ui.button type="submit" style="background-color: #4f46e5; color: #ffffff;">
                Save Notification Channels Preference
            </x-ui.button>
        </div>
    </form>
</div>
@endsection
