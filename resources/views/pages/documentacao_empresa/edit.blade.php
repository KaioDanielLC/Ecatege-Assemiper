<x-app-layout>
    <div class="flex justify-center items-center min-h-screen mt-10 ">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Editar Empresa/Parceiro</h2>
            <form action="{{ route('verificacao_empresa.update', ['verificacao_empresa' => $verificacaoempresa->id]) }}" method="post">

                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label
                            for="ano"
                            class="block text-sm font-bold text-gray-600">
                            Ano
                        </label>
                        <input
                            value="{{ $verificacaoempresa->ano }}"
                            name="ano"
                            id="ano"
                            required
                            maxlength="4"
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label
                            for="numero_pasta"
                            class="block text-sm font-bold text-gray-600">
                            Nº da Pasta
                        </label>
                        <input
                            value="{{ $verificacaoempresa->numero_pasta }}"
                            name="numero_pasta"
                            id="numero_pasta"
                            required
                            maxlength="5"
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label
                            for="nome_fantasia"
                            class="block text-sm font-bold text-gray-600">
                            Nome da Empresa
                        </label>
                        <input
                            value="{{ $verificacaoempresa->nome_fantasia }}"
                            name="nome_fantasia"
                            id="nome_fantasia"
                            required
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label
                            for="inscricao_municipal"
                            class="block text-sm font-bold text-gray-600">
                            Inscrição Municipal
                        </label>
                        <input
                            value="{{ $verificacaoempresa->inscricao_municipal }}"
                            placeholder="123456"
                            name="inscricao_municipal" 
                            id="inscricao_municipal"
                            required
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            minlength="6" 
                            maxlength="6"
                            >
                    </div>
                    <div>
                        <label
                            for="area_total"
                            class="block text-sm font-bold text-gray-600">
                            Área Total
                        </label>
                        <input
                            value="{{ $verificacaoempresa->area_total }}"
                            placeholder="90"
                            name="area_total"
                            id="area_total"
                            required type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
    
                            >
                    </div>
                    <div>
                        <label for="area_utilizada" class="block text-sm font-bold text-gray-600">
                            Área Utilizada
                        </label>
                        <input
                            value="{{$verificacaoempresa->area_utilizada}}"
                            placeholder="90"
                            name="area_utilizada"
                            id="area_utilizada"
                            required
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        >
                    </div>

                    <div>
                        <label for="te_prefeitura" class="block text-sm font-bold text-gray-600">T/E (Prefeitura)</label>
                        <select name="te_prefeitura" id="te_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->te_prefeitura == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->te_prefeitura == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_prefeitura" class="block text-sm font-bold text-gray-600">T/P (Prefeitura)</label>
                        <select name="tp_prefeitura" id="tp_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->tp_prefeitura == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->tp_prefeitura == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_prefeitura" class="block text-sm font-bold text-gray-600">Ent. (Prefeitura)</label>
                        <select name="ent_prefeitura" id="ent_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->ent_prefeitura == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->ent_prefeitura == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_prefeitura" class="block text-sm font-bold text-gray-600">Arq. (Prefeitura)</label>
                        <select name="arq_prefeitura" id="arq_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->arq_prefeitura == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->arq_prefeitura == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>

                    <!-- Seção para T/E, T/P, Ent e Arq (Bombeiro) -->
                    <div>
                        <label for="te_bombeiro" class="block text-sm font-bold text-gray-600">T/E (Bombeiro)</label>
                        <select name="te_bombeiro" id="te_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->te_bombeiro == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->te_bombeiro == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_bombeiro" class="block text-sm font-bold text-gray-600">T/P (Bombeiro)</label>
                        <select name="tp_bombeiro" id="tp_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->tp_bombeiro == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->tp_bombeiro == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_bombeiro" class="block text-sm font-bold text-gray-600">Ent. (Bombeiro)</label>
                        <select name="ent_bombeiro" id="ent_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->ent_bombeiro == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->ent_bombeiro == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_bombeiro" class="block text-sm font-bold text-gray-600">Arq. (Bombeiro)</label>
                        <select name="arq_bombeiro" id="arq_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️" {{ $verificacaoempresa->arq_bombeiro == '✔️' ? 'selected' : '' }}>✔️</option>
                            <option value="❌" {{ $verificacaoempresa->arq_bombeiro == '❌' ? 'selected' : '' }}>❌</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 flex justify-end gap-4">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-bold text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Substituir</button>
                    <a href="{{ route('verificacao_empresa.index') }}">
                        <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Cancelar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>