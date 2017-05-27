<!doctype html>

@if(Session::has('datos'))

@else

            <script type='text/javascript'>
                window.location.href = '/inicio';
            </script>;

@endif


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title> Principal </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal_2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/categorias.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <header>

        <div class="container">
            <div class="row">
                <div id="general">

                    <div class="hidden-xs col-sm-2 col-md-2">
                        <img class="img-responsive center-block logo" src="img/Logo.png"/> 
                    </div>

                    <div class="col-xs-6 col-sm-7 col-md-7 columna2">
                        <img class=" img-responsive center-block logoNombre" src="img/Nombre.png"/> 
                        <img class="img-responsive center-block logo_2" src="img/Logo.png"/> 
                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-3 iconos">

                        <a href="/principal" class="quitar_a" title="Inicio"> <span class="glyphicon glyphicon-home iconos-header"></span> </a>
                        <a href="/perfil" class="quitar_a" title="Tu Perfil"> <span class="glyphicon glyphicon-user iconos-header"></span> </a>
                        <a href="/inicio" class="quitar_a" title="Cerrar Sesión"> <span class="glyphicon glyphicon-off iconos-header"></span> </a>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">
        @if(!session('mensaje')==null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('mensaje')}}
 </div>
@endif﻿
            <div class="col-xs-12 col-sm-8 col-md-8">
                    <div id="contenedor">
                        <div id="slider">
                            <div class="slider-elemento">
                                <a href="noticia/42"> <img src="img/s.jpg"> </a>
                            </div>
                            <div class="slider-elemento">
                                <a href="noticia/44"> <img src="img/ss.jpg"> </a>
                            </div>
                            <div class="slider-elemento">
                                <a href="noticia/45"> <img src="img/ssss.jpg"> </a>
                            </div>
                        </div>
                    </div>
            </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <div id="registrarse" data-toggle="modal" data-target="#mimodal2">
                <div class="info">
                    <span>¡Comparte una Reseña! </span>
                </div>      
            </div>

            <div id="BuscarContenido">
                <div class="content">
                    <form class="form-group">
            
            <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="Buscar" placeholder="Buscar Reseña" title="Puedes Buscar por Título o por Persona">    
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-buscar" type="button"> <span class="glyphicon glyphicon-search"></span> </button>
                            </span>
                        </div>
            </div>

                
                    <div id="check_buscar">
                        <input type="checkbox" id="filtro">
                        <label for="filtro">Filtrar por fechas </label>
                    </div>    

                    <div class="form-group text-center">
                        <label class="fecha_label" for="de"> Desde: </label>
                        <input type="date" id="de" class="rango-fechas" />
                    </div>

                    <div class="form-group text-center">
                        <label class="fecha_label" for="hasta"> Hasta: </label>
                        <input type="date" id="hasta" class="rango-fechas" />
                    </div>

                    </form>
                </div>
            </div>

        </div>

        </div>

    </div>



        <div class="modal fade" id="mimodal2">
            <div class="modal-dialog center-block">
              <div class="modal-content">

                    <div class="modal-header">
                      <button class="close" aria-hidden="true" data-dismiss="modal"> &times; </button>
                      <br>
                      <img class="img-modal" src="img/logo.png" alt="Logo">
                      <h4 class="modal-title text-center"> Comparte una Reseña</h4>
                    </div>

                    <div class="modal-body">
                        @section('form_noticia')   

                    {!! Form::open(['route' => 'principal.store', 'method' => 'POST', 'id' => 'publicar_reseña', 'enctype' => 'multipart/form-data' ])  !!}
         

                        <?php 
                            $a = [];
                            $a = session()->pull('datos');
                        ?>

                                <input type="hidden" name="idUsuario" value="{{ $a [0] }}">
                                <input type="hidden" name="nombre" value="{{ $a [1] }}">
                                <input type="hidden" name="email" value="{{ $a [2] }}">


                        @show
                    </div>
              </div>   
            </div>
          </div>



    <hr class=espacio>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="Contenedor">

                    @section('noticias')
                    @show

            </div>
            </div>      
        </div>              
    </div>

    <?php
                    session()->push('datos', $valores[0]);
                    session()->push('datos', $valores[1]);
                    session()->push('datos', $valores[2]);
                    session()->push('datos', $valores[3]);
                    session()->push('datos', $valores[4]);
                    session()->push('datos', $valores[5]);
    ?>
                        

        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/js.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/sweetalert.min.js') }}"></script>


        <script>
            $(document).ready(function() {

$.ajaxSetup({
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
} 
}); 

                    $('#Buscar').keypress(function (e) {
                        if (e.which == 13) 
                        {
                        $('.btn-buscar').click();
                        return false;    
                        }
                    });

                    $('.link_falso').on('click', function(e){ 
                        e.preventDefault();
                    });


                 $('.btn-buscar').click(function(){
                    var text = $('#Buscar').val();
                    var de = $('#de').val();
                    var hasta = $('#hasta').val();
                    var tip;

                    if($("#filtro").is(':checked')) {  
                        tip = '1';
                        } else {  
                        tip = '0';
                        }  

                        if(text != "")
                        {

                    $.post('busqueda',{
                        texto: text,
                        fecha_de: de,
                        fecha_hasta: hasta,
                        tipo: tip
                    }, function(data){
                        //location.reload();
                        if(data=="")
                        {
                            if(tip == "1")
                            {
                            swal("", "No Se Han Encontrado Resultados Para '"+text+"' entre el "+de+" y el "+hasta, "warning");
                            }
                            else
                            {
                                swal("", "No Se Han Encontrado Resultados Para '"+text+"'", "warning");
                            }
                        }
                        else
                        {
                            $('#Contenedor').empty();
                            $("#Contenedor").append(data);
                            $('html,body').animate({ scrollTop: $("#Contenedor").offset().top}, 2000);

                        }
                        //alert(data);
                    });
                }

                else
                {
                swal("", "Escriba lo que desea buscar", "warning");
                }


                });

                $('.Comentario').click(function(e){
                      e.preventDefault();
                    $(this).parent().next('.lista-comentarios').slideToggle('fast');
                });


            function filePreview(input) 
                {
                        if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('.img-select').remove();
                            $('#upload').before('<img class="center-block img-select animated fadeIn" src="'+e.target.result+'" width="70%"/>');
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                }


                $("#foto_resena").change(function () {
                    filePreview(this);
                });
                
                
                Date.prototype.toDateInputValue = (function() {
                var local = new Date(this);
                local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
                return local.toJSON().slice(0,10);
                });
                
                
                $('#de').val(new Date().toDateInputValue());
                $('#hasta').val(new Date().toDateInputValue());

                $(".pagination").wrap("<div class='center-block text-center'></div>");
                
                
                
    // Eventos Despues de Cerrar El Modal

    $('#mimodal2').on('hide.bs.modal',function(){
            $("#titulo_libro").val("");
            $("#foto_resena").val("");
            $(".txtarea").val("");
            $('.img-select').remove();
            
            $(".cat").each(function(){
                $(this).attr("selected",false);
            });
        });

    });
        </script>

    </body>
</html>
