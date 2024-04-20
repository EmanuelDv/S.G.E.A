<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Obra de arte</title>
</head>
<body>
    <h1>Edit Obra de Arte</h1>
    <form method="POST" action="{{route('obras.update',['obras_de_arte'=>$obras->id])}}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled">
            <div id="idHelp" class="form-text" value="{{$obras->id}}">codigo exposicion</div>
        </div>
        <div class="mb-3">
            <label for="artista_id" class="form-label">artista_id</label>
            <input type="text" class="form-control" id="artista_id" name="artista_id" value="{{$obras->artista_id}}">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$obras->titulo}}">
        </div>
        <div class="mb-3">
            <label for="ano" class="form-label">año</label>
            <input type="date" class="form-control" id="ano" name="ano" value="{{$obras->ano}}">
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">tecnica</label>
            <input type="text" class="form-control" id="tecnica" name="tecnica" value="{{$obras->tecnica}}">
        </div>
        <div class="mb-3">
            <label for="nombre_evento" class="form-label">dimensiones</label>
            <input type="text" class="form-control" id="dimensiones" name="dimensiones" value="{{$obras->dimensiones}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$obras->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('obras.index')}}" class="btn btn-warning">Cancel</a>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>