<x-app-layout>
    <div class="flex justify-center items-center min-h-screen mt-6">
        <div class="max-w-full w-11/12 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Cadastrar Empresa/Parceiro</h2>

            <form action="{{ route('verificacao_empresa.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-3 md:grid-cols-4 gap-4">
                <div class="col-span-4">
                        <h3 class="text-lg font-bold text-gray-800 ">Informações Principais</h3>
                    </div>
                    <div>
                        <label for="ano" class="block text-sm font-bold text-gray-600">
                            Ano <span class="text-red-700">*</span>
                        </label>
                        <input
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
                                name="data_validade"
                                id="data_validade"
                                required
                                type="date"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>



                    <!-- Prefeitura -->

                    <div class="col-span-4">
                        <h3 class="text-lg font-semibold text-gray-800 mt-5">Prefeitura</h3>
                    </div>
                    <div>
                        <label for="te_prefeitura" class="block text-sm font-bold text-gray-600">
                            T/E (Prefeitura) <span class="text-red-700">*</span>
                        </label>
                        <select name="te_prefeitura" id="te_prefeitura" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_prefeitura" class="block text-sm font-bold text-gray-600">
                            T/P (Prefeitura) <span class="text-red-700">*</span>
                        </label>
                        <select name="tp_prefeitura" id="tp_prefeitura" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_prefeitura" class="block text-sm font-bold text-gray-600">
                            Arq. (Prefeitura) <span class="text-red-700">*</span>
                        </label>
                        <select name="arq_prefeitura" id="arq_prefeitura" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_prefeitura" class="block text-sm font-bold text-gray-600">
                            Ent. (Prefeitura) <span class="text-red-700">*</span>
                        </label>
                        <select name="ent_prefeitura" id="ent_prefeitura" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>



                    <!-- Bombeiro -->

                    <!--  -->
                    <div class="col-span-4">
                        <h3 class="text-lg font-semibold text-gray-800 mt-5">Bombeiro</h3>
                    </div>
                    <div>
                        <label for="te_bombeiro" class="block text-sm font-bold text-gray-600">
                            T/E (Bombeiro) <span class="text-red-700">*</span>
                        </label>
                        <select name="te_bombeiro" id="te_bombeiro" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_bombeiro" class="block text-sm font-bold text-gray-600">
                            T/P (Bombeiro) <span class="text-red-700">*</span>
                        </label>
                        <select name="tp_bombeiro" id="tp_bombeiro" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_bombeiro" class="block text-sm font-bold text-gray-600">
                            Arq. (Bombeiro) <span class="text-red-700">*</span>
                        </label>
                        <select name="arq_bombeiro" id="arq_bombeiro" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_bombeiro" class="block text-sm font-bold text-gray-600">
                            Ent. (Bombeiro) <span class="text-red-700">*</span>
                        </label>
                        <select name="ent_bombeiro" id="ent_bombeiro" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>


                    <!-- Vigilância -->

                    <div class="col-span-4">
                        <h3 class="text-lg font-semibold text-gray-800 mt-5">Vigilância</h3>
                    </div>
                    <div>
                        <label for="te_vigilancia" class="block text-sm font-bold text-gray-600">
                            T/E (Vigilância) <span class="text-red-700">*</span>
                        </label>
                        <select name="te_vigilancia" id="te_vigilancia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_vigilancia" class="block text-sm font-bold text-gray-600">
                            T/P (Vigilância) <span class="text-red-700">*</span>
                        </label>
                        <select name="tp_vigilancia" id="tp_vigilancia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_vigilancia" class="block text-sm font-bold text-gray-600">
                            Arq. (Vigilância) <span class="text-red-700">*</span>
                        </label>
                        <select name="arq_vigilancia" id="arq_vigilancia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_vigilancia" class="block text-sm font-bold text-gray-600">
                            Ent. (Vigilância) <span class="text-red-700">*</span>
                        </label>
                        <select name="ent_vigilancia" id="ent_vigilancia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>



                    <div class="col-span-4">
                        <h3 class="text-lg font-semibold text-gray-800 mt-5">Funcionamento</h3>
                    </div>
                    <div>
                        <label for="te_funcionamento" class="block text-sm font-bold text-gray-600">
                            T/E (Funcionamento) <span class="text-red-700">*</span>
                        </label>
                        <select name="te_funcionamento" id="te_funcionamento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="tp_funcionamento" class="block text-sm font-bold text-gray-600">
                            T/P (Funcionamento) <span class="text-red-700">*</span>
                        </label>
                        <select name="tp_funcionamento" id="tp_funcionamento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="arq_funcionamento" class="block text-sm font-bold text-gray-600">
                            Arq. (Funcionamento) <span class="text-red-700">*</span>
                        </label>
                        <select name="arq_funcionamento" id="arq_funcionamento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>
                    <div>
                        <label for="ent_funcionamento" class="block text-sm font-bold text-gray-600">
                            Ent. (Funcionamento) <span class="text-red-700">*</span>
                        </label>
                        <select name="ent_funcionamento" id="ent_funcionamento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="✔️">Sim</option>
                            <option value="❌">Não</option>
                        </select>
                    </div>


                    @if ($errors->any())
                    <ul class="text-sm text-red-600 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="mt-6 flex justify-end gap-4 col-span-4">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-bold text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Confirmar
                        </button>
                        <a href="{{ route('verificacao_empresa.index') }}" class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Cancelar
                        </a>
                    </div>

            </form>
        </div>
    </div>
</x-app-layout>