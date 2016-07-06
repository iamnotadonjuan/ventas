@extends('layouts.form')
@section('content')
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
                        <td>{{$inmueble->inmu_est}}</td>
                        <td>
                            <a style="cursor: pointer" data-toggle="modal" data-target="#modalinmueble" onclick="enviarAccion('{{url('inmueble/show', [$inmueble->inmu_iden])}}', '{{csrf_token()}}');">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-heart-o fa-lg"></i> Añadir a la lista de deseos</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script type="text/javascript">
        $().button('toggle')
    </script>
@endsection