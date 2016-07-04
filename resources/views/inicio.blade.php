@extends('layouts.master')

@section('inmuebles')
    @foreach ($inmuebles as $inmueble)
        <div class="col-md-3">
            <div class="info-icon">
            <h4>{{$inmueble->inmu_tine}}</h4>
                <div class="img">
                  <img src="../storage/app/{{$inmueble->info_foto}}" alt="..." class="img-rounded img-responsive">
                </div>
                <h3>Área: {{$inmueble->inmu_m2c}} M<sup>2</sup></h3>
                <p class="description">{{$inmueble->inmu_nomb}}</p>

                <a href="#" class="btn-fill">
                <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</a><br/><br/>
                <a class="btn btn-danger btn-fill" onclick="enviarAccion('{{url('inmueble/show', [$inmueble->inmu_iden])}}', '{{csrf_token()}}');">Ver Más</a>
            </div>
        </div>
    @endforeach
@endsection