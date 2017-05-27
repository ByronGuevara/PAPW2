<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title> Perfil </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
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

    <div class="container" id="reconteiner">
        <div class="row">

@if(!session('modificar_datos')==null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('modificar_datos')}}
 </div>
@endif﻿

@if(!session('Foto_perfil_modificada')==null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('Foto_perfil_modificada')}}
 </div>
@endif﻿

@if(!session('modificar_noticia')==null)
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{session('modificar_noticia')}}
 </div>
@endif﻿

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="inicio">
                    <div id="info" class="animated lightSpeedIn retraso3">
                        <label> {{ $valores[1] }} </label>  <br>
                        @if($edad != "0 años")
                        <label> {{ $edad }} </label>    
                        @endif              
                    </div>
                    <div id="fondo">
                        <div id="f">
                            <img src="fotos/{{ $path_fotoportada }}" class="animated fadeInDownBig retraso" />
                        </div>
                        <div class="div-cambiar_foto_portada">
                                    <label id="po2" class="cambiar_foto_portada" title="Cambiar Foto de Portada">  <span class="glyphicon glyphicon-camera"> </span>
                                    </label>                                
                                </div>
                            <div id="Barra" class="animated lightSpeedIn retraso3">
                                <div id="Nombre">
                                    <span> {{ $valores[1] }} </span>
                                </div>
                            @if($edad != "0 años")
                                <div id="Edad">
                                    <span> {{ $edad }} </span>
                                </div>
                            @endif

                            </div>

                            <div id="perfil" class="animated zoomIn retraso2">
                                <img src="fotos/{{ $path_fotoperfil }}" />
                                <div class="div-cambiar_foto_perfil">
                                    <label id="po" class="cambiar_foto_perfil" title="Cambiar Foto de Perfil">  <span class="glyphicon glyphicon-camera"> </span> 
                                    </label>                                
                                </div>
                            </div>

                            <div id="Encabezado">
                                <a class="btn boton_fer" id="Configurar">Modificar Información</a>
                            </div>

                    <div id="Configuracion">

                        <div class="row">

                            @section('form_modificar_misdatos')
                            @show   

                            
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
                      <h4 class="modal-title text-center"> Cambiar Foto de Perfil </h4>
                    </div>

                    <div class="modal-body">

                            @section('form_fotoPerfil')
                            @show   

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
            
                            @section('form_fotoPortada')
                            @show  
                    </div>
              </div>   
            </div>
    </div>


    <div class="modal fade" id="mimodal3">
            <div class="modal-dialog center-block">
              <div class="modal-content">

                    <div class="modal-header">
                      <button class="close" aria-hidden="true" data-dismiss="modal"> &times; </button>
                      <br>
                      <img class="img-modal" src="img/logo.png" alt="Logo">
                      <h4 class="modal-title text-center"> Modificar Reseña </h4>
                    </div>

                    <div class="modal-body">
            
                            @section('form_noticia')
                            @show  
                    </div>
              </div>   
            </div>
    </div>


    <a class="center-block text-center mis_resenas"> Mis reseñas </a>
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





        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/sweetalert.min.js') }}"></script>


        <script>
            $(document).ready(function() {

$.ajaxSetup({
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
} 
});


if ( $(".Noticias").length > 0 ) {
}
else
{
$( "<div class='Noticias'> <br> <br> <h2 class='text-center' style='color:rgba(155,47,47, 0.7);''>Aún No Tienes Reseñas </h2> </div>" ).appendTo( "#Contenedor" );
}


            $('.eliminar').on('click', function (e) {
            e.preventDefault();  
                swal("", "Reseña Rechazada Correctamente", "success");                             
                var id = $(this).find('input').val();
                $.post('denegar',{
                    idUsuario: id
                }, function(data){
                    location.reload();
                });
            });

            $('.link_falso').on('click', function(e){ 
                        e.preventDefault();
                    });

             $('.modificar').on('click', function (e) {
                var id = $(this).find('input.id_not').val();
                var tit = $(this).find('input.titulo_not').val();
                var cat = $(this).find('input.categoria_not').val();
                var cont = $(this).find('input.contenido_not').val();
                var pat = $(this).find('input.path_not').val();

                $('#tit').val(tit);
                $('#idnot').val(id);
                $("option.cate").filter(function () {
                return this.text == cat
                }).attr('selected', true);
                $('#img').attr("src", "fotos/"+pat) 
                $('#txt').val(cont);


            });

                // Aparcer y desaparecer la seccion de modificar datos

                $("#po").click(function () {
                    $("#fperfil_aux").click();
                });

                $("#po2").click(function () {
                    $("#fportada_aux").click();
                });

                $("#Configurar").click(function () {

                    $("#Configuracion").slideToggle(1000);
                    $('html,body').animate({ scrollTop: $(".inicio").offset().top}, 2000);
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


                $("#fperfil_aux").change(function () {
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


                $("#fportada_aux").change(function () {
                    filePreview2(this);
                    $('#modal_portada').modal('toggle');
                });


// Modal Modificar Foto En La Reseña

                function filePreview3(input) 
                {
                        if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#mod_fot').remove();
                            $('<div id="mod_fot" align="center" style=opacity:0.5> <label> Foto Elegida: </label> <img class="animated zoomIn retraso" src="'+e.target.result+'" width="100%" height="100%"/> <br/> </div>').insertAfter(".aux3");
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                }


                $("#modificar_foto").change(function () {
                    filePreview3(this);
                });


                $('#modal_perfil').on('hide.bs.modal',function(){
                    $('#fperfil_aux').val('');
                });

                $('#modal_portada').on('hide.bs.modal',function(){
                    $('#fportada_aux').val('');
                });

                $('#mimodal3').on('hide.bs.modal',function(){
                    $('#modificar_foto').val('');
                });

                // Ver Mis Reseñas

                $('.mis_resenas').click(function(){
                    $('#Contenedor').slideToggle(2000);
                    $('html,body').animate({ scrollTop: $(".Noticias").offset().top}, 2000);
                });

                $(".pagination").wrap("<div class='center-block text-center'></div>");


              $(".teclas_nombre").each(function(){
                $(this).on('keypress', function(e){
                  key = e.keyCode || e.which;
                  tecla = String.fromCharCode(key).toString();
                  letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
                  especiales = [8, 6]; 
                  tecla_especial = false;

                for(var i in especiales) {
                    if(key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if(letras.indexOf(tecla) == -1 && !tecla_especial)
                {
                    swal("", "No se puede usar esta tecla", "warning");
                    return false;
                }
              });
           });

              if($("ul.pagination li:nth-child(1n+3) ").hasClass('active'))
                {
                    $("#reconteiner").hide();
                    $('#Contenedor').show();

                }




              $(".teclas_password").each(function(){
                $(this).on('keypress', function(e){
                    key = e.keyCode || e.which;
                    tecla = String.fromCharCode(key).toString();
                    letras = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ_,+0123456789@-.";
                    especiales = [8, 6];
                    tecla_especial = false;


                    for(var i in especiales) {
                        if(key == especiales[i]) {
                            tecla_especial = true;
                            break;
                        }
                    }

                    if(letras.indexOf(tecla) == -1 && !tecla_especial){
                    swal("", "No se puede usar esta tecla", "warning");
                        return false;
                     }
                    });
            });




            });

        </script>

    </body>
</html>
