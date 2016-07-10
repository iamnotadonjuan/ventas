@extends('layouts.autenticado')

@section('contenido')
    <ol class="breadcrumb">
        <li><a href="{{url('inmueble/administrarinmuebles')}}">Mis publicaciones</a></li>
        <li class="active"><a href="{{url('deseo/listarofertas')}}">Ofertas</a></li>
    </ol>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ofertas as $oferta)
                    <tr>
                        <td>{{$oferta->usua_nomb}}</td>
                        <td>{{$oferta->email}}</td>
                        <td>{{$oferta->usua_tele}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{$ofertas->links()}}
@endsection