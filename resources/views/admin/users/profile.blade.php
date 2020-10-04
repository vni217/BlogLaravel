<x-admin-master>
@section('content')

<h2>Olá, {{$user->name}}</h2>

<div class="container mt-3">

<div class="row col-6">

<form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
      <div>
        <img class="w-25 mb-3 img-profile rounded" src="">
      </div>
        
      <div class="form-group">
            <input type="file" name="avatar" id="avatar">
      </div>
     
      <div>
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" value="{{$user->name}}">
          @error('name')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="name">Nome do Usuário</label>
            <input type="text" class="form-control" id="username" value="{{$user->username}}">  
            @error('username')
              <div class="alert alert-danger">{{$message}}</div>         
            @enderror
        </div>
          
      
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="{{$user->email}}">
          @error('email')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        
        
        <div class="form-group">
          <label for="Senha">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Senha">        
          @error('password')
            <div class="alert alert-danger">{{$message}}</div>   
          @enderror
        </div>

        <div class="form-group">
            <label for="ConfirmarSenha">Confirmar Senha</label>
            <input type="password" class="form-control" id="password-confirm" placeholder="Confirmar Senha">
            @error('password-confirm')
              <div class="alert alert-danger">{{$message}}</div>       
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
       

      </div>
    
  </div>
</div>
    
@endsection

</x-admin-master>