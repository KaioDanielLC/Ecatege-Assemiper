<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="flex justify-center items-center min-h-screen bg-gray-50">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Editar Empresa/Parceiro</h2>
            <form action="{{ route('empresa.update', ['empresa' => $empresa->id]) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nome_empresa" class="block text-sm font-medium text-gray-600">Nome da Empresa*</label>
                        <input value="{{ $empresa->nome_empresa }}" name="nome_empresa" id="nome_empresa" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="nome_dono" class="block text-sm font-medium text-gray-600">Nome do Titular*</label>
                        <input value="{{ $empresa->nome_dono }}" name="nome_dono" id="nome_dono" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="endereco" class="block text-sm font-medium text-gray-600">Endereço*</label>
                        <input value="{{ $empresa->endereco }}" name="endereco" id="endereco" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div x-data>
                        <label for="telefone" class="block text-sm font-medium text-gray-600">Telefone*</label>
                        <input value="{{ $empresa->telefone }}" x-mask="(99) 9999-9999" placeholder="(99) 9999-9999" name="telefone" id="telefone" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div x-data>
                        <label for="celular" class="block text-sm font-medium text-gray-600">Celular*</label>
                        <input value="{{ $empresa->celular }}" x-mask="(99) 9999-9999" placeholder="(99) 9999-9999" name="celular" id="celular" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email*</label>
                        <input value="{{ $empresa->email }}" name="email" id="email" required type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="mt-6 flex justify-end gap-4">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Substituir</button>
                    <a href="{{ route('empresa.index') }}">
                        <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Cancelar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
