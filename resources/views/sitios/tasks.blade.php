@extends('layouts.admin')

@section('title', 'Sitios de Interes')

@section('content')

<h2>
    Operaciones de sitios de interes
</h2>
<br>
<div class="container">
        <a href="/sitios/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar un nuevo sitio</a>
        <a href="/sitios/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar un nuevo tipo de sitio</a>
</div>
<br><br>

    <div class="row">
        <div class="input-field col offset-s1 s4">
            <select name="Tipo" id="idTipoSitio"></select>
            <label>Tipos de Sitios:</label>
        </div>

        
    </div>

    <div id="mostrarTablaSitios"></div>
    
  
@endsection