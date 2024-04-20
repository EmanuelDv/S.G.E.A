<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Artistas</title>
</head>
<body>
    <h1>Add Artistas</h1>
    <form method="POST" action="{{route('artistas.store')}}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled">
            <div id="idHelp" class="form-text">codigo artistat</div>
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
        <a href="{{route('artistas.index')}}" class="btn btn-warning">Cancel</a>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>