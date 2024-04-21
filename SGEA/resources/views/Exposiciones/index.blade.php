<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Exposiciones') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Exposiciones</h1>
                    <a href="{{ route('exposiciones.create') }}" class="btn btn-success">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">obra_id</th>
                                <th scope="col">fecha_inicio</th>
                                <th scope="col">fecha_fin</th>
                                <th scope="col">ubicacion</th>
                                <th scope="col">nombre_evento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($exposiciones as $exposicion)
                            <tr>
                                <th scope="row">{{ $exposicion->id }}</th>
                                <td>{{ $exposicion->obra_id }}</td>
                                <td>{{ $exposicion->fecha_inicio }}</td>
                                <td>{{ $exposicion->fecha_fin }}</td>
                                <td>{{ $exposicion->ubicacion }}</td>
                                <td>{{ $exposicion->nombre_evento }}</td>
                                <td>
                                    <a href="{{ route('exposiciones.edit', ['exposicion' => $exposicion->id]) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('exposiciones.destroy', ['exposicion' => $exposicion->id]) }}" method="POST" style="display:inline-block">
                                        @method('delete')
                                        @csrf
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
