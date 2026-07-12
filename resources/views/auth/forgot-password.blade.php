@extends('layouts.guest')

@section('content')
<div class="w-full max-w-md bg-white border border-slate-100 rounded-2xl shadow-xl p-6 sm:p-8 animate-fade-in">
    
    
    <div class="flex flex-col items-center text-center mb-6 select-none">
        <div class="flex h-12 w-16 shrink-0 items-center justify-center text-[#f3af65] mb-2">
            <svg class="h-10 w-14" fill="none" viewBox="0 0 32 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22.5 5.5c.15-.4.15-.8 0-1.2M24.5 5c.15-.4.15-.8-.1-1.2" />
                <path d="M13 7.5C9 4.7 5 4.7 2 6v8c3-1.3 7-1.3 11 1.5V7.5z" />
                <path d="M13 7.5c4-2.8 8-2.8 11 1.5v8c-3-1.3-7-1.3-11 1.5V7.5z" />
                <path d="M19 10h5.5c0 0 .5 1.5-.5 3s-2 2-2.5 2H21c-.5 0-1.5-.5-2-2v-3z" fill="#FFFFFF" />
                <path d="M24.5 11h1a1.2 1.2 0 0 1 1.2 1.2v0a1.2 1.2 0 0 1-1.2 1.2h-1" />
                <path d="M17.5 17h8" />
            </svg>
        </div>
        <h2 class="text-xl font-black text-slate-800 tracking-wide uppercase">Password Recovery</h2>
        <p class="text-xs font-semibold text-slate-400 mt-1 uppercase tracking-widest">Sifra Security Portal</p>
    </div>

    <!-- Descriptive Helper Text -->
    <div class="mb-6 text-xs font-medium text-slate-500 leading-relaxed bg-slate-50 p-4 rounded-xl border border-slate-100">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status Flash Block -->
    @if (session('status'))
        <div class="mb-4 rounded-xl border border-emerald-100 bg-emerald-50/50 p-4 text-xs font-bold text-emerald-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5 m-0">
        @csrf

        <!-- Field: Email Address (Using Native HTML Input with your UI Kit Styling) -->
        <div class="space-y-1.5">
            <x-ui.input-label for="email" :value="__('Email Address')" />
            <input id="email" 
                   type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   autofocus 
                   placeholder="name@company.com" 
                   class="h-10 w-full bg-slate-50 border border-slate-200/80 rounded-xl px-4 text-xs font-medium text-slate-700 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-500/5 transition-all shadow-2xs" />
            @if($errors->has('email'))
                <x-ui.input-error :messages="$errors->get('email')" />
            @endif
        </div>

        <!-- Actions Row -->
        <div class="flex items-center justify-between pt-1">
            <a href="/login" class="text-xs font-bold text-slate-400 hover:text-slate-600 transition-colors">
                Back to Sign In
            </a>
            
            <x-ui.primary-button>
                {{ __('Send Reset Link') }}
            </x-ui.primary-button>
        </div>
    </form>
</div>
@endsection
