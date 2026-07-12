@extends('layouts.app')

@section('content')
<div class="space-y-4">
    @include('profile.partials.nav')
    
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2 bg-white border border-slate-100 rounded-2xl p-6 shadow-xs">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="bg-rose-50/30 border border-rose-100 rounded-2xl p-6 shadow-xs h-fit">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
