<x-app-layout>
    <div class="flex justify-center items-center min-h-screen mt-10 ">
        <div class="max-w-full w-11/12 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Editar Empresa/Parceiro</h2>
            <form action="{{ route('verificacao_empresa.update', ['verificacao_empresa' => $verificacaoempresa->id]) }}" method="post" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="grid grid-cols-3 md:grid-cols-4 gap-4">
                    <div class="col-span-4">
                            <h3 class="text-lg font-bold text-gray-800 ">Informações Principais</h3>
                        </div>
                        <div>
                            <label for="ano" class="block text-sm font-bold text-gray-600">
                                Ano <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->ano}}"
                                name="ano"
                                id="ano"
                                required
                                placeholder="2023,2024,2025....."
                                maxlength="4"
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <label for="numero_pasta" class="block text-sm font-bold text-gray-600">
                                Nº da Pasta <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->numero_pasta}}"
                                name="numero_pasta"
                                id="numero_pasta"
                                placeholder="23,48,50... "
                                required
                                type="text"
                                maxlength="5"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <label for="nome_fantasia" class="block text-sm font-bold text-gray-600">
                                Nome da Empresa <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->nome_fantasia}}"
                                name="nome_fantasia"
                                id="nome_fantasia"
                                placeholder="Ecatege/Assemiper/...."
                                required
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <label for="inscricao_municipal" class="block text-sm font-bold text-gray-600">
                                Inscrição Municipal <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->inscricao_municipal}}"
                                name="inscricao_municipal"
                                id="inscricao_municipal"
                                placeholder="111111"
                                maxlength="6"
                                minlength="6"
                                required
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <label for="area_utilizada" class="block text-sm font-bold text-gray-600">
                                Área Utilizada <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->area_utilizada}}"
                                name="area_utilizada"
                                id="area_utilizada"
                                placeholder="90"
                                required
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <label for="area_total" class="block text-sm font-bold text-gray-600">
                                Área Total <span class="text-red-700">*</span>
                            </label>
                            <input
                                value="{{ $verificacaoempresa->area_total}}"
                                name="area_total"
                                id="area_total"
                                placeholder="90"
                                required
                                type="text"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
    
                        <div>
                            <div>
                                <label for="data_validade" class="block text-sm font-bold text-gray-600">
                                    Data de Validade <span class="text-red-700">*</span>
                                </label>
                                <input
                                    value="{{ \Carbon\Carbon::parse($verificacaoempresa->data_validade)->format('Y-m-d') }}"
                                    name="data_validade"
                                    id="data_validade"
                                    required
                                    type="date"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                >

                            </div>
                        </div>

                        <!-- Prefeitura -->
                        <div class="col-span-4">
                            <h3 class="text-lg font-semibold text-gray-800 mt-5">Prefeitura</h3>
                        </div>
                        <div>
                            <label for="te_prefeitura" class="block text-sm font-bold text-gray-600">T/E (Prefeitura)</label>
                            <select name="te_prefeitura" id="te_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->te_prefeitura == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->te_prefeitura == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="tp_prefeitura" class="block text-sm font-bold text-gray-600">T/P (Prefeitura)</label>
                            <select name="tp_prefeitura" id="tp_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->tp_prefeitura == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->tp_prefeitura == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="arq_prefeitura" class="block text-sm font-bold text-gray-600">Arq. (Prefeitura)</label>
                            <select name="arq_prefeitura" id="arq_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->arq_prefeitura == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->arq_prefeitura == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="ent_prefeitura" class="block text-sm font-bold text-gray-600">Ent. (Prefeitura)</label>
                            <select name="ent_prefeitura" id="ent_prefeitura" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->ent_prefeitura == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->ent_prefeitura == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>

                        <!-- Bombeiro -->
                        <div class="col-span-4">
                            <h3 class="text-lg font-semibold text-gray-800 mt-5">Bombeiro</h3>
                        </div>
                        <div>
                            <label for="te_bombeiro" class="block text-sm font-bold text-gray-600">T/E (Bombeiro)</label>
                            <select name="te_bombeiro" id="te_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->te_bombeiro == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->te_bombeiro == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="tp_bombeiro" class="block text-sm font-bold text-gray-600">T/P (Bombeiro)</label>
                            <select name="tp_bombeiro" id="tp_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->tp_bombeiro == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->tp_bombeiro == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="arq_bombeiro" class="block text-sm font-bold text-gray-600">Arq. (Bombeiro)</label>
                            <select name="arq_bombeiro" id="arq_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->arq_bombeiro == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->arq_bombeiro == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="ent_bombeiro" class="block text-sm font-bold text-gray-600">Ent. (Bombeiro)</label>
                            <select name="ent_bombeiro" id="ent_bombeiro" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->ent_bombeiro == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->ent_bombeiro == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>

                        <div class="col-span-4">
                            <h3 class="text-lg font-semibold text-gray-800 mt-5">Vigilância</h3>
                        </div>
                        <div>
                            <label for="te_vigilancia" class="block text-sm font-bold text-gray-600">T/E (Vigilância)</label>
                            <select name="te_vigilancia" id="te_vigilancia" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->te_vigilancia == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->te_vigilancia == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="tp_vigilancia" class="block text-sm font-bold text-gray-600">T/P (Vigilância)</label>
                            <select name="tp_vigilancia" id="tp_vigilancia" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->tp_vigilancia == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->tp_vigilancia == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="arq_vigilancia" class="block text-sm font-bold text-gray-600">Arq. (Vigilância)</label>
                            <select name="arq_vigilancia" id="arq_vigilancia" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->arq_vigilancia == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->arq_vigilancia == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="ent_vigilancia" class="block text-sm font-bold text-gray-600">Ent. (Vigilância)</label>
                            <select name="ent_vigilancia" id="ent_vigilancia" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->ent_vigilancia == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->ent_vigilancia == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>

                        <div class="col-span-4">
                            <h3 class="text-lg font-semibold text-gray-800 mt-5">Funcionamento</h3>
                        </div>
                        <div>
                            <label for="te_funcionamento" class="block text-sm font-bold text-gray-600">T/E (Funcionamento)</label>
                            <select name="te_funcionamento" id="te_funcionamento" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->te_funcionamento == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->te_funcionamento == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="tp_funcionamento" class="block text-sm font-bold text-gray-600">T/P (Funcionamento)</label>
                            <select name="tp_funcionamento" id="tp_funcionamento" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->tp_funcionamento == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->tp_funcionamento == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="arq_funcionamento" class="block text-sm font-bold text-gray-600">Arq. (Funcionamento)</label>
                            <select name="arq_funcionamento" id="arq_funcionamento" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->arq_funcionamento == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->arq_funcionamento == '❌' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="ent_funcionamento" class="block text-sm font-bold text-gray-600">Ent. (Funcionamento)</label>
                            <select name="ent_funcionamento" id="ent_funcionamento" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="✔️" {{ $verificacaoempresa->ent_funcionamento == '✔️' ? 'selected' : '' }}>Sim</option>
                                <option value="❌" {{ $verificacaoempresa->ent_funcionamento == '❌' ? 'selected' : '' }}>Não</option>
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