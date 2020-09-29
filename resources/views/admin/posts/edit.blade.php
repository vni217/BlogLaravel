<x-admin-master>
    @section('content')
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-2">
                
                <h1>Editar Post</h1>
                
            <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Título <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="file">Carregue a Imagem do Post</label>
                        <br>
                        <input type="file" name="post_image" class="form-group-file" id="post_image ">
                    
                        <div class="my-2">
                            <img src="{{$post->post_image}}" alt="" srcset="">
                        </div>
                    
                    </div>
                    
    
                    <div class="form-group">
                        <label for="description">Texto</label>
                    <textarea cols="30" rows="10" class="form-control" name="body">{{$post->body}}"</textarea>
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - Campo Obrigatório </p>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Criar
                        </button>
                        <button class="btn btn-default">
                            Cancelar
                        </button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
    @endsection
    </x-admin-master>    