<section class="space-y-6">
    <header>
        <h2 class="text-sm font-bold text-slate-800">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-xs text-slate-400 leading-relaxed">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-4 max-w-xl">
        @csrf
        @method('patch')

        <div>
            <x-ui.input-label for="name" :value="__('Name')" />
            <x-ui.input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-ui.input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-ui.input-label for="email" :value="__('Email')" />
            <x-ui.input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-ui.input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 bg-amber-50 border border-amber-200 rounded-xl p-3">
                    <p class="text-xs text-amber-800 font-medium">
                        {{ __('Your email address remains unverified.') }}
                        <button form="send-verification" class="block mt-1 underline text-xs font-bold text-amber-900 hover:text-indigo-600 focus:outline-none">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-bold text-xs text-emerald-600">
                            {{ __('A fresh verification token asset link has been dispatched.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-ui.button type="submit" style="background-color: #4f46e5; color: #ffffff;">
                {{ __('Update Profile Record') }}
            </x-ui.button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs font-bold text-emerald-600">
                    {{ __('Changes Saved Successfully.') }}
                </p>
            @endif
        </div>
    </form>
</section>
