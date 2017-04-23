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
        <link href="{{ asset('css/PAPW2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <span class="ir-arriba icon-arrow-up2"></span>


    <header class="app-header">

        <nav class="navbar app-navbar">
          <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                  <span class="icon-bar app-icon"></span>
                  <span class="icon-bar app-icon"></span>
                  <span class="icon-bar app-icon"></span>
                </button>

                <a href="#" class="navbar-brand app-link"> <span> <img class="img-header" src="img/logo.png" alt=""></span> Bookpapper </a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right app-nav">
                <li><a class="minusculas" href="#"> Inicio </a></li>
                <li><a class="minusculas" href="#" data-toggle="modal" data-target="#mimodal2"> Ingresar </a></li>
                <li><a class="crear_cuenta minusculas" href="#" data-toggle="modal" data-target="#mimodal"> Crear Cuenta </a></li>
              </ul>
            </div>
          </div>
        </nav>



          <div class="modal fade" id="mimodal">
            <div class="modal-dialog center-block">
              <div class="modal-content">

                    <div class="modal-header">
                      <button class="close" aria-hidden="true" data-dismiss="modal"> &times; </button>
                      <br>
                                          <img class="img-modal" src="img/logo.png" alt="Logo">

                      <h4 class="modal-title text-center"> Regístrate a Bookpapper </h4>
                    </div>

                    <div class="modal-body">

                    @section('form-registro')            
                    @show

                    </div>

                    <div class="modal-footer">
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
                      <h4 class="modal-title text-center"> Bienvenido a Bookpapper</h4>
                    </div>

                    <div class="modal-body">

                        @section('form-login')            
                        @show

                    </div>
              </div>   
            </div>
          </div>



        <section class="app-seccion1">
          <h1 class="app-titulo"> El mejor sitio para <sapn class="app-resaltar"> Compartir </sapn> experiencias literarias </h1>
          <p class="app-descripcion">
            Si estas buscando un sitio donde puedas compartir o encontrar experiencias de cualquier tipo de libro, este es el lugar indicado para 
            los amantes de la literatura.
          </p>

          <div class="app-formulario1">
            <div class="app-formulario2">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <button class="btn app-boton btn-block" data-toggle="modal" data-target="#mimodal"> Comenzar </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          
    </header>

        <section class="app-seccion3">
          <div class="container">

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <br>
                <img src="img/pluma.png" alt="" class="img-responsive img-cnt">
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6">
              <br>
                <h2 class="app-titulo2"> Comparta sus Experiencias </h2>
                <p class="app-separador"> </p>
                  <p class="app-justificar"> Comparte con miles de personas tus sentimientos por cualquier libro que hayas leido. </p>

                <div class="media app-media">
                  <div class="pull-left">
                    <span class="glyphicon glyphicon-pencil app-glyphicon1"></span>
                  </div>

                  <div class="media-body">
                    <h4 class="media-heading"> Escribe tus propias reseñas  </h4>
                    <p class="app-justificar">
                      Dejanos tus impresiones, positivas o negativas acerca de cualquier libro que hayas leido.
                    </p>
                  </div>                  
                </div>



                <div class="media app-media">
                  <div class="pull-left">
                    <span class="glyphicon glyphicon-heart app-glyphicon1"></span>
                  </div>

                  <div class="media-body">
                    <h4 class="media-heading"> Ayuda a miles de personas </h4>
                    <p class="app-justificar">
                      Gracias a tus comentarios, puedes ayudar a miles de personas a comenzar a leer un libro nuevo, o no hacerlo.
                    </p>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </section>
                
        <section class="app-seccion2">
          <div class="container">

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
              <br>
                <h2 class="app-titulo2"> Explore la genialidad </h2>
                <p class="app-separador"> </p>
                  <p class="app-justificar"> Disfruta al maximo de su estadia en Bookpapper y aprovecha sus grandes beneficios. </p>

                <div class="media app-media">
                  <div class="pull-left">
                    <span class="glyphicon glyphicon-book app-glyphicon1-2"></span>
                  </div>

                  <div class="media-body">
                    <h4 class="media-heading"> Nuevos Libros para Leer </h4>
                    <p class="app-justificar">
                      Si tienes dudas acerca de algun libro, puedes confiar en las opiniones de miles de personas para darte un mejor juicio.
                    </p>
                  </div>                  
                </div>



                <div class="media app-media">
                  <div class="pull-left">
                    <span class="glyphicon glyphicon-search app-glyphicon1-2"></span>
                  </div>

                  <div class="media-body">
                    <h4 class="media-heading"> Miles de Reseñas </h4>
                    <p class="app-justificar">
                      En Bookpapper puedes encontrar reseñas de cualquier libro en el mundo.
                    </p>
                  </div>                  
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-6">
                <br>
                <img src="img/literatura.png" alt="" class="img-responsive img-cnt">
              </div>
            </div>
          </div>
        </section>

        <section class="app-seccion3">
          <div class="container">
            <div class="app-contenedor">
              <h2 class="app-titulo3"> Características de Bookpapper </h2>
              <p class="app-separador2"> </p>
              <p> En Bookpapper puedes encontrar ésto y más. </p>
            </div>

            <div class="row">

              <div class="col-xs-12 col-sm-4">
                <div class="app-contenedor">
                  <p class="glyphicon glyphicon-phone glyphicon2"></p>
                  <h3> Responsive Web Design </h3>
                  <p class="app-descripcion2"> Bookpapper luce perfectamente en cualquier dispositivo. </p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="app-contenedor">
                  <p class="glyphicon glyphicon-briefcase glyphicon2"></p>
                  <h3> Fácil de Utilizar </h3>
                  <p class="app-descripcion2"> Un sitio muy comprensible y facil de utilizar. </p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="app-contenedor">
                  <p class="glyphicon glyphicon-gift glyphicon2"></p>
                  <h3> Construido por Bootstrap 3 </h3>
                  <p class="app-descripcion2"> Sitio construido 100% por Boostrap 3. </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <footer class="app-footer">
          <div class="app-empresa">
            <h4 class="texto-footer">Bookpapper</h4>
            <p class="texto-footer"> Agradecemos tu visita, Siguemos en nuestra redes sociales. </p>
          </div>
          <a href="http://www.facebook.com" target="_blank" class="a_span"> <span class="icon-facebook app-icon1  face"></span> </a>
          <a href="http://www.twitter.com" target="_blank" class="a_span"> <span class="icon-twitter app-icon1 twi"></span> </a>
          <a href="https://www.google.com/intl/es/gmail/about/" target="_blank" class="a_span"> <span class="icon-google-plus app-icon1 goog"></span> </a>
        </footer>

        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

                <script src="{{ asset('js/main.js') }}"></script>

                <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

                <script src="{{ asset('js/form.js') }}"></script>

    </body>
</html>
