@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')
      
<h2>
    Operaciones de regiones  
</h2>
<br>
<div class="container">
        <a href="/regiones/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar nueva region</a>
</div>
<br><br>

    <div class="row">
        <div class="input-field col offset-s1 s10">
            <select name="Estado" id="idEstado">
                <option value="" disabled selected>Elige un estado</option>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id_estado }}">{{ $estado->nombre }}</option>
                @endforeach
            </select>
            <label>Estado:</label>
        </div>
    </div>
    
   
 <div id="mostrarRegiones"></div>
  
@endsection