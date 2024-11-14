<x-app-layout>
    <div class="flex justify-center p-4 text-white mt-10">
        <table class="table-fixed border-collapse border border-slate-500 border-separate border-spacing-0">
            <thead class="bg-[#2C6B5B]">
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
                    <th class="border border-white border-slate-600 w-40 h-20">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($verificacaoempresa as $verificacaoempresas)
                <tr>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ano}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->numero_pasta}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->nome_fantasia}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->inscricao_municipal}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{ \Carbon\Carbon::parse($verificacaoempresas->data_validade)->format('d/m/Y') }}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->area_total}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->area_utilizada}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->te_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->tp_prefeitura}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->arq_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">{{$verificacaoempresas->ent_bombeiro}}</td>
                    <td class="border border-white border-slate-600 align-middle text-center">

                        <a href="{{ route('verificacao_empresa.edit', ['verificacao_empresa' => $verificacaoempresas->id]) }}" class="flex justify-center items-center">
                            <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-1/2">
                                Editar
                            </button>
                        </a>
                        
                        <a href="{{ route('verificacao_empresa.destroy', [$verificacaoempresas->id]) }}" class="flex justify-center items-center">
                            <button type="button" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-1/2">
                                Excluir
                            </button>
                        </a>
                    </td>
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

    
</x-app-layout>
