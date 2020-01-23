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

       <h2 class="mt-4">User Modif - Api</h2>
       <p>User name : {{$user->name}}</p>
       <p>User email : {{$user->email}}</p>
    
    <table class="table mt-5">
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Modifier</th>
    </tr>
   
  </thead>
  
  <thead class="">

    <tr>
    <form method="post" action="{{route('users.update')}}">

      <th scope="col"><input type="hidden" value="{{ $user->id }}" name="id" /> </th>
      <th scope="col"> <input type="text" name="name" class="form-control" placeholder="{{$user->name}}" value="{{$user->name}}"></th>
     
      <th scope="col"><input type="email" name="email" class="form-control" placeholder="{{$user->email}}" value="{{$user->email}}"></th>
      <th scope="col"><input type="password" name="password" class="form-control" placeholder="Nouveau mot de passe" value=""></th>
     
       {{csrf_field()}}
      <th scope="col">
            
      <button class="btn btn-outline-secondary" type="submit">Modifier</button>
           
      </th>
    </tr>
    </form>
    @if ($errors->any())
        <div class="error col-5 m-auto pt-3 text-danger row">

                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach

        </div>
        @endif

    

  </thead>
</table>


    </body>
</html>
