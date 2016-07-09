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

                @if(Auth::check())
                    <a style="cursor: pointer" onclick="enviarAccion('{{ url('deseo/store') }}/{{$inmueble->inmu_iden}}','{{ csrf_token() }}');" class="btn-fill" id="a_anad{{ $inmueble->inmu_iden }}">
                        <i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos
                    </a>
                
                <!--glyphicon glyphicon-heart-->
                    <br/><br/>
                @endif
                <a class="btn btn-danger btn-fill" data-toggle="modal" data-target="#modalinmueble" onclick="enviarAccion('{{url('inmueble/show', [$inmueble->inmu_iden])}}', '{{csrf_token()}}');  $('#butt_anad').unbind('click').on('click', function(){ $('#a_anad{{ $inmueble->inmu_iden }}').trigger('click'); })">Ver Más</a>
            </div>
        </div>
    @endforeach
    
    <!-- Ver inmueble -->
    <div class="modal fade" tabindex="-1" role="dialog" data-target="#modalinmueble" id="modalinmueble">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Inmueble</h4>
                </div>
                <div class="modal-body">
                </div>
                @if(Auth::check())
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="butt_anad"><i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</button>
                    </div>
                @endif
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
@endsection