<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title> Reseña </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/noticia.css') }}" rel="stylesheet">
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
                        <img class="img-responsive center-block logo" src="http://papw2.app/img/Logo.png"/> 
                    </div>

                    <div class="col-xs-6 col-sm-7 col-md-7 columna2">
                        <img class=" img-responsive center-block logoNombre" src="http://papw2.app/img/Nombre.png"/> 
                        <img class="img-responsive center-block logo_2" src="http://papw2.app/img/Logo.png"/> 
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
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="inicio">
                    <div id="Contenedor">
                        <div class="Noticias">

                            <h2 id="titulo"> {{ $titulo }} </h2>

                            <img id="imagen" class="center-block" src="http://papw2.app/fotos/{{$path}}">

                                
                            <p id="texto"> {{ $contenido }}
                            </p>

                            <div class="clear">
                                <div id="Autor">
                                    <span>Autor:</span>
                                    <a href="">{{ $nombre }}</a>
                                </div>
                                <div id="Fecha">
                                    <small> {{ $fecha }}</small>
                                </div>
                            </div>

                            <hr class="hr">

                    <input type="hidden" id="idNoticia" value="{{ $idNoticia }}">
                    <input type="hidden" id="idUsuario" value="{{ $valores[0] }}">


                    @section('comentarios')
                    @show


                    <div class="comentar">
                        <div class="form-group">
                            <div class="input-group">
                                <input id="comentario" type="text" class="form-control" placeholder="Escribe un Comentario">    
                                <span class="input-group-btn">
                                <button id="Comentar" class="btn btn-default" type="button"> <span class="glyphicon glyphicon-pencil"></span> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                        



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/js.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/sweetalert.min.js') }}"></script>



        <script>

            $(document).ready(function() {

$.ajaxSetup({
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
} 
});


                $('#comentario').keypress(function (e) {
                        if (e.which == 13) 
                        {
                        $('#Comentar').click();
                        return false;    
                        }
                    });


            $('#Comentar').click(function() {
                var txt = $("#comentario").val();
                var id_n = $("#idNoticia").val();
                var id_u = $("#idUsuario").val();

            if(txt != "")
            {

                $.post('comentar',{
                    comentario: txt,
                    idNoticia: id_n,
                    idUsuario: id_u
                }, function(data){
                    location.reload();
                });
            }
            else
            {
                swal("", "Escriba lo que desea comentar", "warning");
            }




            });

                            $(".pagination").wrap("<div class='center-block text-center'></div>");


            });

        </script>

    </body>
</html>
