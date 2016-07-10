
<div class="row">
    
    <div class="col-md-6">    

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
                   <!-- {{$inmueble->info_foto}} -->
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
        
    </div> 
    
    
    @foreach ($inmuebles as $inmueble)
     
    <div class="col-md-6 padding-vertical">
        
        <div class="row">
            <div class="col-md-4">
                <strong>Nombre</strong>
            </div>
            <div class="col-md-8">
                {{$inmueble->inmu_nomb}}
            </div>
        
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <strong>Descripción</strong>
            </div>
            <div class="col-md-8">
                {{$inmueble->inmu_desc}}
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <strong>Valor</strong>
            </div>
            <div class="col-md-8">
                <span class="valor"> ${{$inmueble->inmu_valo}}</span>
            </div>
        </div>    
            
        
        <div class="row">
            <div class="col-md-4">
                <strong>Tipo</strong>
            </div>
            <div class="col-md-8">
                {{$inmueble->inmu_tine}}
            </div>
        </div>
 
        <div class="row">
             <div class="col-md-4">
                <strong>Publicado</strong>
            </div>
            <div class="col-md-8">
                {{$inmueble->inmu_fech}}
            </div>
        </div>    

    </div> 
</div>    
    
    

   
        
        <h4 class="titulo">Información general del inmueble</h4>    
    
    <div class="row general">
        
        <div class="col-md-3 text-center">
            
             <div class="col-md-12">
                <strong>Área</strong>
             </div>    
             <div class="col-md-12">    
                {{$inmueble->inmu_m2c}}M<sup>2</sup>
             </div>   
        </div>
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12">
                <strong>Área Const</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_m2nc}}M<sup>2</sup>
            </div>
        </div>
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12">
                <strong>Habitaciones</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_nhab}}
            </div>
            
        </div>
        
        
        <div class="col-md-3 text-center">
            
           <div class="col-md-12">
                <strong>Parqueaderos</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_npar}}
            </div> 
            
        </div>
        
        
        
    </div>

    <div class="row general">
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12"> 
                <strong>Pisos</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_npis}}
            </div>
            
        </div>
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12"> 
                <strong>Baños</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_nban}}
            </div>
            
        </div>
        
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12"> 
                <strong>Estrato</strong>
            </div>
            <div class="col-md-12">
                {{$inmueble->inmu_estr}}
            </div>
            
        </div>
        
        <div class="col-md-3 text-center">
            
            <div class="col-md-12"> 
                <strong>Para</strong>
            </div>
            <div class="col-md-12">
                  {{$inmueble->inmu_prop}}
            </div>
            
        </div>
        
    </div>    
    
  
    
    <h4 class="titulo">Generalidades</h4>    
        
        
        <div class="row text-center">
            <div class="col-md-4">
                <strong>¿Terraza?</strong>
            </div>
            <div class="col-md-4">
                <strong>¿Servicio acueducto?</strong>
            </div>
            <div class="col-md-4">
                <strong>¿Servicio energía?</strong>
            </div>
          
        </div>
        
        <div class="row text-center">
            <div class="col-md-4">
                {{($inmueble->inmu_terr == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-4">
                {{($inmueble->inmu_agua == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-4">
                {{($inmueble->inmu_luz == 1) ? 'Sí' : 'No'}}
            </div>
            
        </div>
        
        <div class="row text-center">
            
            <div class="col-md-4">
                <strong>¿Servicio gas?</strong>
            </div>
            
            <div class="col-md-4">
                <strong>¿Servicio telefónico?</strong>
            </div>
            <div class="col-md-4">
                <strong>¿Servicio BBQ?</strong>
            </div>
        </div>
        
        
        
        <div class="row text-center">
            <div class="col-md-4">
                {{($inmueble->inmu_gas == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-4">
                {{($inmueble->inmu_tele == 1) ? 'Sí' : 'No'}}
            </div>
            <div class="col-md-4">
                {{($inmueble->inmu_bbq == 1) ? 'Sí' : 'No'}}
            </div>
        </div>

    <?php break; ?>
@endforeach