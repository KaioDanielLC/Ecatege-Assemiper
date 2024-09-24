<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
<<<<<<< HEAD
    Para acessar o sistema da Ecatege, será necessária a verificação do email cadastrado pelo usuário. Se você não recebeu o e-mail, teremos prazer em lhe enviar outro.
=======
        Para acessar o sistema da Ecatege, será necessária a verificação do email cadastrado pelo usuário. Se você não recebeu o e-mail, teremos prazer em lhe enviar outro.    
>>>>>>> ce5283a (Email sem a logo do Laravel)
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>