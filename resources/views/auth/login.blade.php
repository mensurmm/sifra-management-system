@extends('layouts.guest')

@section('content')
<div class="w-full max-w-md bg-white border border-slate-100 rounded-2xl shadow-xl p-6 sm:p-8 animate-fade-in">
    
    
    <div class="flex flex-col items-center text-center mb-8 select-none">
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
        <h2 class="text-xl font-black text-slate-800 tracking-wide uppercase">SIFRA GATEWAY</h2>
        <p class="text-xs font-semibold text-slate-400 mt-1 uppercase tracking-widest">Library & Café Ecosystem</p>
    </div>

    <!-- Session Status Flash Block -->
    @if (session('status'))
        <div class="mb-4 rounded-xl border border-emerald-100 bg-emerald-50/50 p-4 text-xs font-bold text-emerald-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5 m-0">
        @csrf

        <!-- Field 1: Email Address (Native HTML Input with Clean UI Kit Styling) -->
        <div class="space-y-1.5">
            <x-ui.input-label for="email" :value="__('Email Address')" />
            <input id="email" 
                   type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   autofocus 
                   autocomplete="username" 
                   placeholder="name@company.com" 
                   class="h-10 w-full bg-slate-50 border border-slate-200/80 rounded-xl px-4 text-xs font-medium text-slate-700 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-500/5 transition-all shadow-2xs" />
            @if($errors->has('email'))
                <x-ui.input-error :messages="$errors->get('email')" />
            @endif
        </div>

        <!-- Field 2: Interactive Password with Visibility Toggle Component -->
        <div class="space-y-1.5" x-data="{ showPassword: false }">
            <x-ui.input-label for="password" :value="__('Security Password')" />
            <div class="relative flex items-center">
                <input id="password" 
                       :type="showPassword ? 'text' : 'password'" 
                       name="password" 
                       required 
                       autocomplete="current-password" 
                       placeholder="••••••••" 
                       class="h-10 w-full bg-slate-50 border border-slate-200/80 rounded-xl pl-4 pr-11 text-xs font-medium text-slate-700 placeholder-slate-400 outline-none focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-500/5 transition-all shadow-2xs" />
                
                <!-- Professional Interactive Toggle Button -->
                <button type="button" 
                        @click="showPassword = !showPassword" 
                        class="absolute right-3 p-1 text-slate-400 hover:text-slate-600 transition-colors focus:outline-none cursor-pointer"
                        title="Toggle Password Visibility">
                    <!-- Eye Icon -->
                    <svg x-show="!showPassword" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <!-- Eye Slash Icon -->
                    <svg x-show="showPassword" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.477 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 11-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </button>
            </div>
            @if($errors->has('password'))
                <x-ui.input-error :messages="$errors->get('password')" />
            @endif
        </div>

        <!-- Field 3: Remember Cookie and Password Recovery Link -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none group">
                <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded-md border-slate-200/80 text-indigo-600 shadow-2xs focus:ring-indigo-500/10 transition-all cursor-pointer">
                <span class="ms-2 text-xs font-bold text-slate-500 group-hover:text-slate-700 transition-colors">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-xs font-bold text-indigo-600 hover:text-indigo-700 hover:underline transition-colors" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <!-- Action Authenticate Trigger Button -->
        <div class="pt-2">
            <x-ui.primary-button class="w-full">
                {{ __('Authenticate Session') }}
            </x-ui.primary-button>
        </div>
    </form>
</div>
@endsection
