@extends('layouts.guest')

@section('content')
<div class="flex min-h-screen items-center justify-center px-6 py-12">
    <div class="w-full max-w-xl rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
        <h1 class="text-4xl font-semibold text-slate-900">Something went wrong</h1>
        <p class="mt-3 text-sm text-slate-600">Please return to the dashboard and try again.</p>
        <a href="/" class="mt-6 inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Go home</a>
    </div>
</div>
@endsection