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
        <div class="input-field offset-s3 col s5">
            <select name="tipo" id="idTipoTradicion" required></select>
            <label>Tipo de Tradicion:</label>
        </div>
    </div>

    <div id="mostrarTablaTradiciones"></div>
    
  
@endsection