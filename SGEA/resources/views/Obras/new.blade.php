<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Add Obras') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Add Obra de Arte</h1>
                        <form method="POST" action="{{ route('obras.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="code" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled">
                                <div id="idHelp" class="form-text">codigo exposicion</div>
                            </div>
                            <label for="artista">Artistas</label>
                            <select class="form-select" id="municipality" name="code" required>
                                <option selected disabled value="">Choose one...</option>
                                @foreach($artistas as $artista)
                                    <option value="{{ $artista->id }}">{{ $artista->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="mb-3">  
                                <label for="titulo" class="form-label">titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                            <div class="mb-3">
                                <label for="ano" class="form-label">año</label>
                                <input type="date" class="form-control" id="ano" name="ano">
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">tecnica</label>
                                <input type="text" class="form-control" id="tecnica" name="tecnica">
                            </div>
                            <div class="mb-3">
                                <label for="nombre_evento" class="form-label">dimensiones</label>
                                <input type="text" class="form-control" id="dimensiones" name="dimensiones">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('obras.index') }}" class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
