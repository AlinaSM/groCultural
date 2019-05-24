@extends('layouts.admin')

@section('title', 'Lenguajes')

@section('content')

    <div class="container">
        <h1>Tradicion: {{ $tradicion->nombre }}</h1>
           
            <div class="row">

                <div class="col s6">
                    <div id="mostrarTablaMuniTradiciones"></div>
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
                                <a class="waves-effect waves-light btn" id="agregarMunicipioTradicion">Agregar</a>
                            </div>
                        </div>                
                
                </div>
            </div>
                   
                 <input type="hidden" value={{ $tradicion->id_tradicion }} id="idTradicion">    
              
                <div class="row">
                    <div class="col offset-s2">
                        <a href="/tradiciones/{{ $tradicion->id_tradicion }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                    </div>
                </div>
          
                    
    </div>
            
@endsection