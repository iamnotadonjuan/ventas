<div id="carousel-fotos" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $i = 0 ?>
        @foreach ($inmuebles as $inmueble)
            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" <?php echo ($i == 0) ? 'class="active"' : '' ?>></li>
            <?php $i++ ?>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php $i = 0 ?>
        @foreach ($inmuebles as $inmueble)
            <div class="item  <?php echo ($i == 0) ? 'active' : ''?>">
                <img src="/ventas/storage/app/{{$inmueble->info_foto}}" alt="...">
                <div class="carousel-caption">
                    {{$inmueble->info_foto}}
                </div>
            </div>
            <?php $i++ ?>
        @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-fotos" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#carousel-fotos" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

@foreach ($inmuebles as $inmueble)
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <strong>Nombre</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_nomb}}
            </div>
            <div class="col-md-4">
                <strong>Fecha de publicación</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_fech}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>Descripción</strong>
            </div>
            <div class="col-md-10">
                {{$inmueble->inmu_desc}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>Estrato</strong>
            </div>
            <div class="col-md-10">
                {{$inmueble->inmu_estr}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>Valor</strong>
            </div>
            <div class="col-md-4">
                ${{$inmueble->inmu_valo}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>Tipo</strong>
            </div>
            <div class="col-md-4">
                {{$inmueble->inmu_tine}}
            </div>
            <div class="col-md-2">
                <strong>Para</strong>
            </div>
            <div class="col-md-4">
                {{$inmueble->inmu_prop}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Número de planchas</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_npla}}
            </div>
            <div class="col-md-4">
                <strong>Número de habitaciones</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_nhab}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Número de baños</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_nban}}
            </div>
            <div class="col-md-4">
                <strong>Número de parqueaderos</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_npar}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Número de pisos</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_npis}}
            </div>
            <div class="col-md-4">
                <strong>Metros cuadrados</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_m2c}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <strong>Metros cuadrados completos</strong>
            </div>
            <div class="col-md-2">
                {{$inmueble->inmu_m2nc}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <strong>¿Terraza?</strong>
            </div>
            <div class="col-md-2">
                <strong>¿Servicio acueducto?</strong>
            </div>
            <div class="col-md-2">
                <strong>¿Servicio energía?</strong>
            </div>
            <div class="col-md-2">
                <strong>¿Servicio gas?</strong>
            </div>
            <div class="col-md-2">
                <strong>¿Servicio telefónico?</strong>
            </div>
            <div class="col-md-2">
                <strong>¿Servicio BBQ?</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{($inmueble->inmu_terr == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-2">
                {{($inmueble->inmu_agua == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-2">
                {{($inmueble->inmu_luz == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-2">
                {{($inmueble->inmu_gas == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-2">
                {{($inmueble->inmu_tele == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-2">
                {{($inmueble->inmu_bbq == 1) ? 'Sí' : 'No'}}
            </div>
        </div>
    </div>
    <?php break; ?>
@endforeach