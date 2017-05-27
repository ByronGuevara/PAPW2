@extends('perfil')



@section('form_modificar_misdatos')
    @parent

              {!! Form::open(['route' => ['perfil.update', $valores[0]], 'method' => 'PUT'])  !!}

              <div class="col-xs-6 col-sm-6 vamo">
                {!! Form::text('nombre', $valores[1] , ['class' => 'form-control teclas_nombre', 'placeholder' => 'Nombre de Usuario', 'required' => 'required']) !!}
              </div>
              <div class="col-xs-6 col-sm-6 vamo">
                {!! Form::text('email', $valores[2] , ['class' => 'form-control', 'readonly' => true ]) !!}
              </div>
              <div class="col-xs-6 col-sm-6 vamo">
              {!! Form::input('password', 'contrasenia', $valores[3], ['class' => 'form-control teclas_password', 'placeholder' => 'Contraseña', 'required' => 'required']) !!}
              </div>
              <div class="col-xs-6 col-sm-6 vamo">
                  <select class="form-control" name="genero">
                    <option value="">  Seleccione su Genero: </option>

                    @if($valores[5] == 'Hombre')
                      <option selected value="Hombre">Hombre</option>
                    @else
                      <option value="Hombre">Hombre</option>
                    @endif

                    @if($valores[5] == 'Mujer')
                      <option selected value="Mujer">Mujer</option>
                    @else
                      <option value="Mujer">Mujer</option>
                    @endif

                  </select>
              </div>
              <div class="col-xs-6 col-sm-6 vamo">
                  <input type="date" class="form-control" name="fechaNacimiento" value="{{$valores[4]}}">
              </div>

              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="idUsuario" value="{{$valores[0]}}">

              <div class="col-xs-6 col-sm-6 vamo">
                {!! Form::submit('Modificar', ['class' => 'form-control btn boton_fer']) !!}
              </div>
                      
          {!! Form::close() !!}

@endsection



@section('form_fotoPerfil')
    @parent

{!! Form::open(['route' => 'perfil.store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ])  !!}
                     
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <input type="hidden" name="tipo" value="perfil">

          <input type="hidden" name="idUsuario" value="{{ $valores[0] }}">

          <input type="file" name="fotoPerfil" id="fperfil_aux" accept="image/*"/>  

          <input type="hidden" class="aux">
                     


          {!! Form::submit('Confirmar', ['class' => 'btn center-block boton_fer']) !!}
                      
          {!! Form::close() !!}

@endsection



@section('form_fotoPortada')
    @parent

{!! Form::open(['route' => 'perfil.store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ])  !!}
                     
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <input type="hidden" name="tipo" value="portada">

          <input type="hidden" name="idUsuario" value="{{ $valores[0] }}">

          <input type="file" name="fotoPortada" id="fportada_aux" accept="image/*"/>  

          <input type="hidden" class="aux2">
                     


          {!! Form::submit('Confirmar', ['class' => 'btn center-block boton_fer']) !!}
                      
          {!! Form::close() !!}

@endsection



@section('form_noticia')
    @parent

{!! Form::open(['route' => ['perfil.destroy', $valores[0]], 'method' => 'delete', 'id' => 'publicar_reseña', 'enctype' => 'multipart/form-data' ])  !!}
            


          <div class="form-group">
            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'id' => 'tit', 'required' => 'required']) !!}
          </div>

          <input type="hidden" name="idNoticia" id="idnot">

          <div class="form-group">
                            <select class="form-control" id="sel_cat" name="idCategoria" required>
                            <option class="cate" value="">  Seleccione su Categoria: </option>

                                @foreach($categories as $category)
                                  <option class="cate" value="{{$category->idCategoria}}">{{$category->categoria}}</option>
                                @endforeach

                          </select>

                        </div>


                        <div class="form-group">
                            <textarea required name="contenido" id="txt" class="form-control txtarea" rows="4" placeholder="Contenido de la Reseña..."></textarea>
                        </div>


                        <input type="hidden" class="aux3">

                        <div id="mod_fot">
                        <img id="img" class="animated zoomIn retraso" src="" width="100%" height="100%"/> 
                        <br>
                      </div>


                        <div id="upload">
                            <label class="cargar_foto center-block" title="Cambiar Foto">
                                <input type="file" name="path" id="modificar_foto" accept="image/*"/>
                            </label>
                        </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          {!! Form::submit('Modificar', ['class' => 'btn center-block boton_fer']) !!}
                      
          {!! Form::close() !!}

@endsection






@section('noticias')
    @parent

    @foreach($usuarios as $noticia)


          <div class="Noticias">
                    <div class="div-foto">
                            <a href="noticia/{{ $noticia->idNoticia }}" title="Noticia" class="NoticiaFoto"> <img src="fotos/{{$noticia->path}}"></a>
                    </div>


                    <div class="div-descripcion">
                        <a href="noticia/{{ $noticia->idNoticia }}">{{ $noticia->titulo }}</a>
                        <p>{{ $noticia->contenido }}</p>
                    </div>

                    <div id="Autor">
                        <span>Author:</span>
                        <a href="" class="link_falso">{{ $noticia->nombre }}</a>
                        <small>{{ $rest = substr($noticia->created_at, 0, -9) }}</small>
                        <div id="Categoria" class="{{ $noticia->categoria }}">{{ $noticia->categoria }}</div>

                    </div>


                    <div class="resenas_botones">
                        <a href="" class="quitar_a modificar" data-toggle="modal" data-target="#mimodal3"> 
                        <input type="hidden" class="id_not" value="{{ $noticia->idNoticia }}"> 
                        <input type="hidden" class="titulo_not" value="{{ $noticia->titulo }}">   
                        <input type="hidden" class="categoria_not" value="{{ $noticia->categoria }}">
                        <input type="hidden" class="contenido_not" value="{{ $noticia->contenido }}">  
                        <input type="hidden" class="path_not" value="{{ $noticia->path }}">      
                        <span title="Modificar" class="glyphicon glyphicon-cog"> </span> </a>

                        <a href="" class="quitar_a eliminar"> <input type="hidden" value="{{ $noticia->idNoticia }}"> <span title="Eliminar" class="glyphicon glyphicon-trash"> </span> </a>
                    </div>

     
                </div>
      

    @endforeach

    {!! $usuarios->render() !!}
      

@endsection




