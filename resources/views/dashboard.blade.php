<x-app-layout>


    <div class="flex justify-evenly mt-10">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-justify">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresas Matriz cadastradas</h5>
            <p class="mb-3 font-normal text-gray-700">Número de empresas cadastradas: {{$count}}</p>

            <a href="{{route('empresa.index')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-[#2C6B5B] via-[#4A8F73] to-[#6DAE8F] hover:from-[#4A8F73] hover:to-[#6DAE8F] focus:ring-4 focus:outline-none focus:ring-green-700 rounded-lg">
                Ver mais
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-justify">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresas Filiais cadastradas</h5>
            <p class="mb-3 font-normal text-gray-700">Número de filiais cadastradas: {{$count_filial}}</p>

            <a href="{{ route('empresa_filial.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-[#2C6B5B] via-[#4A8F73] to-[#6DAE8F] hover:from-[#4A8F73] hover:to-[#6DAE8F] focus:ring-4 focus:outline-none focus:ring-green-700 rounded-lg">
                Ver mais
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>            
        </div>
    </div>


    

</x-app-layout>