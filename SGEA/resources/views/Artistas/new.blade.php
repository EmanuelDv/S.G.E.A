<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Add Artistas') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Add Artistas</h1>
                        <form method="POST" action="{{ route('artistas.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="code" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled">
                                <div id="idHelp" class="form-text">codigo artista</div>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class="mb-3">
                                <label for="nacionalidad" class="form-label">nacionalidad</label>
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                            </div>
                            <div class="mb-3">
                                <label for="biografia" class="form-label">biografia</label>
                                <input type="text" class="form-control" id="biografia" name="biografia">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('artistas.index') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
