@extends('layouts.app')

@section('title', 'Estado')

@section('content')


    <div class="container">
        <h1>Sitio de Interes en Guerrero</h1>
        <div class="row">
           <div class="col">
                Buscar por:
            <p>
            <label>
                <input type="checkbox" id="checkLugar"/>
                <span>Lugar</span>
            </label>
            </p>
            <p>
            <label>
                <input type="checkbox" id="checkTipo"/>
                <span>Tipo</span>
            </label>

            
            </p>
           </div>
        </div>
        <div class="row">
            
            <div class="divLugares">
                <div class="input-field col offset-s1 s3">
                    <select name="Region" id="selectRegionesByEstado" required></select>
                    <label>Regiones:</label>
                </div>
    
                <div class="input-field col s3">
                    <select name="Municipio" id="selectMunicipiosByRegiones" required></select>
                    <label>Municipios:</label>
                </div>
            </div>

            <div class="divTipoSitios">
                <div class="input-field offset-s1 col s3">
                    <select name="tipo" id="idTipoSitio" required></select>
                    <label>Tipo de Interes:</label>
                </div>
            </div>
            
        </div>
        <button class="waves-effect waves-light btn" id="buscarFiltroSitios">Buscar</button>



    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('images/guerrerense01.jpg') }}"></div>
    </div>
    

    
@endsection