<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold text-dark">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-dark-700">
            {{ __('Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-dark-900">
                {{ __('Tem certeza que deseja deletar sua conta ?') }}
            </h2>

            <p class="mt-1 text-sm text-dark-600">
                {{ __('Por favor, digite sua senha para confirmar que deseja excluir permanentemente sua conta
.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
