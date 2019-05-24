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
        xhr.open("GET","/religiones/getInfo/"+id,true);
        xhr.send();
    
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                let datos = JSON.parse(xhr.responseText);
                //ingresarSelect(municipios);
                mostrarInfo( datos );
            }
        }
    }

    /*
    function elegirMunicipio(id){
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'text';
        xhr.open("GET","/municipios/getAllInformation/"+id,true);
        xhr.send();
    
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                let datos = JSON.parse(xhr.responseText)[0];
               // mostrarInfo( datos );
            }
        }
    }*/

    function mostrarInfo( datos ){
        let elementoTag = document.getElementById('mostrarInformacionMunicipio');
        let codigoHTML   = '<div class="col offset-s1 s10"> <h4> '+ datos[0]['religion']+' </h4>';
        codigoHTML      += '<div class="row">'+ datos[0]['descripcion'] + '</div> </div>';    
        elementoTag.innerHTML = codigoHTML;

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
                elegirMunicipio(elementoSeleccionado.value);
            });
        }
    }

</script>

    <div class="section white">
        <div class="row ">
            <div class="col offset-s1">
                <h2 class="header">Religiones del estado</h2>
                <p>Elige una region</p> 
                @foreach ($religiones as $religion)
                    <button class="waves-effect waves-light btn-large boton" id="boton" value="{{$religion->id_religion}}" >{{ $religion->nombre }}</button>
                @endforeach
            </div>
        </div>
        <div class="row" id="mostrarMunicipios"></div>

        <div class="row" id="mostrarInformacionMunicipio"></div>
    </div> 
            
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('images/calle_en_taxco.jpg') }}"></div>
    </div>

       

@endsection