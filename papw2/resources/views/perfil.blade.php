<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Bookpapper </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/PAPW2_perfil_2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

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

                        <a href="" class="quitar_a" title="Inicio"> <span class="glyphicon glyphicon-home iconos-header"></span> </a>
                        <a href="" class="quitar_a" title="Tu Perfil"> <span class="glyphicon glyphicon-user iconos-header"></span> </a>
                        <a href="" class="quitar_a" title="Cerrar Sesión"> <span class="glyphicon glyphicon-off iconos-header"></span> </a>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="inicio">
                    <div id="info">
                        <label> Fernando Reyes López</label>  <br>
                        <label> 21 años || </label>                  
                        <label>  4431285861 </label>                  
                    </div>
                    <div id="fondo">
                        <img src="img/Noticia2.jpg" class="animated fadeInDownBig retraso" />
                        <div class="div-cambiar_foto_portada">
                                    <label class="cambiar_foto_portada" title="Cambiar Foto de Portada">  <span class="glyphicon glyphicon-camera"> </span>
                                        <input type="file" name="" id="fportada" accept="image/*"/>                         
                                    </label>                                
                                </div>
                            <div id="Barra" class="animated lightSpeedIn retraso3">
                                <div id="Nombre">
                                    <span>Fernando Reyes López</span>
                                </div>
                                <div id="Edad">
                                    <span>21 años</span>
                                </div>
                                <div id="Celular">
                                    <span>4431285861</span>
                                </div>
                            </div>

                            <div id="perfil" class="animated zoomIn retraso2">
                                <img src="img/Ejemplo.jpg" />
                                <div class="div-cambiar_foto_perfil">
                                    <label class="cambiar_foto_perfil" title="Cambiar Foto de Perfil">  <span class="glyphicon glyphicon-camera"> </span> 
                                        <input type="file" name="" id="fperfil" accept="image/*"/>                         
                                    </label>                                
                                </div>
                            </div>

                            <div id="Encabezado">
                                <a class="btn" id="Configurar">Modificar Información</a>
                            </div>

                    <div id="Configuracion">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="text" class="form-control" placeholder="Fernando Reyes López">
                            </div>
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="text" class="form-control" placeholder="ferni_cristiano@hotmail.com">
                            </div>
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="text" class="form-control" placeholder="**********">
                            </div>
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="text" class="form-control" placeholder="4431285861">
                            </div>
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="date" class="form-control" placeholder="ferni_cristiano@hotmail.com">
                            </div>
                            <div class="col-xs-6 col-sm-6 vamo">
                                <input type="button" class="form-control btn btn-primary" value="Modificar">
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_perfil">
            <div class="modal-dialog center-block">
              <div class="modal-content">

                    <div class="modal-header">
                      <button class="close" aria-hidden="true" data-dismiss="modal"> &times; </button>
                      <br>
                      <img class="img-modal" src="img/logo.png" alt="Logo">
                      <h4 class="modal-title text-center"> Cambiar Foto de Perfil</h4>
                    </div>

                    <div class="modal-body">
                    <form id="">
                    <input type="hidden" class="aux">



                      <button  type="button" class="btn btn-primary ingresar center-block"> Confirmar </button>
                      
                    </form>

                    </div>
              </div>   
            </div>
    </div>


    <div class="modal fade" id="modal_portada">
            <div class="modal-dialog center-block">
              <div class="modal-content">

                    <div class="modal-header">
                      <button class="close" aria-hidden="true" data-dismiss="modal"> &times; </button>
                      <br>
                      <img class="img-modal" src="img/logo.png" alt="Logo">
                      <h4 class="modal-title text-center"> Cambiar Foto de Portada</h4>
                    </div>

                    <div class="modal-body">
                    <form id="">
                    <input type="hidden" class="aux2">



                      <button  type="button" class="btn btn-primary ingresar center-block"> Confirmar </button>
                      
                    </form>

                    </div>
              </div>   
            </div>
    </div>


        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script>
            $(document).ready(function() {

                // Aparcer y desaparecer la seccion de modificar datos

                $("#Configurar").click(function () {

                    $("#Configuracion").slideToggle(1000);
                    $('html,body').animate({ scrollTop: $(".vamo").offset().top}, 2000);
                });


    // Aparecer y desaparecer la opcion de cambiar la foto de perfil con hover            

                $("#perfil").hover(function () {
                    var div = $('.div-cambiar_foto_perfil'); 
                    var duration = 300;  

                        if (div.css('visibility') == 'visible') 
                        {
                            div.css({ opacity: 1 }).animate({ opacity: 0 }, duration, function () {
                            div.css({ visibility: "hidden" });
                            });
                        } 
                        else 
                        {
                            div.css({ opacity: 0 }).animate({ opacity: 1 }, duration).css({ visibility: "visible" });
                        }                     
                });


    // Aparecer y desaparecer la leyenda "Cambiar Foto dependiendo del tipo de pantalla"            


                if ($(window).width() > 600)  //Se corre al cargar la pagina
                {  
                    $(".cambiar_foto_perfil").append("Cambiar Foto");
                }

                var contador = 0;   

                $(window).resize(function(){   // Se corre cada vez que modificas el tamaño de la ventana
                    if ($(window).width() <= 600) 
                    {  
                        $(".cambiar_foto_perfil").html($('.cambiar_foto_perfil').html().replace('Cambiar Foto', ''));
                        contador=1;
                    }
                    else
                    {
                        if(contador==1)
                        $(".cambiar_foto_perfil").append("Cambiar Foto");
                        contador = 0;
                    }
                });


    // Modal para cambiar la foto de perfil

                function filePreview(input) 
                {
                        if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#tempo').remove();
                            $('<div id="tempo" align="center" style=opacity:0.5> <label> Foto Elegida: </label> <img class="animated zoomIn retraso" src="'+e.target.result+'" width="100%" height="100%"/> <br/> <br/> </div>').insertAfter(".aux");
                                                     }
                            reader.readAsDataURL(input.files[0]);
                        }
                }


                $("#fperfil").change(function () {
                    filePreview(this);
                    $('#modal_perfil').modal('toggle');
                });


    // Modal para cambiar la foto de portada

                function filePreview2(input) 
                {
                        if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#tempo2').remove();
                            $('<div id="tempo2" align="center" style=opacity:0.5> <label> Foto Elegida: </label> <img class="animated zoomIn retraso" src="'+e.target.result+'" width="100%" height="100%"/> <br/> <br/> </div>').insertAfter(".aux2");
                                                     }
                            reader.readAsDataURL(input.files[0]);
                        }
                }


                $("#fportada").change(function () {
                    filePreview2(this);
                    $('#modal_portada').modal('toggle');
                });


                $('#modal_perfil').on('hide.bs.modal',function(){
                    $('#fperfil').val('');
                });

                $('#modal_portada').on('hide.bs.modal',function(){
                    $('#fportada').val('');
                });



            });

        </script>

    </body>
</html>
