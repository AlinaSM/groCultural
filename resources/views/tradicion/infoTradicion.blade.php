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
        <h3>Sitio de Interes: {{ $tradicion->nombre }}</h3>
            <form  method="POST" action="/sitios" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col s6">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Campo</th>
                                        <th>Dato</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><b>Nombre</b></td>
                                        <td>{{ $tradicion->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Tipo</b></td>
                                        <td>{{ $tipo->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Fechas</b></td>
                                        <td>{{ $tradicion->fecha_festejo  }}</td>
                                    </tr> 

                                    <tr>
                                        <td><b>Descripcion</b></td>
                                        <td>{{ $tradicion->descripcion  }}</td>
                                    </tr>

                                </tbody>
                            </table>

                            <input type="hidden" value={{ $tradicion->id_tradicion }} id="idTradicion">    
                            <div class="col s6">
                                    <div id="mostrarTablaMuniTradiciones"></div>
                                </div>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col">
                                Imagen <br>    
                                <img style="width: 15em; "  src="{{$tradicion->imagen}}"  >
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
                </div>
                     

                    
    </div>

@endsection