<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- Styles -->
       
    </head>
    <body class="col-12">
       <h2 class="mt-4">Users - Api</h2>

       <form method="post" action="{{route('users.create')}}">

        <div class="input-group mb-3 col-5">

        <input type="text" name="name" class="form-control" placeholder="name">
        <input type="email" name="email" class="form-control" placeholder="email">
        <input type="password" name="password" class="form-control" placeholder="password">

        {{csrf_field()}}
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Valider</button>
        </div>

        </div>
        </form>

        @if ($errors->any())
        <div class="error col-5 m-auto pt-3 text-danger row">

                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach

        </div>
        @endif


    <table class="table mt-5">
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Delete</th>
    </tr>
   
  </thead>
  
  <thead class="">
  @foreach($users as $user)
    <tr>
      <th scope="col">{{$user->id}}</th>
     
      <th scope="col"><a href="user/{{$user->id}}">{{$user->name}}</a></th>
     
      <th scope="col">{{$user->email}}</th>
     
    
        <th scope="col">
        <form action="{{ $user->id }}" method="POST">
                {{ csrf_field() }}

                <button class="btn btn-outline-danger" type="submit">Supprimer</button>

            </form>
        </th>

    </tr>
    @endforeach
  </thead>
</table>


    </body>
</html>
