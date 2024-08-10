<x-app-layout>
    <form action="{{route('empresa.destroy', ['empresa' =>$empresa->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <div >
            <a href="{{route('empresa.index')}}">Cancelar</a>

            <button type="submit" class="">
                Deletar
            </button>
        </div>
    </form>
</x-app-layout>