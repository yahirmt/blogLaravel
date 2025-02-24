<x-admin-layout>
    <h1 style="dark-color:white">Dashboard</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="card">
            <div class="flex items-center">
                <img class="h-8 w-8 rounded-full object-cover" src="{{auth()->user()->profile_photo_url}}">
                <div class="ml-4 flex-1">
                    <p>
                        Bienvenido {{auth()->user()->name}}
                    </p>

                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="text-xs hover:text-blue-500">Cerrar</button>

                    </form>

                </div>
            </div>
        </div>
        <div class="card flex justify-center items-center">
            <p class="text-2xl font-semibold">
                Marca
            </p>
        </div>
    </div>

</x-admin-layout>

