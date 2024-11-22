<x-app-layout>
    @if (session()->has('message'))
        <div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-100 border-blue-700 bg-blue-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
                {{ session()->get('message') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    
    <div class="flex justify-center p-4 text-white mt-10">
        <table class="overflow-x-auto table-fixed border-collapse border border-slate-500 border-separate border-spacing-0">
            <thead class="bg-[#2C6B5B]">
                <tr>
                    <th colspan="7" class="border border-white border-slate-600 text-center py-2">Informações</th>
                    <th colspan="4" class="border border-white border-slate-600 text-center py-2">Prefeitura</th>
                    <th colspan="4" class="border border-white border-slate-600 text-center py-2">Bombeiro</th>
                    <th colspan="4" class="border border-white border-slate-600 text-center py-2">Vigilância</th>
                    <th colspan="4" class="border border-white border-slate-600 text-center py-2">Funcionamento</th>
                    <th colspan="1" class="border border-white border-slate-600 text-center py-2"></th>
                </tr>
                <tr class="p-2">
                    <th class="border border-white border-slate-600 w-16">Ano</th>
                    <th class="border border-white border-slate-600 w-16">Nº da Pasta</th>
                    <th class="border border-white border-slate-600 w-24">Nome da Empresa</th>
                    <th class="border border-white border-slate-600 w-24">Inscrição Municipal</th>
                    <th class="border border-white border-slate-600 w-40">Data de Validade</th>
                    <th class="border border-white border-slate-600 w-28">Área Total</th>
                    <th class="border border-white border-slate-600 w-28">Área Utilizada</th>
                    <th class="border border-white border-slate-600 w-16">T/E</th>
                    <th class="border border-white border-slate-600 w-16">T/P</th>
                    <th class="border border-white border-slate-600 w-16">Arq.</th>
                    <th class="border border-white border-slate-600 w-16">Ent.</th>
                    <th class="border border-white border-slate-600 w-16">T/E</th>
                    <th class="border border-white border-slate-600 w-16">T/P</th>
                    <th class="border border-white border-slate-600 w-16">Arq.</th>
                    <th class="border border-white border-slate-600 w-16">Ent.</th>
                    <th class="border border-white border-slate-600 w-16">T/E</th>
                    <th class="border border-white border-slate-600 w-16">T/P</th>
                    <th class="border border-white border-slate-600 w-16">Arq.</th>
                    <th class="border border-white border-slate-600 w-16">Ent.</th>
                    <th class="border border-white border-slate-600 w-16">T/E</th>
                    <th class="border border-white border-slate-600 w-16">T/P</th>
                    <th class="border border-white border-slate-600 w-16">Arq.</th>
                    <th class="border border-white border-slate-600 w-16">Ent.</th>
                    <th class="border border-white border-slate-600 w-16">Ações</th>

        
                </tr>
            </thead>
            <tbody class="font-semibold">
                @foreach ($verificacaoempresa as $verificacaoempresas)
                <tr>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ano}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->numero_pasta}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->nome_fantasia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->inscricao_municipal}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{\Carbon\Carbon::parse($verificacaoempresas->data_validade)->format('d/m/Y') }}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->area_total}}m²</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->area_utilizada}}m²</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_vigilancia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_vigilancia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_vigilancia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_vigilancia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_funcionamento}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_funcionamento}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_funcionamento}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_funcionamento}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">
                        <div class="flex align-items-center space-x-2">
                            <a href="{{ route('verificacao_empresa.edit', ['verificacao_empresa' => $verificacaoempresas->id]) }}" class="flex justify-center items-center">
                                <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-20 mr-2">
                                    Editar
                                </button>
                            </a>
                    
                            <a href="{{ route('verificacao_empresa.destroy', [$verificacaoempresas->id]) }}" class="flex justify-center items-center delete-link" data-company-name="{{ $verificacaoempresas->nome_fantasia }}">
                                <button type="button" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-20">
                                    Excluir
                                </button>
                            </a>
                        </div>

                    </td>
                    <div id="confirmModal" class="fixed inset-0 z-50 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-85">
                                <p class="mb-4 text-gray-700">Tem certeza que deseja excluir a empresa <span id="companyName" class="font-semibold"></span>?</p>
                                <div style="text-align: center;" class="flex justify-center space-x-4">
                                    <button id="cancelBtn" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Cancelar</button>
                                    <a id="confirmDeleteBtn" href="#" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Excluir</a>
                                </div>
                            </div>
                        </div>
                </tr>
                
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="me-36 text-end absolute">
        <a href="{{ route('verificacao_empresa.create') }}">
            <button class="focus:outline-none text-white font-medium rounded-full text-sm fixed right-10 bottom-10 bg-[#2C6B5B]">
                <div class="w-16 h-16 flex justify-center items-center hover:hover-white">
                    <svg xmlns="http://www.w3.org/1600/svg" viewBox="0 0 448 512" class="w-8 h-8">
                        <path fill="#ffffff" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                    </svg>
                </div>
            </button>
        </a>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const confirmModal = document.getElementById('confirmModal');
        const cancelBtn = document.getElementById('cancelBtn');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        const modalText = document.getElementById('companyName'); // Seleciona o elemento de texto do modal
        let deleteUrl = '';

        document.querySelectorAll('.delete-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const companyName = this.getAttribute('data-company-name'); // Obtém o nome da empresa
                deleteUrl = this.href;
                modalText.textContent = companyName; // Atualiza o texto do modal com o nome da empresa
                confirmModal.classList.remove('hidden'); // Exibe o modal
            });
        });

        cancelBtn.addEventListener('click', function() {
            confirmModal.classList.add('hidden'); // Oculta o modal
        });

        confirmDeleteBtn.addEventListener('click', function() {
            window.location.href = deleteUrl; // Redireciona para a URL de exclusão
        });
        });
</script>  
</x-app-layout>
