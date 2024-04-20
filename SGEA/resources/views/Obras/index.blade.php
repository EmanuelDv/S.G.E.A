<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Obras</title>
</head>
<body>
   <div class="container">
       <h1>Obras</h1>
       <a href="{{ route('obras.create') }}" class="btn btn-success">Add</a>
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">id</th>
                   <th scope="col">artista	</th>
                   <th scope="col">titulo</th>
                   <th scope="col">ano</th>
                   <th scope="col">tecnica</th>
                   <th scope="col">dimensiones</th>
                   <th scope="col">descripcion</th>
                   <th scope="col">Acciones</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($obras as $obra)
               <tr>
                
                   <th scope="row">{{ $obra->id }}</th>
                   <td>{{ $obra->nombre }}</td>
                   <td>{{ $obra->titulo }}</td>
                   <td>{{ $obra->ano }}</td>
                   <td>{{ $obra->tecnica }}</td>
                   <td>{{ $obra->dimensiones }}</td>
                   <td>{{ $obra->descripcion }}</td>
                   <td><span>Action</span></td>
               </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</body>
</html>