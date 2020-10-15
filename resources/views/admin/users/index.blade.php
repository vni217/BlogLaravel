<x-admin-master>

@section('content')
<div>    
    <h1>Usuários boladões</h1>
</div>
<div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
        
                <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Nome do Usuário</th>
                            <th>Avatar</th>
                            <th>Criado em</th>
                            <th>Atualizar Usuário</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->username}}
                            </td>
                            <td>
                            <div><img class="rounded-circle" height="60px" src="{{$user->avatar}}" alt="" srcset=""></div>
                            </td>
                            <td>
                            {{$user->created_at->diffForhumans()}}
                            </td>
                            <td>
                                {{$user->updated_at->diffForhumans()}}
                                </td>
                        <td><div class="btn btn-danger"><a href="{{route('user.profile.show', $user)}}">Atualizar</div></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>

        


@endsection
@section('scripts')
            <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</x-admin-master>    
