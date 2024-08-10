<x-app-layout>

    <div class="flex justify-center items-center" style="min-height: 85vh;">
        <div class="shadow-2xl rounded-lg border-2 bg-white p-2">
            <div class="text-center mb-5 text-xl">
                Cadastrar Empresa/Parceiro
            </div>
            <div class="p-5">
                <form action="{{route('empresa.store')}}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="nome_empresa" class="block mb-2 text-sm font-medium">Nome da Empresa<span class="text-red-700" >*</span></label>
                            <input name="nome_empresa" id="nome_empresa" placeholder="Ecatege" required type="text" class="rounded-lg focus:ring-gray-900 focus:border-gray-900">
                        </div>
                        <div>
                            <label for="nome_dono" class="block mb-2 text-sm font-medium">Nome do Titular<span class="text-red-700" >*</span></label>
                            <input name="nome_dono" id="nome_dono" placeholder="Gilvam"  required type="text" class="rounded-lg focus:ring-gray-900 focus:border-gray-900">
                        </div>
                        <div>
                            <label for="endereco" class="block mb-2 text-sm font-medium">Endereço*</label>
                            <input name="endereco" id="endereco" required placeholder="Rua/Avenina/Travessa"  type="text" class="rounded-lg focus:ring-gray-900 focus:border-gray-900 ">
                        </div>
                        <div x-data>
                            <label for="telefone" class="block mb-2 text-sm font-medium">Telefone<span class="text-red-700" >*</span></label>
                            <input x-mask="(99) 9999-9999" placeholder="(99) 9999-9999" name="telefone" id="telefone" required type="text" class="rounded-lg focus:ring-gray-900 focus:border-gray-900">
                        </div>
                        <div x-data>
                            <label for="celular" class="block mb-2 text-sm font-medium">Celular<span class="text-red-700" >*</span></label>
                            <input x-mask="(99) 9999-9999" placeholder="(99) 9999-9999"  name="celular" id="celular" required type="text" class="rounded-lg focus:ring-gray-900 focus:border-gray-900">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">Email<span class="text-red-700" >*</span></label>
                            <input name="email" id="email" required type="email" placeholder="User@gmail.com"  class="rounded-lg focus:ring-gray-900 focus:border-gray-900  ">
                        </div>

                        <button type="submit" class="text-white focus:ring-4 focus:outline-none bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 w-full">Cadastrar</button>  
                        <a href="{{route('empresa.index')}}">
                            <button type="button" class="text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 w-full">Cancelar</button>
                        </a>
                        

                        
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>