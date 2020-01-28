@extends('layouts.app')
@section('content')
    <body class="col-12">
       <h2 class="mt-5 ml-5 text-primary text-center">Users - Api</h2>


       <div class="m-auto">
       
       <form class=" d-flex justify-content-center" method="post" action="{{route('users.store')}}">

        <div class="input-group mb-3 text-center ml-5 col-5 " >

        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name">
        <input type="email" name="email"  value="{{old('email')}}" class="form-control" placeholder="email">
        <input type="password" name="password" class="form-control" placeholder="password">

        {{csrf_field()}}
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>

        </div>
       
      
        </form>
       
        </div>
        @if ($errors->any())
        <div class="ml-4 col-11">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
                   
               
                    <p>{{ $error }}</p>
              
        </div>
        @endforeach
        </div>
        @endif

        @if (session('alertdelete'))
        <div class="alert alert-success col-10 m-auto">
            {{ session('alertdelete') }}
        </div>
        @endif

        @if (session('alertcreate'))
        <div class="alert alert-success col-10 m-auto">
            {{ session('alertcreate') }}
        </div>
        @endif

      


<div class="row">
@foreach($users as $user)

<div class="card ml-5 mt-4 border-info " style="width: 18rem;">
  <img class="card-img-top" src="useravatar.png" alt="Card image cap">
  <div class="card-body">
    <a href="users/{{$user->id}}"><h5 class="card-title">Name : {{$user->name}}</h5></a>
    <p class="card-text">Email : {{$user->email}}</p>

             <form method="post" action="{{route('users.destroy', $user->id )}}">
             @method('DELETE')
                {{ csrf_field() }}
                <button class="btn btn-outline-danger" type="submit">Supprimer</button>

            </form>
  </div>
</div>

@endforeach
</div>



<div class="ml-4 mt-5">
{{ $users->links() }}
</div>

    </body>
    @endsection
