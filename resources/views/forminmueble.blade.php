@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
<div>
    <form id="form_inmu">
        <input type="text" name="text_nomb" id="text_nomb" placeholder="Nombre">
        <textarea name="tear_desc" id="tear_desc" placeholder="Descripción"></textarea>
        <input type="text" name="text_valo" id="text_valo" placeholder="0">
        <input type="radio" name="radi_tipo" checked="true">Arriendo
        <input type="radio" name="radi_tipo">Venta
        <input type="number" name="numb_npla" id="numb_npla" placeholder="1">
        <input type="date" name="date_fech" id="date_fech">
        <input type="number" name="numb_habi" id="numb_habi" placeholder="1">
        <input type="number" name="numb_bano" id="numb_bano" placeholder="1">
        <input type="number" name="numb_parq" id="numb_parq" placeholder="1">
        <input type="number" name="numb_piso" id="numb_piso" placeholder="1">
        <input type="number" name="numb_m2c" id="numb_m2c" placeholder="50">
        <input type="number" name="numb_m2nc" id="numb_m2nc" placeholder="50">
        <input type="checkbox" name="chec_terr" id="chec_terr">¿Terraza?
        <select name="sele_estr" id="sele_estr">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <input type="checkbox" name="chec_agua" id="chec_agua">¿Servicio acueducto?
        <input type="checkbox" name="chec_ener" id="chec_ener">¿Servicio energía?
        <input type="checkbox" name="chec_gas" id="chec_gas">¿Servicio gas?
        <input type="checkbox" name="chec_tele" id="chec_tele">¿Servicio telefónico?
        <input type="checkbox" name="chec_bbq" id="chec_bbq">¿Servicio BBQ?
        <input type="radio" name="radi_prop" checked="true">Oferta
        <input type="radio" name="radi_prop">Demanda
        <button type="submit">Agregar</button>
    </form>
</div>
@endsection