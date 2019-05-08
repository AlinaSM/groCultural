@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')

<h2>
    Operaciones de municipios  
</h2>
<br>
<div class="container">
        <a href="/municipios/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar municipio</a>
</div>
<br><br>

    <div class="row">
        <div class="input-field col offset-s1 s4">
            <select name="Estado" id="idEstado"></select>
            <label>Estado:</label>
        </div>

        <div class="input-field col offset-s1 s4">
            <select name="Region" id="selectRegionesByEstado"></select>
            <label>Regiones:</label>
        </div>
    </div>

    <div id="mostrarTablaMunicipios"></div>
    
  
@endsection