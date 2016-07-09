@extends('layouts.autenticado')
@section('contenido')
  @include('layouts.modal')
  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style='display: none;'>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong> Usuario Actualizado.</strong>
	</div>
  <h2>Administracion de usuario</h2><br>
  <h3>Hola, {{Auth::user()->usua_nomb}}</h3>
  <table class="table">
    <thead>
      <tr>
        <th>
            Nombre
        </th>
        <th>
          E-mail
        </th>
        <th>
          Télefono
        </th>
        <th>
          Dirección
        </th>
        <th>
          Acción
        </th>
      </tr>
    </thead>
      <tbody id='datos'>
      </tbody>
  </table>
  <script src="<?php echo asset('/js/user.js')?>" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo asset('/css/arrendamos.css')?>" media="screen" title="no title" charset="utf-8">
@endsection
