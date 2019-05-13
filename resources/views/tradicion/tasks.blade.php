@extends('layouts.admin')

@section('title', 'Sitios de Interes')

@section('content')

<h2>
    Operaciones de tradiciones
</h2>
<br>
<div class="container">
        <a href="/tradiciones/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar un nuevo sitio</a>
        <a href="/tipostradiciones/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar un nuevo tipo de sitio</a>
</div>
<br><br>

    <div class="row">
        <div class="input-field col offset-s1 s4">
            <select name="Tipo" id="idTipoTradiciones"></select>
            <label>Tipos de Tradicion:</label>
        </div>

        
    </div>

    <div id="mostrarTablaTradiciones"></div>
    
  
@endsection