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
                mostrarInfoMunicipio( municipio );
            }
        }
    }

    function mostrarInfoMunicipio( municipio ){
        let elementoTag = document.getElementById('mostrarInformacionMunicipio');
        let codigoHTML   = '<div class="col offset-s1 s10"> <h4> '+ municipio['nombre']+' </h4>';
        codigoHTML      += '<div class="row">'+
                            '<div class="col offset-s1 s5"> <div class="row"> <div class="col"><b>Historia: </b>' + municipio['historia_general']  +'   </div>  </div>  '+
                            '<div class="row"> <div class="col"><b>Clima: </b>' + municipio['clima']  +' </div>  </div> '+
                            '<div class="row"> <div class="col"><b>Numero de habitantes: </b>' + municipio['numero_habitantes']  +' </div>  </div> '+
                            '</div>'+
                            '<div class="col offset-s1 s3"> <div class="row">Escudo: <img src="'+ municipio['escudo'] +'" style="width: 10em; "> </div> <div class="row">Mapa:<img src="'+ municipio['mapa'] +'" style="width: 10em; ">  </div> </div>'+
                            '</div>';
        codigoHTML      += '</div>';    
        elementoTag.innerHTML = codigoHTML;

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
                elegirMunicipio(elementoSeleccionado.value);
            });
        }
    }

</script>

    <div class="section white">
        <div class="row container">
            <h2 class="header">Conoce los municipios del estado</h2>
            <p>Elige una region</p> 
                @foreach ($regiones as $region)
                    <button class="waves-effect waves-light btn-large boton" id="boton" value="{{$region->id_region}}" >{{ $region->nombre }}</button>
                @endforeach
        </div>
        <div class="row" id="mostrarMunicipios"></div>

        <div class="row" id="mostrarInformacionMunicipio"></div>
    </div> 
            
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('images/calle_en_taxco.jpg') }}"></div>
    </div>

       

@endsection