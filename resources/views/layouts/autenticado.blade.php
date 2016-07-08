<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <title>Arrendamos</title>

        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo asset('/img/apple-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo asset('img/favicon.png') ?>">
        <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
        <link href="<?php echo asset('css/gaia.css') ?>" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo asset('/css/fonts/pe-icon-7-stroke.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo asset('/css/arrendamos.css') ?>" media="screen" title="no title" charset="utf-8">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="<?php echo asset('/js/libreria.js') ?>"></script>
        <script src="<?php echo asset('/js/jquery.validate.min.js') ?>"></script>
        
        <!-- Carga de Imagenes -->
        <link href="<?php echo asset('css/jquery.filer.css') ?>" type="text/css" rel="stylesheet" />
        <link href="<?php echo asset('css/themes/jquery.filer-dragdropbox-theme.css') ?>" type="text/css" rel="stylesheet" />
        <script src="<?php echo asset('js/jquery.filer.js') ?>"></script>
    </head>
    <body>
        <!-- menu -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('inmueble/administrarinmuebles')}}">Arrendamos</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if(Auth::user()->tius_iden == 1)
                        <li class="active">
                            <a href="{{url('inmueble/administrarinmuebles')}}">Administrar inmuebles <span class="sr-only">(current)</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{url('deseo/listar')}}">Mi lista de deseos<span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="{{url('inmueble/administrarinmuebles')}}">Mis publicaciones<span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="{{url('inmueble/create')}}">Crear publicacion<span class="sr-only">(current)</span></a>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->usua_nomb }}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href={{url('auth/logout')}}>Mi perfil</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href={{url('auth/logout')}}>Cerrar Sesión</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        
        @yield('contenido')
    </body>
</html>
