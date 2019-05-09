@extends('layouts.admin')

@section('title', 'Lenguajes')

@section('content')

    <div class="container">
        <h1>Lenguaje: {{ $lenguaje->nombre }}</h1>
           
            <div class="row">

                <div class="col s6">
                        <h4>Lugares: </h4>
                        <div id="prueba"></div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Region 1</h4></li>
                        <li class="collection-item"><div>Municipio 1.1<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                    </ul>
                </div>
                <div class="col s6">
                       <h4>Lugar a asignar: </h4>
                        <div class="row">
                            <div class="input-field col offset-s1 s8">
                                <select name="Estado" id="idEstado" required></select>
                                <label>Estado:</label>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="input-field col offset-s1 s8">
                                <select name="Region" id="selectRegionesByEstado" required></select>
                                <label>Regiones:</label>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="input-field col offset-s1 s8">
                                <select name="Municipio" id="selectMunicipiosByRegiones" required></select>
                                <label>Municipios:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col offset-s3">
                                <a class="waves-effect waves-light btn" id="agregarMunicipioLenguaje">Agregar</a>
                            </div>
                        </div>                
                
                </div>
            </div>
                   
                 <input type="hidden" value={{ $lenguaje->id_lengua }} id="idLenguaje">    
              
                <div class="row">
                    <div class="col offset-s2">
                        <a href="/lenguajes/{{ $lenguaje->id_lengua }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                    </div>
                </div>
          
                    
    </div>
            
@endsection