<x-admin-master>
@section('content')

<h2>Olá, {{$user->name}}</h2>

<div class="row mt-3">


    <div class="col-sm-6">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <img class="w-25 mb-3 img-profile rounded" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
        </div>
        <div class="form-group">
            <input type="file" name="userimage" id="avatar">
        </div>

        <div class="form-group"
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="name">Nome do Usuário</label>
            <input type="text" class="form-control" id="username" value="{{$user->username}}">
          </div>
          <div class="form-group"
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
          <label for="Senha">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Senha">
        </div>
        <div class="form-group">
            <label for="ConfirmarSenha">Confirmar Senha</label>
            <input type="password" class="form-control" id="password-confirm" placeholder="Confirmar Senha">
          </div>
        <button type="submit" class="btn btn-primary">Altera</button>
      </form>

    </div>


</div>
    
@endsection

</x-admin-master>