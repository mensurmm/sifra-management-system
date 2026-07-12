<section class="space-y-6">
    <header>
        <h2 class="text-sm font-bold text-slate-800">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-xs text-slate-400 leading-relaxed">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-4 max-w-xl">
        @csrf
        @method('put')

        <div>
            <x-ui.input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-ui.input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-ui.input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-ui.input-label for="update_password_password" :value="__('New Password')" />
            <x-ui.input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-ui.input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-ui.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-ui.input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-ui.input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-ui.button type="submit" style="background-color: #4f46e5; color: #ffffff;">
                {{ __('Save Security Credentials') }}
            </x-ui.button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs font-bold text-emerald-600">
                    {{ __('Changes Saved Successfully.') }}
                </p>
            @endif
        </div>
    </form>
</section>
