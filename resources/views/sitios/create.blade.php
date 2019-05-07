@extends('layouts.admin')

@section('title', 'Creando Municipios')

@section('content')
    <div class="row">
        <div class="input-field col offset-s1 s9">
            <h2>Alta de Sitios de Interes</h2>
        </div>
    </div>

    <form  method="POST" action="/sitios" enctype="multipart/form-data">
        @csrf
            
        <div class="row">
            <div class="input-field col offset-s1 s9">
                <input  id="municipio" name = "nombre" type="text" class="validate" required>
                <label for="religion">Nombre:</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col offset-s1 s3">
                <select name="Estado" id="idEstado" required></select>
                <label>Estado:</label>
            </div>
    
            <div class="input-field col  s3">
                <select name="Region" id="selectRegionesByEstado" required></select>
                <label>Regiones:</label>
            </div>

            <div class="input-field col s3">
                <select name="Municipio" id="selectMunicipiosByRegiones" required></select>
                <label>Municipios:</label>
            </div>


        </div>

       
        <div class="row">

            <div class="input-field offset-s1 col s3">
                <select name="tipo" id="idTipoSitio" required></select>
                <label>Tipo de Interes:</label>
            </div>

            <div class="input-field col s3">
                <label for="">Horario</label>
                <input  name ="horario" type="text" class="validate" required>
            </div>

            <div class="input-field col s3">
                <label for="">Direccion</label>
                <input  name ="direccion" type="text" class="validate" required>
            </div>

        </div>

        <div class="row">
            <div class="input-field col offset-s1 s9">
                <textarea name="descripcion_general" class="materialize-textarea" required></textarea>
                <label for="descripcion_general">Descripcion</label>

            </div>
        </div>  
        
       <div class="row">
            <div class="file-field input-field col offset-s3 s5">
                <div class="btn">
                    <span>Imagen</span>
                        <input type="file" name="imagen" required>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
       </div>
    
    
                
        <div class="row">
            <div class="col offset-s4">
                <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
            </div>
        </div>
        

    </form>
                    

@endsection