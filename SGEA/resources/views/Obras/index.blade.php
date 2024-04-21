<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Obras') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Botón para añadir obra -->
                    <a href="{{ route('obras.create') }}" class="btn btn-success">Add</a>
                    <h1>Obras</h1>
                    <!-- Tabla para mostrar las obras -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Artista</th>
                                <th scope="col">Título</th>
                                <th scope="col">Año</th>
                                <th scope="col">Técnica</th>
                                <th scope="col">Dimensiones</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obras as $obra)
                            <tr>
                                <!-- Datos de la obra -->
                                <th scope="row">{{ $obra->id }}</th>
                                <td>{{ $obra->nombre }}</td>
                                <td>{{ $obra->titulo }}</td>
                                <td>{{ $obra->ano }}</td>
                                <td>{{ $obra->tecnica }}</td>
                                <td>{{ $obra->dimensiones }}</td>
                                <td>{{ $obra->descripcion }}</td>

                                <!-- Botones de edición y eliminación -->
                                <td>
                                    <a href="{{ route('obras.edit', ['obra' => $obra->id]) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('obras.destroy', ['obra' => $obra->id]) }}" method="POST" style="display:inline-block">
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

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
