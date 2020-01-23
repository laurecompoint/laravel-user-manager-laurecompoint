<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Styles -->
       
</head>
<body class="col-12">

  <h2 class="mt-4 ml-5">User Modif - Api</h2>
       
  <div class="row ml-5">
  <div class="card border-info" style="width: 18rem;">
      <img class="card-img-top" src="../useravatar.png" alt="Card image cap">
      <div class="card-body">
          <p>User name : {{$user->name}}</p>
          <p>User email : {{$user->email}}</p>

          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Modifier 
          </button>
          
        
         
      </div>
  </div>
  @if ($errors->any())
  <div class="ml-5">
  <div class="alert alert-danger" role="alert">
              @foreach ($errors->all() as $error)
                          <p>Error Veuillez recommencer...</p>
                            <p>{{ $error }}</p>
              @endforeach
  </div>
  </div>
  @endif
  </div>
  <div class="modal hide fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modif user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{route('users.update')}}">

            <img class="card-img-top" src="../udapteuser.png" alt="Card image cap">

            <th class="mt-5"><input type="hidden" value="{{ $user->id }}" name="id" /> </th>
            <div class="mt-2"> <input type="text" name="name" class="form-control" placeholder="{{$user->name}}" value="{{$user->name}}"></div>

            <div class="mt-2"><input type="email" name="email" class="form-control" placeholder="{{$user->email}}" value="{{$user->email}}"></div>
            <div  class="mt-2"><input type="password" name="password" class="form-control" placeholder="Nouveau mot de passe" value=""></div>

            {{csrf_field()}}
            <th scope="col">
            <button class="btn btn-success mt-4" type="submit">Save Change</button>
            </th>
            </tr>
            </form>
          

      </div>
     
    </div>
  </div>
</div>

  

</body>
</html>
