@extends('layouts.form')
@section('content')
  @if(Auth::check())
    <div class="dropdown">
      <a id="dLabel" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->usua_nomb }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dLabel">
        <a href={{url('auth/logout')}}>Cerrar Sesión</a>
      </ul>
    </div>
    <div class="container">
        <div class="row">
            <form id="form_inmu" class="form-horizontal">
                <div class="form-group">
                    <label for="text_nomb" class="col-md-2 control-label">Nombre</label>
                    <div class="col-md-10">
                        <input type="text" name="text_nomb" id="text_nomb" placeholder="Nombre" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text_desc" class="col-md-2 control-label">Descripción</label>
                    <div class="col-md-10">
                        <textarea name="tear_desc" id="tear_desc" placeholder="Descripción" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text_valo" class="col-md-2 control-label">Valor</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input type="text" name="text_valo" id="text_valo" placeholder="0.00" class="form-control text-right">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text_valo" class="col-md-2 control-label">Tipo</label>
                    <div class="col-md-4">
                        <label class="radio-inline">
                            <input type="radio" name="radi_tipo" checked="true" value="Arriendo">Arriendo
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="radi_tipo" value="Venta">Venta
                        </label>
                    </div>
                    <label for="text_valo" class="col-md-2 control-label">¿Para?</label>
                    <div class="col-md-4">
                        <label class="radio-inline">
                            <input type="radio" name="radi_prop" checked="true" value="Oferta">Oferta
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="radi_prop" value="Demanda">Demanda
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numb_npla" class="col-md-2 control-label">Número de planchas</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_npla" id="numb_npla" placeholder="1" class="form-control">
                    </div>
                    <label for="text_fech" class="col-md-2 control-label">Fecha</label>
                    <div class="col-md-2">
                        <input type="date" name="date_fech" id="date_fech" class="form-control" placeholder="dd/mm/aaaa">
                    </div>
                    <label for="numb_habi" class="col-md-2 control-label">Habitaciones</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_habi" id="numb_habi" placeholder="1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="numb_habi" class="col-md-2 control-label">Número de baños</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_bano" id="numb_bano" placeholder="1" class="form-control">
                    </div>
                    <label for="numb_habi" class="col-md-2 control-label">Número de parqueaderos</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_parq" id="numb_parq" placeholder="1" class="form-control">
                    </div>
                    <label for="numb_habi" class="col-md-2 control-label">Número de pisos</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_piso" id="numb_piso" placeholder="1" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="numb_habi" class="col-md-2 control-label">Metros cuadrados</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_m2c" id="numb_m2c" placeholder="50" class="form-control">
                    </div>
                    <label for="numb_habi" class="col-md-2 control-label">Metros cuadrados completos</label>
                    <div class="col-md-2">
                        <input type="number" name="numb_m2nc" id="numb_m2nc" placeholder="50" class="form-control">
                    </div>
                    <label for="sele_estr" class="col-md-2 control-label">Estrato</label>
                    <div class="col-md-2">
                        <select name="sele_estr" id="sele_estr" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_terr" id="chec_terr">¿Terraza?
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_agua" id="chec_agua">¿Servicio acueducto?
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_ener" id="chec_ener">¿Servicio energía?
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_gas" id="chec_gas">¿Servicio gas?
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_tele" id="chec_tele">¿Servicio telefónico?
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="chec_bbq" id="chec_bbq">¿Servicio BBQ?
                        </label>
                    </div>
                </div>
                <?php echo csrf_field(); ?>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
        <div class="row">
            <form>
                <input type="hidden" name="hidd_idin" id="hidd_idin" value="0">
                <input type="file" name="file_imag" id="filer_input" multiple="multiple">
            </form>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
            // Validación de datos
            $("#form_inmu").validate({
                rules:{
                    text_nomb : {required: true},
                    tear_desc : {required: true},
                    text_valo : {required: true, number: true, min: 1},
                    numb_npla : {required: true, number: true},
                    date_fech : {required: true, date: true},
                    numb_habi : {required: true, number: true, min: 1},
                    numb_bano : {required: true, number: true, min: 1},
                    numb_parq : {required: true, number: true},
                    numb_piso : {required: true, number: true, min: 1},
                    numb_m2c  : {required: true, number: true, min: 1},
                    numb_m2nc : {required: true, number: true, min: 1}
                },
                submitHandler: function(form) {
                  enviarFormulario('<?php echo action('InmuebleController@store'); ?>','#form_inmu');
                }
            });

            $('#filer_input').filer({
                changeInput: '<div class="jFiler-input-dragDrop "><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Arrastra las imagenes aquí</h3> <span style="display:inline-block; margin: 15px 0">o</span></div><a class="jFiler-input-choose-btn blue">Buscalas</a></div></div>',
                showThumbs: true,
                theme: "dragdropbox",
                templates: {
                    box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
                    item: '<li class="jFiler-item">\
                                <div class="jFiler-item-container">\
                                    <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb">\
                                            <div class="jFiler-item-status"></div>\
                                            <div class="jFiler-item-info">\
                                                <span class="jFiler-item-title"><b title="@{{fi-name}}">@{{fi-name | limitTo: 25}}</b></span>\
                                                <span class="jFiler-item-others">@{{fi-size2}}</span>\
                                            </div>\
                                            @{{fi-image}}\
                                        </div>\
                                        <div class="jFiler-item-assets jFiler-row">\
                                            <ul class="list-inline pull-left">\
                                                <li>@{{fi-progressBar}}</li>\
                                            </ul>\
                                            <ul class="list-inline pull-right">\
                                                <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                            </ul>\
                                        </div>\
                                    </div>\
                                </div>\
                            </li>',
                    itemAppend: '<li class="jFiler-item">\
                                    <div class="jFiler-item-container">\
                                        <div class="jFiler-item-inner">\
                                            <div class="jFiler-item-thumb">\
                                                <div class="jFiler-item-status"></div>\
                                                <div class="jFiler-item-info">\
                                                    <span class="jFiler-item-title"><b title="@{{fi-name}}">@{{fi-name | limitTo: 25}}</b></span>\
                                                    <span class="jFiler-item-others">@{{fi-size2}}</span>\
                                                </div>\
                                                @{{fi-image}}\
                                            </div>\
                                            <div class="jFiler-item-assets jFiler-row">\
                                                <ul class="list-inline pull-left">\
                                                    <li><span class="jFiler-item-others">@{{fi-icon}}</span></li>\
                                                </ul>\
                                                <ul class="list-inline pull-right">\
                                                    <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                                </ul>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </li>',
                    progressBar: '<div class="bar"></div>',
                    itemAppendToEnd: false,
                    removeConfirmation: true,
                    _selectors: {
                        list: '.jFiler-items-list',
                        item: '.jFiler-item',
                        progressBar: '.bar',
                        remove: '.jFiler-item-trash-action'
                    }
                },
                dragDrop: {
                    dragEnter: null,
                    dragLeave: null,
                    drop: null,
                },
                uploadFile: {
                    url: "<?php echo action('InmuebleFotoController@store'); ?>",
                    data: null,
                    type: 'POST',
                    enctype: 'multipart/form-data',
                    beforeSend: function(){
                    },
                    success: function(data, el, l, p, o, s, id, textStatus, jqXHR){
                        
                        var parent = el.find(".jFiler-jProgressBar").parent();
                        var jsonData = JSON.parse(data);
                        
                        el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                            $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                        });
                        
                        $('.jFiler-item').each(function(){ 
                            if ($(this).attr('data-jfiler-index') == id) {
                                $(this).find('.icon-jfi-trash').click(function(){
                                    $.ajax({
                                       type: 'POST',
                                       url: '<?php echo url('inmueblefoto/destroy'); ?>/' + jsonData.identificacion,
                                       data: { _token: '{{csrf_token()}}' }
                                    });
                                });
                            }
                        });
                    },
                    error: function(el){
                        var parent = el.find(".jFiler-jProgressBar").parent();
                        el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                            $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                        });
                    },
                    statusCode: null,
                    onProgress: null,
                    onComplete: null
                }
            });

        });
    </script>
  @else
    <div class="container">
      <h2>Debes iniciar sesión para poder crear una publicacion</h2>
    </div>
  @endif
@endsection
