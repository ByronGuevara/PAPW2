@extends('principal2')



@section('noticias')
    @parent

    @foreach($usuarios as $noticia)


          <div class="Noticias">
                    <div class="div-foto">
                            <a href="noticia/{{ $noticia->idNoticia }}" title="{{ $noticia->titulo }}" class="NoticiaFoto"> <img src="fotos/{{$noticia->path}}"></a>
                    </div>


                    <div class="div-descripcion">
                        <a href="noticia/{{ $noticia->idNoticia }}">{{ $noticia->titulo }}</a>
                        <p>{{ $noticia->contenido }}</p>
                    </div>

                    <div id="Autor">
                        <span>Author:</span>
                        <a href="" class="link_falso">{{ $noticia->nombre }}</a>
                        <small>{{ $rest = substr($noticia->created_at, 0, -9) }}</small>

                    </div>


                    <div class="clear">
                        <a href="" title="Comentar" class="Comentario title_image"> <span class="glyphicon glyphicon-comment"> </span> </a>
                        <div id="Categoria" class="{{ $noticia->categoria }}"> {{ $noticia->categoria }} </div>
                    </div>

                                        <section class="lista-comentarios">


                    @foreach($noticias as $noti)

                    @if($noti->idNoticia == $noticia->idNoticia)


                <div class="seccion_comentarios">
                        <ol>
                            <li>

                               <div class='info_none'>
                                    <label> {{ $noti->nombre }} <small> {{ $noti->fecha }} </small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='http://papw2.app/fotos/{{ $noti->fotoPerfil }}' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> {{ $noti->nombre }} </label> <br>
                                    <small>{{ $noti->fecha }}</small>
                                </div>
                    
                                <p class='com'> {{ $noti->comentario }} </p>
                            </li>
                        </ol>
                    </div>

                    @endif



                @endforeach

                </section>


     
                </div>
      

    @endforeach

    {!! $usuarios->render() !!}
      

@endsection



@section('form_noticia')
    @parent

            
            <br>

          <div class="form-group">
            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Título del libro', 'id' => 'titulo_libro', 'required' => 'required']) !!}
          </div>

          <div class="form-group">
                            <select class="form-control" id="sel1" name="idCategoria" required>
                            <option class="cat" value="">  Seleccione su Categoria: </option>

                                @foreach($categories as $category)
                                  <option class="cat" value="{{$category->idCategoria}}">{{$category->categoria}}</option>
                                @endforeach

                          </select>

                        </div>


                        <div class="form-group">
                            <textarea name="contenido" class="form-control txtarea" rows="4" required placeholder="Contenido de la Reseña..."></textarea>
                        </div>

                        <div id="upload">
                            <label class="cargar_foto center-block" title="Agregar Foto">
                                <input type="file" name="path" id="foto_resena" accept="image/*"/>
                            </label>
                        </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          {!! Form::submit('Compartir', ['class' => 'btn btn-primary compartir']) !!}
                      
          {!! Form::close() !!}

@endsection

