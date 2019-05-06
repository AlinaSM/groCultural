@extends('layouts.admin')

@section('title', 'Creando Municipios')

@section('content')

<h1>Alta de Municipios</h1>
    <form  method="POST" action="/municipios" enctype="multipart/form-data">
        @csrf
            
        <div class="row">
            <div class="input-field col offset-s1 s9">
                <input placeholder="Municipio..." id="municipio" name = "nombre" type="text" class="validate">
                <label for="religion">Nombre del municipio:</label>
            </div>
        </div>

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
        
        
        <div class="row">
            <div class="input-field col s6">
                <label for="">Clima del municipio</label>
                <input placeholder="Clima..." name ="clima" type="text" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="">Numero de habitantes:</label>
                <input placeholder="Numero de habitantes..." name ="numero_habitantes" type="number" class="validate">
            </div>

        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea name="historia_general" class="materialize-textarea"></textarea>
                <label for="historia_general">Historia general...</label>
                
            </div>
        </div>  
        
        <div class="file-field input-field">
            <div class="btn">
                <span>Escudo municipio</span>
                    <input type="file" name="escudo">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    
        <div class="file-field input-field">
            <div class="btn">
                <span>Mapa municipio</span>
                    <input type="file" name="mapa">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    
                
        <div class="row">
            <div class="col offset-s4">
                <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
            </div>
        </div>
        

    </form>
                    

@endsection