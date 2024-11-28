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

    <div class="flex justify-end p-6 cols-1 grid">
        <form class="flex w-full max-w-md" method="GET" action="{{ route('empresa.index') }}">
            <div class="relative flex-grow">
                <input
                    type="text"
                    id="search"
                    name="search"
                    placeholder="Pesquisar empresa/Nome do Titular"
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

    <div class="flex justify-center">
        <div class="w-4/6">
            <div class="flex justify-center mt-10 gap-28 grid grid-cols-2 mb-10">
                @foreach ($empresa as $empresas)
                    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md h-96 w-96 relative grid grid-cols-2">

                        <a href="{{ route('ImprimirEmpresa.pdf', [$empresas->id]) }}" target="_blank" 
                            class="absolute top-2 right-2">
                            <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition duration-300 rounded-lg text-sm w-10 h-10 flex justify-center items-center shadow-lg">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                    <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64h226.7L384 93.3v66.7h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zm256 352v32v64H128v-64v-16v-16h256zm64 32h32c17.7 0 32-14.3 32-32v-96c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32h32v64c0 35.3 28.7 64 64 64h256c35.3 0 64-28.7 64-64v-64zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                                </svg>
                            </button>
                        </a>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center col-span-2">{{ $empresas->nome_empresa }}</h5>
                        <div>
                            <p>Nome do Titular:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $empresas->nome_dono }}</p>

                        </div>
                        <div>
                            <p>Endereço:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $empresas->endereco }}</p>
                        </div>
                        <div>
                            <p>Celular:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $empresas->celular }}</p>
                        </div>
                        <div>
                            <p>WhatsApp:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $empresas->whatsapp }}</p>
                        </div>
                        <div>
                            <p>Telefone Fixo:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $empresas->telefone }}</p>
                        </div>
                        <div>
                            <p>Email:</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400 break-all">{{ $empresas->email }}</p>
                        </div>

                        <a href="{{ route('empresa.edit', ['empresa' => $empresas->id]) }}" class="flex justify-center items-center">
                            <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-1/2">
                                Editar
                            </button>
                        </a>

                        <a href="{{ route('empresa.destroy', [$empresas->id]) }}" class="flex justify-center items-center delete-link" data-company-name="{{ $empresas->nome_empresa }}">
                            <button type="button" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 transition duration-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center w-1/2">
                                Excluir
                            </button>
                        </a>

                        <div id="confirmModal" class="fixed inset-0 z-50 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-85">
                                <p class="mb-4 text-gray-700">Tem certeza que deseja excluir a empresa <span id="companyName" class="font-semibold"></span>?</p>
                                <div style="text-align: center;" class="flex justify-center space-x-4">
                                    <button id="cancelBtn" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Cancelar</button>
                                    <a id="confirmDeleteBtn" href="#" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Excluir</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="me-36 text-end absolute">
        <a href="{{ route('empresa.create') }}">
            <button class="focus:outline-none text-white font-medium rounded-full text-sm fixed right-10 bottom-10 bg-[#2C6B5B]">
                <div class="w-16 h-16 flex justify-center items-center hover:hover-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8">
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
