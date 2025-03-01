<x-admin-layout>

    <h1 class="text-2xl font-semibold text-red-300">Editar Categoría</h1>

    <form action="{{route("admin.categories.update",$category)}}" method="POST">
        @csrf
        @method('PUT')


        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
            <div>
                <x-label class="mb-1">
                    Nombre
                </x-label>
                <x-input class="w-full" type="text" name="name" id="name" value="{{old('name',$category->name)}}" required/>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <x-button >
                Enviar
            </x-button>
        </div>
    </form>

</x-admin-layout>
