<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Exposiciones') }}</h2>
    </x-slot>

    <!-- Enlaces CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Edit exposicion</h1>
                        <form method="POST" action="{{ route('exposiciones.update', ['exposicion' => $exposiciones->id]) }}">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="code" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled" value="{{ $exposiciones->id }}">
                                <div id="idHelp" class="form-text">codigo exposicion</div>
                            </div>
                            <div class="mb-3">
                                <label for="obra_id" class="form-label">obra_id</label>
                                <input type="text" class="form-control" id="obra_id" name="obra_id" value="{{ $exposiciones->obra_id }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_inicio" class="form-label">fecha_inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $exposiciones->fecha_inicio }}">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_fin" class="form-label">fecha_fin</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ $exposiciones->fecha_fin }}">
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">ubicacion</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $exposiciones->ubicacion }}">
                            </div>
                            <div class="mb-3">
                                <label for="nombre_evento" class="form-label">nombre_evento</label>
                                <input type="text" class="form-control" id="nombre_evento" name="nombre_evento" value="{{ $exposiciones->nombre_evento }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('exposiciones.index') }}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
