@extends('inicio')



@section('form_registro')
    @parent

          {!! Form::open()  !!}
            
            <br>

          <div class="form-group">

            {!! Form::label('nombre', 'Nombre', ['class' => 'sr-only']) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'id' => 'Nombre']) !!}
   
          </div>

          <div class="form-group">

              {!! Form::label('correo', 'Correo', ['class' => 'sr-only']) !!}
              {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'id' => 'Correo']) !!}
                              
          </div>

          <div class="form-group">
              <div class="input-group">
                  <input  id="pass" type="password" class="form-control" placeholder="Contraseña">
                    <span class="input-group-btn">
                      <button id="ver_contra" class="btn btn-secondary" type="button" onmousedown="mostrar()" onmouseup="ocultar()" title="Ver Contraseña"><span class="glyphicon glyphicon-eye-open"></span></button>
                    </span>
              </div>
          </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <a class="lab text-center center-block" href="" data-toggle="modal" data-target="#mimodal2" data-dismiss="modal"> ¿Ya tienes cuenta? Ingresar </a>

          {!! Form::button('Registrarse', ['class' => 'btn btn-primary btn-block disabled', 'id' => 'Registro_Completo']) !!}
                      
          {!! Form::close() !!}

@endsection



@section('form_login')
    @parent

          {!! Form::open(['id' => 'form_Login'])  !!}
            
            <br>

          <div class="form-group">

            {!! Form::label('email', 'Correo', ['class' => 'sr-only']) !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo', 'id' => 'Correo_ingresar']) !!}
   
          </div>

          <div class="form-group">

              {!! Form::label('contrasenia', 'Contraseña', ['class' => 'sr-only']) !!}
              {!! Form::password('contrasenia', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'pass_ingresar']) !!}
                              
                <a class="lab center-block olvidaste" href=""> ¿Olvidaste tu contraseña ? </a>

          </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          {!! Form::button('Ingresar', ['class' => 'btn btn-primary ingresar']) !!}

          <a class="lab2 text-center center-block" href="" data-toggle="modal" data-target="#mimodal" data-dismiss="modal"> ¿No tienes cuenta? Regístrate </a>
                      
          {!! Form::close() !!}

@endsection

