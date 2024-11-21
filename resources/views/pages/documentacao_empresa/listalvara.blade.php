<x-app-layout>
    <div class="rounded-lg p-6 mb-6">
        @if ($verificacaoempresa->isEmpty())
            <p class="text-center text-white">Nenhuma empresa com alvará próximo de vencer.</p>
        @else
            <div class="overflow-x-auto flex justify-start mt-8">
                <table class="table-fixed border-collapse border border-gray-300 rounded-lg">
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
                            <tr class="">
                                <td class="border border-white border-slate-600 align-middle text-center text-white">
                                    {{ $verificacaoempresas->nome_fantasia }}
                                </td>
                                <td class="border border-white border-slate-600 align-middle text-center text-white">
                                    {{ $verificacaoempresas->data_validade->format('d/m/Y') }}
                                </td>
                                <td class="border border-white border-slate-600 align-middle text-center text-white "> 
                                    @if ($verificacaoempresas->data_validade->isSameDay($today)) 
                                    <div class="flex justify-center items-center">
                                        <span class="text-gray-900">Vence hoje</span>
                                        <svg class="h-4 w-4 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 64c0-17.7-14.3-32-32-32S32 46.3 32 64l0 256c0 17.7 14.3 32 32 32s32-14.3 32-32L96 64zM64 480a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
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
