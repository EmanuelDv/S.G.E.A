<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Artistas') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Artistas </h1>
                        <a href="{{ route('artistas.create') }}" class="btn btn-success">Add</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">apellido</th>
                                    <th scope="col">nacionalidad</th>
                                    <th scope="col">biografia</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artistas as $artista)
                                <tr>
                                    <th scope="row">{{ $artista->id }}</th>
                                    <td>{{ $artista->nombre }}</td>
                                    <td>{{ $artista->apellido }}</td>
                                    <td>{{ $artista->nacionalidad }}</td>
                                    <td>{{ $artista->biografia }}</td>
                                    <td>
                                        <a href="{{ route('artistas.edit', ['artista' => $artista->id]) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('artistas.destroy', ['artista' => $artista->id]) }}" method="POST" style="display:inline-block">
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
    </div>

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
