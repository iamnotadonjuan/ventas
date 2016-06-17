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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="<?php echo asset('/js/libreria.js') ?>"></script>
        <script src="<?php echo asset('/js/jquery.validate.min.js') ?>"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>