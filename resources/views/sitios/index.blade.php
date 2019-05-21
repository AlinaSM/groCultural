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

    <div class="section white">
        <div class="row ">
            <div class="col offset-s1">
                <h2 class="header">Sitios de Interes en el estado</h2>
                <p>Elige una region</p> 
                @foreach ($regiones as $region)
                    <button class="waves-effect waves-light btn-large boton" id="boton" value="{{$region->id_region}}" >{{ $region->nombre }}</button>
                @endforeach
            </div>
        </div>
        <div class="row" id="mostrarMunicipios"></div>

         <!-- Dropdown Trigger -->
        <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Tipos de Sitios!</a>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
        </ul>

        <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
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

        <div class="row" id="mostrarInformacionMunicipio"></div>
    </div> 
            
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('images/calle_en_taxco.jpg') }}"></div>
    </div>

       

@endsection