<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add exposicion</title>
</head>
<body>
    <h1>Add exposicion</h1>
    <form method="POST" action="{{route('obras.store')}}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="code" name="code" aria-describedby="id" disabled="disabled">
            <div id="idHelp" class="form-text">codigo exposicion</div>
        </div>
        <div class="mb-3">
            <label for="obra_id" class="form-label">obra_id</label>
            <input type="text" class="form-control" id="obra_id" name="obra_id" ">
        </div>
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">fecha_inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
        </div>
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">fecha_fin</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">ubicacion</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
        </div>
        <div class="mb-3">
            <label for="nombre_evento" class="form-label">nombre_evento</label>
            <input type="text" class="form-control" id="nombre_evento" name="nombre_evento">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route('obras.index')}}" class="btn btn-warning">Cancel</a>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>