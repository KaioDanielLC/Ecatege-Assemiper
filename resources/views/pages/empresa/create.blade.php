<x-app-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-50">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-6" >
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Cadastrar Empresa/Parceiro</h2>

            <form action="{{ route('empresa.store') }}" method="POST" >
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nome_empresa" class="block text-sm font-medium text-gray-600">Nome da Empresa<span class="text-red-700">*</span></label>
                        <input name="nome_empresa" id="nome_empresa" placeholder="Ecatege" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="nome_dono" class="block text-sm font-medium text-gray-600">Nome do Titular<span class="text-red-700">*</span></label>
                        <input name="nome_dono" id="nome_dono" placeholder="Gilvam" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="endereco" class="block text-sm font-medium text-gray-600">Endereço<span class="text-red-700">*</span></label>
                        <input name="endereco" id="endereco" placeholder="Rua/Avenida/Travessa" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div x-data>
                        <label for="telefone" class="block text-sm font-medium text-gray-600">Telefone<span class="text-red-700">*</span></label>
                        <input x-mask="(99) 9999-9999" placeholder="(99) 9999-9999" name="telefone" id="telefone" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div x-data>
                        <label for="celular" class="block text-sm font-medium text-gray-600">Celular<span class="text-red-700">*</span></label>
                        <input x-mask="(99) 9999-9999" placeholder="(99) 9999-9999" name="celular" id="celular" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email<span class="text-red-700">*</span></label>
                        <input name="email" id="email" placeholder="user@gmail.com" required type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">   
                        @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-md shadow-md" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10A8 8 0 110 10a8 8 0 0118 0zm-8-4a1 1 0 00-1 1v2a1 1 0 102 0V7a1 1 0 00-1-1zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="mt-2 text-base">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                        @endif


                    </div>
                </div>
                <div class="mt-6 flex justify-end gap-4">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Confirmar</button>
                    <a href="{{ route('empresa.index') }}">
                        <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Cancelar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>