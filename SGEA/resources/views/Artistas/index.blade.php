<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Artistas</title>
</head>
<body>
   <div class="container">
       <h1>Artistas vista</h1>
       <a href="{{ route('artistas.create') }}" class="btn btn-success">Add</a>
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">nombre	</th>
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
                    <a href="{{route('artistas.edit',['artista' => $artista->id])}}"
                    class="btn btn-info">Edit</a>

                    <form action="{{route('artistas.destroy',['artista' => $artista->id])}}"
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