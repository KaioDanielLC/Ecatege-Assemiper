<x-app-layout>
    <div class="rounded-lg p-6 mb-6">
        @if ($verificacaoempresa->isEmpty())
            <p class="text-center text-white">Nenhuma empresa com alvará próximo de vencer.</p>
        @else
            <div class="overflow-x-auto flex justify-start mt-8">
                <table class="table-fixed border-collapse border border-gray-300 rounded-lg border-spacing-0">
                    <thead class="bg-[#2C6B5B]">
                        <th colspan="3" class="text-center text-white border border-white border-slate-600">
                            Empresas com Alvará Próximo de Vencer
                        </th>
                        <tr>
                            <th class="px-3 py-2 text-left text-white font-medium border border-white border-slate-600 border-b text-sm text-center">
                                Nome da Empresa
                            </th>
                            <th class="px-3 py-2 text-left text-white font-medium border border-white border-slate-600 border-b text-sm text-center">
                                Data de Validade
                            </th>
                            <th class="px-3 py-2 text-left text-white font-medium border border-white border-slate-600 border-b text-sm text-center">
                                Dias Restantes
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($verificacaoempresa as $verificacaoempresas)
                            <tr>
                                <td class="border border-white border-slate-600 align-middle text-center text-white">
                                    {{ $verificacaoempresas->nome_fantasia }}
                                </td>
                                <td class="border border-white border-slate-600 align-middle text-center text-white">
                                    {{ $verificacaoempresas->data_validade->format('d/m/Y') }}
                                </td>
                                <td class="border border-white border-slate-600 align-middle text-center text-white "> 
                                    @if ($verificacaoempresas->data_validade->isSameDay($today)) 
                                    <div class="flex justify-center items-center bg-white">
                                        <span class="text-red-700">Vence hoje</span>
                                        <svg class="ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff0000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>                                    
                                    </div>
                                    
                                    @else {{ $today->diffInDays($verificacaoempresas->data_validade) }} dia(s) 

                                    @endif 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
