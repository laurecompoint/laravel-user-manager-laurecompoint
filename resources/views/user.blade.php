@extends('layouts.app')

@section('content')
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
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
             
  <p>Error Veuillez recommencer...</p>
  <p>{{ $error }}</p>
              
  </div>
  @endforeach
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
@endsection

