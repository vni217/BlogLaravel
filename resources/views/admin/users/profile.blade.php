<x-admin-master>
@section('content')

<h2>Olá, {{$user->name}}</h2>
        
        
  <div class="row mt-3">
        
    <div class="col-6">
        {{-- <form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data"> --}}
          <form method="POST" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data"> 
            @method('put')
            @csrf
              <div>
                <div>
                  <img class="w-35 img-thumbnail circle" src="{{$user->avatar}}">
              </div>
            </div>
                
              <div class="form-group">
                    <input type="file" name="avatar" id="avatar">
                    @error('avatar')
                    <div class="alert alert-danger">{{$message}}</div>
                      @enderror
              </div>
           
            <div class="form-group">
                <label for="name">Nome do Usuário</label>
                <input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">  
                
              @error('username')
            <div class="alert alert-danger">{{$message}}</div>
              @enderror

            </div>


            <div>
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                
                  @error('name')
                  <div class="alert alert-danger">{{$message}}</div>
                    @enderror

            </div>
      
            
             <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                  
                  @error('email')
                  <div class="alert alert-danger">{{$message}}</div>
                    @enderror

            </div>
                
                
                <div class="form-group">
                  <label for="Senha">Senha</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Senha">        
                 
                  @error('password')
                  <div class="alert alert-danger">{{$message}}</div>
                    @enderror


                </div>
        
                <div class="form-group">
                    <label for="password-confirmation">Confirmar Senha</label>
                    <input type="password" class="form-control" name="password-confirmation" id="password-confirmation" placeholder="Confirmar Senha">
                   
                    @error('password-confirmation')
                    <div class="alert alert-danger">{{$message}}</div>
                      @enderror

                  </div>
        
                <button type="submit" class="btn btn-primary">Alterar</button>
              
            </div>
          </form>
    </div>
  </div>

@endsection

</x-admin-master>