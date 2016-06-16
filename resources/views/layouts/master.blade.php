<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo asset('/img/apple-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo asset('img/favicon.png') ?>">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--    <title>App Name - @yield('title')</title>-->
        <title>Arrendamos</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
        <link href="<?php echo asset('css/gaia.css') ?>" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!--<link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">-->
        <link href="<?php echo asset('/css/fonts/pe-icon-7-stroke.css') ?>" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
            <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
            <div class="container">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                       Arrendamos
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">

                        <li class="dropdown">
                            <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-share-alt"></i>Compartir
                            </a>
                            <ul class="dropdown-menu dropdown-danger">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" target="_blank" data-toggle="modal" data-target="#myModal2"> Iniciar Sesión</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-danger btn-fill" data-toggle="modal" data-target="#myModal">Registrate</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->


    <!-- form registrate-->
    <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel">Registrate</h3>
          </div>
          <div class="modal-body">

    <form>
      <div class="form-group">
        <input type="text" class="form-control"  placeholder="Digite su Nombre">
      </div>
      <div class="form-group">
        <input type="email" class="form-control"  placeholder="Digite su correo">
      </div>
       <div class="form-group">
        <input type="password" class="form-control"  placeholder="Digite su Clave">
      </div>
      <div class="form-group">
        <input type="text" class="form-control"  placeholder="Digite su Dirección">
      </div>
      <div class="form-group">
        <input type="text" class="form-control"  placeholder="Digite su Teléfono">
      </div>

      </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger btn-fill">Registrarse</button>
          </div>
        </div>
      </div>
    </div>
    <!-- form fin registrate-->

    <!-- form Iniciar Sesión-->
    <div class="modal fade bs-example-modal-sm" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel">Inicia Sesión</h3>
          </div>
          <div class="modal-body">

    <form>
      <div class="form-group">
        <input type="email" class="form-control"  placeholder="Digite su correo">
      </div>
       <div class="form-group">
        <input type="password" class="form-control"  placeholder="Digite su Clave">
      </div>

      </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger btn-fill">Acceder</button>
          </div>
        </div>
      </div>
    </div>
    <!-- form fin Iniciar Sesión-->


            </div>
        </nav>


        <div class="section section-header">
            <div class="parallax filter filter-color-blue">
                <div class="image"
                    style="background-image: url('<?php echo asset('img/fondo.jpeg') ?> ')">
                </div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <p>Encuentra</p>
                            <h1 class="title-modern">Inmuebles</h1>
                            <h3>Inicia tu busqueda aquí</h2>
                            <div class="row">
                             <div class="col-md-6">
                             <label>Tipo de inmueble:</label>
                             <select id="inmueble" name="inmueble" class="form-control">
                                <option selected="selected" value="">Todos</option>
                                </select>
                            </div>
                             <div class="col-md-6">
                              <label>operación:</label>
                             <select id="operacion" name="operacion" class="form-control">
                            <option selected="selected" value="">Todos</option>
                            </select></div>
                            </div>

                           <div class="row">
                           <div class="col-md-12">
                              <label>Buscar por palabra:</label>
                             <input type="text" name="palabra" class="form-control">

                             </div>

                            </div>

                          <!--  <div class="separator line-separator">♦</div> -->
                        </div>

                        <div class="button-get-started">
                            <a href="#" target="_blank" class="btn btn-danger btn-fill btn-lg ">
                                Buscar
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">

                <div class="row">
                    <div class="title-area">
                        <h2>Encuentra</h2>
                        <div class="separator separator-danger">✻</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 2000 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>

                     <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png')?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>



                <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>

                     <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área:20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>
                </div>

    <div class="row">
                    <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 2000 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>

                     <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>



                <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png')?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área: 20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>

                     <div class="col-md-3">

                        <div class="info-icon">
                        <h4>Arriendo</h4>
                            <div class="img">
                              <img src="<?php echo asset('img/casas/casa_01.png') ?>" alt="..." class="img-rounded img-responsive">
                            </div>
                            <h3>Área:20 M<sup>2</sup></h3>
                            <p class="description">Santa Cruz Conjunto Cerrado.</p>

                            <a href="#" class="btn-fill">
                            <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>

                            <a href="#" class="btn btn-danger btn-fill">Ver Más</a>


                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="section section-our-team-freebie">
            <div class="parallax filter filter-color-black">
                <div class="image" style="background-image:url('<?php echo asset('/img/header-2.jpeg') ?>')">
                </div>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="title-area">
                                <h2>Nuestro equipo de trabajo</h2>
                                <div class="separator separator-danger">✻</div>
                                <p class="description">El proyecto arrendamos fue realizado y esta medias gracias a:</p>
                            </div>
                        </div>

                        <div class="team">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <div class="avatar avatar-danger">
                                                        <img alt="..." class="img-circle" src="<?php echo asset('img/faces/juan.png') ?>"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title">Juan</h3>
                                                        <p class="small-text">Desarrollador Junior</p>
                                                        <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <div class="avatar avatar-danger">
                                                        <img alt="..." class="img-circle" src="<?php echo asset('img/faces/jorge.png') ?>"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title">Jorge</h3>
                                                        <p class="small-text">Desarrollador</p>
                                                        <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-member">
                                                <div class="content">
                                                    <div class="avatar avatar-danger">
                                                        <img alt="..." class="img-circle" src="<?php echo asset('img/faces/ana.png') ?>"/>
                                                    </div>
                                                    <div class="description">
                                                        <h3 class="title">Ana</h3>
                                                        <p class="small-text">Diseñadora</p>
                                                        <p class="description">I miss the old Kanye I gotta say at that time I’d like to meet Kanye And I promise the power is in the people and I will use the power given by the people to bring everything I have back to the people.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <footer class="footer footer-big footer-color-black" data-color="black">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <div class="info">
                            <h5 class="title">Nuestra Empresa</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Inicio</a></li>

                                    <li>
                                        <a href="#">Nuestro portafolio</a>
                                    </li>
                                    <li>
                                        <a href="#">Acerca de nosotros</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3">
                        <div class="info">
                            <h5 class="title">Ayuda y soporte</h5>
                             <nav>
                                <ul>
                                    <li>
                                        <a href="#">Contáctenos</a>
                                    </li>

                                    <li>
                                        <a href="#">Terminos y condiciones</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="info">
                            <h5 class="title">Ultimas Noticias</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                            <hr class="hr-small">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-1 col-sm-3">
                        <div class="info">
                            <h5 class="title">Siguenos</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="btn btn-social btn-facebook btn-simple">
                                            <i class="fa fa-facebook-square"></i> Facebook
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="btn btn-social btn-twitter btn-simple">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-social btn-reddit btn-simple">
                                            <i class="fa fa-google-plus-square"></i> Google+
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="copyright">
                     © <script> document.write(new Date().getFullYear()) </script> Theblacklotus, hecho con amor
                </div>
            </div>
        </footer>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        
        <!--   core js files    -->
        <script src="<?php echo asset('js/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo asset('js/bootstrap.js')?>" type="text/javascript"></script>

        <!--  js library for devices recognition -->
        <script type="text/javascript" src="<?php echo asset('js/modernizr.js')?>"></script>

        <!--  script for google maps   -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

        <!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
        <script type="text/javascript" src="<?php echo asset('js/gaia.js')?> "></script>
    </body>
</html>