<section class="space-y-6">
    <header>
        <h2 class="text-sm font-bold text-slate-800">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-xs text-slate-400 leading-relaxed">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-ui.button 
        type="button"
        style="background-color: #ef4444; color: #ffffff;"
        class="inline-flex items-center justify-center px-4 py-2 text-xs font-semibold rounded-xl transition-all"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        {{ __('Delete Account') }}
    </x-ui.button>

    <x-ui.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white rounded-2xl">
            @csrf
            @method('delete')

            <h2 class="text-base font-bold text-slate-800">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-2 text-xs text-slate-400 leading-relaxed">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-ui.input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-ui.input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full max-w-md"
                    placeholder="{{ __('Password') }}"
                />

                <x-ui.input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <x-ui.button type="button" style="background-color: #f1f5f9; color: #334155;" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-ui.button>

                <x-ui.button type="submit" style="background-color: #ef4444; color: #ffffff;">
                    {{ __('Confirm Deletion') }}
                </x-ui.button>
            </div>
        </form>
    </x-ui.modal>
</section>
