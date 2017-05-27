<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title> Admin </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal_2.css') }}" rel="stylesheet">
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

                        <a href="/inicio" class="quitar_a center-block text-center" title="Cerrar Sesión"> <span class="glyphicon glyphicon-off iconos-header"></span> </a>

                    </div>
                </div>
            </div>
        </div>
    </header>


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

            $('.aceptar').on('click', function () { 
                swal("", "Reseña Aceptada Correctamente", "success");               
                var id = $(this).find('input').val();
                $.post('aceptar',{
                    idUsuario: id
                }, function(data){
                    location.reload();
                });
            });

            $('.denegar').on('click', function () {  
                swal("", "Reseña Rechazada Correctamente", "success");                             
                var id = $(this).find('input').val();
                $.post('denegar',{
                    idUsuario: id
                }, function(data){
                    location.reload();
                });
            });

        $(".pagination").wrap("<div class='center-block text-center'></div>");

        $('.link_falso').on('click', function(e){ 
                        e.preventDefault();
                    });


    });
        </script>

    </body>
</html>
