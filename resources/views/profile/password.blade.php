@extends('layouts.app')

@section('content')
<div class="space-y-4">
    @include('profile.partials.nav')
    
    <div class="bg-white border border-slate-100 rounded-2xl p-6 max-w-2xl shadow-xs">
        @include('profile.partials.update-password-form')
    </div>
</div>
@endsection
