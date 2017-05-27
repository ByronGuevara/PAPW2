@extends('PAPW2_noticia')



@section('comentarios')
    @parent

    @foreach($noticias as $noticia)

                <div class="seccion_comentarios">
                        <ol>
                            <li>

                               <div class='info_none'>
                                    <label> {{ $noticia->nombre }} <small> {{ $noticia->fecha }} </small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='http://papw2.app/fotos/{{ $noticia->fotoPerfil }}' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> {{ $noticia->nombre }} </label> <br>
                                    <small>{{ $noticia->fecha }}</small>
                                </div>
                    
                                <p class='com'> {{ $noticia->comentario }} </p>
                            </li>
                        </ol>
                    </div>

    @endforeach

    {!! $noticias->render() !!}
      

@endsection

