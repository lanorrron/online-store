<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10 border">
            <div class="flex justify-between mb-5">
                <h1 class="font-bold text-2xl">{{'USUARIOS'}}</h1>
                <button class="btn-green">{{'Nuevo'}}</button>
            </div>
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                @if(!empty($users))
                    <table class="w-full border-collapse bg-white text-left text-base text-gray-500 table-fixed">
                        <thead>
                        <tr>
                            <th>{{'ID'}}</th>
                            <th>{{'Nombre'}}</th>
                            <th>{{'Acciones'}}</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td class="flex gap-5">
                                    <x-edit-button></x-edit-button>
                                    <x-delete-button></x-delete-button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center">{{'No hay datos a mostrar'}}</p>
                @endif

            </div>
        </div>
    </div>
</div>

