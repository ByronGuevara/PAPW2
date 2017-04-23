<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Principal </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal.css') }}" rel="stylesheet">
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
            <div class="col-xs-12 col-sm-8 col-md-8">
                    <div id="contenedor">
                        <div id="slider">
                            <div class="slider-elemento">
                                <img src="img/Slider3.jpg">
                            </div>
                            <div class="slider-elemento">
                                <img src="img/Slider1.jpg">
                            </div>
                            <div class="slider-elemento">
                                <img src="img/Slider5.jpg">
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
                                <button class="btn btn-default btn-buscar" type="button"> <span class="glyphicon glyphicon-search"></span> </button>
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
                    <form id="publicar_reseña">
                    <br>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Titulo del Libro">      
                        </div>

                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option selected disabled>  Seleccione su Categoria: </option>
                                <option>Drama</option>
                                <option>Acción</option>
                                <option>Romanticismo</option>
                                <option>Ciencia Ficción</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control txtarea" rows="7" placeholder="Contenido de la Reseña..."></textarea>
                        </div>



                        <button  type="button" class="btn btn-primary compartir"> Compartir </button>

                    </form>

                    </div>
              </div>   
            </div>
          </div>



    <hr class=espacio>


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="Contenedor">

                <div class="Noticias">
                    <div class="div-foto">
                            <a href="" title="Noticia" class="NoticiaFoto"> <img src="img/Noticia1.jpg"></a>
                    </div>

                    <div class="div-descripcion">
                        <a href="">Thor Ragnarok has now been confirmed</a>
                        <p>Chris Hemsworth's reunion with his hammer and armour was originally scheduled for July 28, 2017, but later slipped to its current release date of November 3, 2017, in the US.</p>
                    </div>

                     <div id="Autor">
                        <span>Author:</span>
                        <a href="">Fernando Reyes López</a>
                        <small>29/08/2017</small>

                    </div>


                    <div class="clear">
                        <a href="" title="Me Gusta" class="Like title_image"></a>
                        <a href="" title="Comentar" class="Comentario title_image"></a>
                        <div id="Categoria" class="Action">Action</div>
                    </div>

                    <section class="lista-comentarios">

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

                    </section>

     
                </div>




                <div class="Noticias">
                    <div class="div-foto">
                            <a href="" title="Noticia" class="NoticiaFoto"> <img src="img/Noticia2.jpg"></a>
                    </div>

                    <div class="div-descripcion">
                        <a href="">La La Land’s inevitable Oscars win is a disaster for Hollywood</a>
                        <p>Rarely have the Oscars seen such a dead cert. If you fancy La La Land for best picture, the most attractive odds you will get are 9-2 on. The film is also nominated in another 13 categories. Ademas me parece una pelicula exageradamente sobrevalorada al mil porciento xd xd xd me faltaron bastantes xd xd xd hahaha pero pues ya que esperemos ahora si sa haya podido completar xd xd xd </p>
                    </div>

                     <div id="Autor">
                        <span>Author:</span>
                        <a href=""> Gerardo Daniel Rodríguez Cardona</a>
                        <small>09/04/2016</small>

                    </div>


                    <div class="clear">
                        <a href="" title="Me Gusta" class="Like title_image"></a>
                        <a href="" title="Comentar" class="Comentario title_image"></a>
                        <div id="Categoria" class="Romantic">Romantic</div>
                    </div>

                    <section class="lista-comentarios">

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
                                    <label> Salvador Becerra <small> 10/04/2016</small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='img/thumb.jpg' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> Salvador Becerra </label> <br>
                                    <small>10/04/2016</small>
                                </div>
                    
                                <p class='com'> Gracias </p>
                            </li>
                        </ol>
                    </div>

                    <div class="seccion_comentarios">
                        <ol>
                            <li>

                               <div class='info_none'>
                                    <label> Luis Tobias Escamilla <small> 11/04/2016</small> </label>
                                </div>

                                <figure class='fot'>
                                    <img src='img/thumb.jpg' class='fot_fot'>
                                </figure>
                                
                                <div class='inf'>
                                    <label> Luis Tobias Escamilla </label> <br>
                                    <small>11/04/2016</small>
                                </div>
                    
                                <p class='com'> Siceramente creo qe tu reseña es muy pobre, ya que le faltan demasiados argumentos, ademas se nota que eres fanboy de esta clase de peliculas, te recomiendo no volverr a realizar ninguna reseña en tu perra vida, haha saludos :v </p>
                            </li>
                        </ol>
                    </div>

                    </section>

                    
                </div>

        <div class="paginacion text-center">

                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

        </div>

            </div>
            </div>      
        </div>              
    </div>
                        

        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"<\/script>')</script>

        <script src="{{ asset('js/js.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>


        <script>
            $(document).ready(function() {

                $('.Comentario').click(function(e){
                      e.preventDefault();
                    $(this).parent().next('.lista-comentarios').slideToggle('fast');
                });



            });

        </script>

    </body>
</html>
