@extends('website.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-12 py-16 bg-white border border-slate-100 rounded-3xl my-12 shadow-xs">
    <h2 class="text-2xl font-black text-slate-900">The SIFRA Café Menu</h2>
    <p class="text-xs text-slate-400 mt-1">Freshly brewed single-origin Ethiopian coffee and artisan pastries.</p>
    
    <!-- Include your dedicated cafe preview section layout component -->
    <div class="mt-8">
        @include('website.sections.cafe.today-special')
    </div>
</div>
@endsection
