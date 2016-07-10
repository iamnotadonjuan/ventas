@extends('layouts.autenticado')

@section('contenido')
    <ol class="breadcrumb">
        <li class="active"><a href="{{url('inmueble/administrarinmuebles')}}">Mis publicaciones</a></li>
        <li><a href="{{url('deseo/listarofertas')}}">Ofertas</a></li>
    </ol>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead
                <tr>
                    <th>Identificación</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inmuebles as $inmueble)
                    <tr>
                        <td>{{$inmueble->inmu_iden}}</td>
                        <td>{{$inmueble->inmu_nomb}}</td>
                        <td>{{$inmueble->inmu_desc}}</td>
                        <td class="toggle-field">
                            @if(Auth::user()->tius_iden == 1)
                                @if ($inmueble->inmu_est === 'Desactivado')
                                    <button id="butt_esta{{$inmueble->inmu_iden}}" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="cambiarEstadoInmueble('<?php echo url('inmueble/cambiarestado'); ?>' ,'{{csrf_token()}}',{{$inmueble->inmu_iden}})">
                                @else
                                    <button id="butt_esta{{$inmueble->inmu_iden}}" type="button" class="btn btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off" onclick="cambiarEstadoInmueble('<?php echo url('inmueble/cambiarestado'); ?>' ,'{{csrf_token()}}',{{$inmueble->inmu_iden}})">
                                @endif
                                    {{$inmueble->inmu_est}}
                                </button>
                            @else
                                {{$inmueble->inmu_est}}
                            @endif
                        </td>
                        <td>
                            <a style="cursor: pointer" data-toggle="modal" data-target="#modalinmueble" onclick="enviarAccion('{{url('inmueble/show', [$inmueble->inmu_iden])}}', '{{csrf_token()}}');">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            
                            @if(Auth::user()->tius_iden == 2)
                                <a style="cursor: pointer" href="{{url('inmueble/edit', [$inmueble->inmu_iden])}}">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </a>
                                <a style="cursor: pointer" href="{{url('inmueble/destroy', [$inmueble->inmu_iden])}}">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{$inmuebles->links()}}

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
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script type="text/javascript">
        $().button('toggle')
    </script>
@endsection