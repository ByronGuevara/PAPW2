<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Reseña </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/noticia.css') }}" rel="stylesheet">
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
                    <div id="Contenedor">
                        <div class="Noticias">

                            <h2 id="titulo">Thor Ragnarok has now been confirmed. </h2>

                            <img id="imagen" class="center-block" src="img/Noticia1.jpg">

                                
                            <p id="texto">Chris Hemsworth's reunion with his hammer and armour was originally scheduled for July 28, 2017, but later slipped to its current release date of November 3, 2017, in the US. <br>
                            Thor: Ragnarok is an upcoming American superhero film based on the Marvel Comics character Thor, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is intended to be the sequel to 2011's Thor and 2013's Thor: The Dark World and the seventeenth film installment of the Marvel Cinematic Universe (MCU). The film is directed by Taika Waititi with a screenplay by Eric Pearson, and stars Chris Hemsworth, Tom Hiddleston, Cate Blanchett, Idris Elba, Jeff Goldblum, Tessa Thompson, Karl Urban, Mark Ruffalo and Anthony Hopkins. In Thor: Ragnarok, Thor must defeat the Hulk in a gladiatorial duel in time to save Asgard from Hela and the coming Ragnarök.<br><br>
                            A third Thor film was confirmed in January 2014, with the title and involvement of Hemsworth and Hiddleston announced that October. Waititi joined the film as director the next October, after Alan Taylor chose not to return from the second film, and Ruffalo joined the cast, crossing over the character Hulk from other MCU films. With the Hulk's inclusion, elements from the 2006 comic storyline "Planet Hulk" were adapted for Ragnarok. The rest of the cast was confirmed the next May, with Pearson revealed to be involved with the film at the start of filming in July 2016. Principal photography took place from July to October, 2016, in Queensland and Sydney, Australia, with the film having exclusive use of Village Roadshow Studios in Oxenford.
                            </p>

                            <div class="clear">
                                <div id="Autor">
                                    <span>Autor:</span>
                                    <a href="">Fernando Reyes López</a>
                                </div>
                                <div id="Fecha">
                                    <small> 30/04/2017</small>
                                </div>
                            </div>

                            <hr class="hr">



                    <div class="comentar">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe un Comentario">    
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-pencil"></span> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                        
                    <div class="seccion_comentarios">
                        <ol>
                            <li>

                               <div class='info_none'>
                                    <label> Fernando Reyes Lopez <small>29/08/2017</small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='img/thumb.jpg' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> Fernando Reyes Lopez </label> <br>
                                    <small>29/08/2017</small>
                                </div>
                    
                                <p class='com'> Genial </p>
                            </li>
                        </ol>
                    </div>

                    <div class="seccion_comentarios">
                        <ol>
                            <li>

                               <div class='info_none'>
                                    <label> Gerardo Rodriguez <small>30/08/2017</small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='img/thumb.jpg' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> Gerardo Rodriguez </label> <br>
                                    <small>30/08/2017</small>
                                </div>
                    
                                <p class='com'> Gracias Bro! </p>
                            </li>
                        </ol>
                    </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <script>
            $(document).ready(function() {

            });

        </script>

    </body>
</html>
