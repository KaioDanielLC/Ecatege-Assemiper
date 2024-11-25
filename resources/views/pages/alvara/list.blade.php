<x-app-layout>
    <div class="flex justify-end p-6 cols-1 grid">
        <form class="flex w-full max-w-md" method="GET" action="{{ route('alvara.index') }}">
            <div class="relative flex-grow">
                <input
                    type="text"
                    id="search"
                    name="search"
                    placeholder="Pesquisar nome da Empresa"
                    class="w-96 p-2 text-sm border border-gray-300 rounded-lg text-dark focus:ring-blue-500 focus:border-blue-500"
                    value="{{ request('search') }}" />
            </div>
            <button type="submit" class="ml-2 p-2 bg-[#2C6B5B] text-white rounded-lg focus:ring-4 focus:ring-green-700">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" aria-hidden="true">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>
            </button>
        </form>
    </div>

    <div class="flex justify-evenly items-center p-6 mb-2">
        @if ($verificacaoempresa->isEmpty())
            <p class="text-center text-white">Nenhuma empresa com alvará próximo de vencer.</p>
        @else
            <div class="overflow-x-auto flex justify-start mt-8">
                <table class="table-fixed border border-2 border-b-black border-spacing-0">
                    <thead class="bg-[#2C6B5B]">
                        <th colspan="3" class="text-center text-white border border-white">
                            Empresas com Alvará Próximo de Vencer
                        </th>
                        <tr>
                            <th class="px-3 py-2 text-left text-white font-medium border-2 border-white border-b-black text-sm text-center">
                                Nome da Empresa
                            </th>
                            <th class="px-3 py-2 text-left text-white font-medium border-2 border-white border-b-black text-sm text-center">
                                Data de Validade
                            </th>
                            <th class="px-3 py-2 text-left text-white font-medium border-2 border-white border-b-black text-sm text-center">
                                Dias Restantes
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#D9E2DE] text-[#000000]">
                        @foreach ($verificacaoempresa as $verificacaoempresas)
                            <tr>
                                <td class="border-2 border-black align-middle text-center ">
                                    {{ $verificacaoempresas->nome_fantasia }}
                                </td>
                                <td class="border-2 border-black align-middle text-center ">
                                    {{ $verificacaoempresas->data_validade->format('d/m/Y') }}
                                </td>
                                <td class="border-2 border-black align-middle text-center  "> 
                                    @if ($verificacaoempresas->data_validade->isSameDay($today)) 
                                    <div class="flex justify-center items-center">
                                        <span class="text-red-600">Vence hoje</span>
                                        <svg class="ms-2 h-4 w-4 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff0000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>                                    
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


        <div class="flex justify-end p-4 text-white mt-12">
            <table id="tabela-alvaras" class="overflow-x-auto table-auto border-collapse border border-b-black border-r-black border-spacing-0">
                <thead class="bg-[#2C6B5B]">

                    <tr class="p-2">
                        <th class="border-2 border-white border-b-black w-24">Nome da Empresa</th>
                        <th class="border-2 border-white border-b-black w-24">Alvará(Ambiental)</th>
                        <th class="border-2 border-white border-b-black w-24">Alvará(Bombeiro)</th>
                        <th class="border-2 border-white border-b-black w-24">Alvará(Vigilância)</th>
                        <th class="border-2 border-white border-b-black w-24">Alvará(Sanitário)</th>
                    </tr>
                </thead>
                <tbody class="bg-[#D9E2DE] text-[#000000]">
                    @foreach ($verificacaoempresa as $verificacaoempresas)
                    <tr class="">
                        <td class="border-2 border-black align-middle text-center">{{$verificacaoempresas->nome_fantasia}}</td>
                        <td class="border-2 border-black align-middle text-center">
                            <a target="_blank" href="{{ asset('img/pdf/' . $verificacaoempresas->pdf_ambiental) }}" class="hover:underline" >PDF</a>
                        </td>
                        <td class="border-2 border-black align-middle text-center">
                            <a target="_blank" href="{{ asset('img/pdf/' . $verificacaoempresas->pdf_bombeiro) }}" class="hover:underline" >PDF</a>
                        </td>  
                        <td class="border-2 border-black align-middle text-center">
                            <a target="_blank" href="{{ asset('img/pdf/' . $verificacaoempresas->pdf_vigilancia) }}" class="hover:underline" >PDF</a>
                        </td>  
                        <td class="border-2 border-black align-middle text-center">
                            <a target="_blank" href="{{ asset('img/pdf/' . $verificacaoempresas->pdf_sanitario) }}" class="hover:underline" >PDF</a>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
    
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const table = document.getElementById('tabela-alvaras'); // Seleciona a tabela específica
    const tableBody = table.querySelector('tbody'); // Seleciona o corpo da tabela
    const rows = Array.from(tableBody.querySelectorAll('tr')); // Obtém todas as linhas da tabela

    // Ordena as linhas com base no texto do primeiro <td> (Nome da Empresa)
    rows.sort((a, b) => {
        const nameA = a.querySelector('td').textContent.trim().toLowerCase();
        const nameB = b.querySelector('td').textContent.trim().toLowerCase();
        return nameA.localeCompare(nameB);
    });

    // Remove as linhas antigas e adiciona as linhas ordenadas
    rows.forEach(row => tableBody.appendChild(row));
});
</script>
</x-app-layout>
