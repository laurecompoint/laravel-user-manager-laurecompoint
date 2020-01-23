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
       <h2 class="mt-5 ml-5 text-primary">Users - Api</h2>
       
       <form method="post" action="{{route('users.create')}}">

        <div class="input-group mb-3 ml-4 col-5">

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


<div class="row">
@foreach($users as $user)
<div class="card ml-5 mt-4 border-info " style="width: 18rem;">
  <img class="card-img-top" src="useravatar.png" alt="Card image cap">
  <div class="card-body">
    <a href="user/{{$user->id}}"><h5 class="card-title">Name : {{$user->name}}</h5></a>
    <p class="card-text">Email : {{$user->email}}</p>

             <form action="{{ $user->id }}" method="POST">
                {{ csrf_field() }}

                <button class="btn btn-outline-danger" type="submit">Supprimer</button>

            </form>
  </div>
</div>

@endforeach
</div>
    </body>
</html>
