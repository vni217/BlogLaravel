<x-admin-master>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Todos os Posts</h1>

            @if (Session::has('mensagem'))
                
                    <div class="alert alert-danger">{{Session::get('mensagem')}}</div>

               @elseif(session('post-criado'))

               <div class="alert alert-success">{{session('post-criado')}}</div>

               @elseif(session('post-editado')) 
               <div class="alert alert-success">{{session('post-editado')}}</div>
            @endif


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Usuário</th>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th>Deletar</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Usuário</th>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th>deletar</th>
                        </tr>
                    </tfoot>
                   <tbody>

                    @foreach ($posts as $post)
                      <tr>
                          <td>{{$post->user->name}}</td>
                      <td><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a></td>
                          <td><div><img src="{{asset($post->post_image)}}" height="60px"></div></td>
                          <td>{{$post->created_at->diffForHumans()}}</td>
                          <td>{{$post->updated_at->diffForHumans()}}</td>
                          <td>

                            @can('view',$post)    
                         
                          <form action="{{route('post.destroy', $post->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>

                            @endcan

                          </td>
                      </tr>

                      @endforeach
                   </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
 <div class="d-flex">
    <div class="mx-auto">
        {{$posts->links()}}
    </div>
 </div>


@endsection

@section('scripts')
    <!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
{{-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> --}}
@endsection

</x-admin-master>