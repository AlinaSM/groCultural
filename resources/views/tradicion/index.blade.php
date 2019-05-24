@extends('layouts.app')

@section('title', 'Estado')

@section('content')

    
<script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    
    
        function elegirRegion(id){
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'text';
            xhr.open("GET","/municipios/getByRegiones/"+id,true);
            xhr.send();
        
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    let municipios = JSON.parse(xhr.responseText);
                    ingresarSelect(municipios);
                }
            }
        }
    
        function elegirMunicipio(id){
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'text';
            xhr.open("GET","/municipios/getAllInformation/"+id,true);
            xhr.send();
        
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    let municipio = JSON.parse(xhr.responseText)[0];
                   // mostrarInfoMunicipio( municipio );
                }
            }
        }
    
      
    
        function ingresarSelect(datos){
            document.getElementById('mostrarInformacionMunicipio').innerHTML = '';
            let elementoTag = document.getElementById('mostrarMunicipios');
            let codigoHTML = '';
            if(datos.length != 0){
                codigoHTML = '<div class="col offset-s1 s10">  ';
                for(let i = 0; i < datos.length; i++){                
                    codigoHTML += ' <button class="waves-effect waves-light orange darken-4 btn" value="'+ datos[i]['id'] +'" id="municipio">'+ datos[i]['municipio'] +'</button> ';
                }
                codigoHTML += '</div>';
    
            }else{
                
                M.toast({html: 'No hay municipios en esta region!',classes: 'rounded' })
            }
            elementoTag.innerHTML = codigoHTML;
            habilitarBotonesMunicipios();
        }
    
    
       document.addEventListener("DOMContentLoaded", function(){
            var botonesRegiones = document.querySelectorAll('#boton');
            for(botonRegion of botonesRegiones){
                botonRegion.addEventListener('click', function (evt){
                    let elementoSeleccionado = evt.target;
                   elegirRegion(elementoSeleccionado.value);
                });
            }
        });
      
    
    
        function habilitarBotonesMunicipios(){
            var botonesMunicipios = document.querySelectorAll('#municipio');
            for(botonMunicipio of botonesMunicipios){
                botonMunicipio.addEventListener('click', function (evt){
                    let elementoSeleccionado = evt.target;
                    //elegirMunicipio(elementoSeleccionado.value);
                });
            }
        }
    
    </script>
    
    
    
        <div class="container">
            <h1>Tradiciones en Guerrero</h1>
            <div class="row">
               <div class="col">
                    Buscar por:
                <p>
                <label>
                    <input type="checkbox" id="checkLugarT"/>
                    <span>Lugar</span>
                </label>
                </p>
                <p>
                <label>
                    <input type="checkbox" id="checkTipoT"/>
                    <span>Tipo</span>
                </label>
    
                
                </p>
               </div>
            </div>
            <div class="row">
                
                <div class="divLugaresT">
                    <div class="input-field col offset-s1 s3">
                        <select name="Region" id="selectRegionesByEstado" required></select>
                        <label>Regiones:</label>
                    </div>
        
                    <div class="input-field col s3">
                        <select name="Municipio" id="selectMunicipiosByRegiones" required></select>
                        <label>Municipios:</label>
                    </div>
                </div>
    
                <div class="divTipoTradiciones">
                    <div class="input-field offset-s1 col s3">
                        <select name="tipo" id="idTipoTradicion" required></select>
                        <label>Tipo de Tradiciones:</label>
                    </div>
                </div>
                
            </div>
            <button class="waves-effect waves-light btn" id="buscarFiltroTradiciones">Buscar</button>
    
            <div class="row">
    
                <div id="mostrarResultadoT"></div>
                
            </div>
    
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="{{ asset('images/guerrerense01.jpg') }}"></div>
        </div>
@endsection