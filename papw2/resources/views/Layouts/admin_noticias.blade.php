@extends('principal_administrador')



@section('noticias')
    @parent

    @foreach($usuarios as $noticia)


          <div class="Noticias">
                    <div class="div-foto">
                            <a href="" title="Noticia" class="NoticiaFoto link_falso"> <img src="fotos/{{$noticia->path}}"></a>
                    </div>


                    <div class="div-descripcion">
                        <a href="" class="link_falso">{{ $noticia->titulo }}</a>
                        <p>{{ $noticia->contenido }}</p>
                    </div>

                    <div id="Autor">
                        <span>Author:</span>
                        <a href="" class="link_falso">{{ $noticia->nombre }}</a>
                        <small>{{ $rest = substr($noticia->created_at, 0, -9) }}</small>

                    </div>


                    <div class="center-block text-center">
                    <button class="btn btn-success aceptar"> <input type="hidden" value="{{ $noticia->idNoticia }}"> Autorizar </button>
                        <button class="btn btn-danger denegar"> <input type="hidden" value="{{ $noticia->idNoticia }}"> Rechazar </button>
                    </div>

     
                </div>
      

    @endforeach

    {!! $usuarios->render() !!}
      

@endsection

