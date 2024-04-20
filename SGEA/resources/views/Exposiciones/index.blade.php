<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Exposiciones</title>
</head>
<body>
   <div class="container">
       <h1>Exposiciones</h1>
       <a href="{{ route('exposiciones.create') }}" class="btn btn-success">Add</a>
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">obra_id	</th>
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
                   <a href="{{route('exposiciones.edit',['exposicion' => $exposicion->id])}}"
                    class="btn btn-info">Edit</a>
                    <form action="{{route('exposiciones.destroy',['exposicion' => $exposicion->id])}}"
                    method="POST" style="display:inline-block">
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
</body>
</html>