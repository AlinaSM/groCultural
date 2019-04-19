<?php 
$region = $data['region'][0];
$estado = $data['estado'][0];
?>

@extends('layouts.admin')


@section('title', 'Region ')

@section('content')

    <div class="container">
        <h1>Region {{ $region->nombre }}</h1>
            <form  method="POST" action="/regiones" enctype="multipart/form-data">
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
                                        <td><b>Region</b></td>
                                        <td>{{ $region->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Estado</b></td>
                                        <td>{{ $estado->nombre  }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><b>Capital Regional</b></td>
                                        <td>{{ $region->capital_regional  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Ubicacion Geografica</b></td>
                                        <td>{{ $region->ubicacion_geografica  }}</td>
                                    </tr>


                                    <tr>
                                        <td><b>Num. Municipios</b></td>
                                        <td>{{ $region->numero_municipios  }}</td>
                                    </tr> 

                                    <tr>
                                        <td><b>Num. Habitantes</b></td>
                                        <td>{{ $region->numero_habitantes  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Descripcion</b></td>
                                        <td>{{ $region->descripcion  }}</td>
                                    </tr>
                        
                                </tbody>
                            </table>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col">
                                <b>Mapa</b>  
                                <br><br><br>
                                <img style="width: 15em; " src={{ $region->mapa  }} >
                                <br><br>
                                
                            </div>
                        </div>
                    </div>
                </div>
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/regiones/{{ $region->id_region }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/regiones/destroy/{{ $region->id_region }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection