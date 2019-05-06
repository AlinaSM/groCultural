@extends('layouts.admin')

@section('title', 'Creando Municipio')

@section('content')

    <div class="container">
        <h1>Municipio {{ $municipio->nombre }}</h1>
            <form  method="POST" action="/municipios" enctype="multipart/form-data">
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
                                        <td>{{ $municipio->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Clima</b></td>
                                        <td>{{ $municipio->clima  }}</td>
                                    </tr>


                                    <tr>
                                        <td><b>No. de Habitantes</b></td>
                                        <td>{{ $municipio->numero_habitantes  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Historia general</b></td>
                                        <td>{{ $municipio->historia_general  }}</td>
                                    </tr> 

                                    <tr>
                                        <td><b>Num. Habitantes</b></td>
                                        <td>{{ $municipio->numero_habitantes  }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Estado</b></td>
                                        <td>{{ $estado->nombre  }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Region</b></td>
                                        <td>{{ $region->nombre  }}</td>
                                    </tr>
                        
                            
                                </tbody>
                            </table>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col">
                                Escudo <br>    
                                <img style="width: 15em; " src={{ $municipio->escudo  }} >
                                <br><br>
                                Estado <br>    
                                <img style="width: 25em; " src={{ $municipio->mapa  }} >
                            </div>
                        </div>
                    </div>
                </div>
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/municipios/{{ $municipio->id_municipio }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/municipios/destroy/{{ $municipio->id_municipio }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection