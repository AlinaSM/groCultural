@extends('layouts.admin')

@section('title', 'Creando Municipio')

@section('content')

    <div class="container">
        <h3>Sitio de Interes: {{ $sitio->nombre }}</h3>
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
                                        <td>{{ $sitio->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Clima</b></td>
                                        <td>{{ $tipo->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Historia general</b></td>
                                        <td>{{ $sitio->horario  }}</td>
                                    </tr> 

                                    <tr>
                                        <td><b>Num. Habitantes</b></td>
                                        <td>{{ $sitio->direccion  }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Estado</b></td>
                                        <td>{{ $estado->nombre  }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Region</b></td>
                                        <td>{{ $region->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Region</b></td>
                                        <td>{{ $municipio->nombre  }}</td>
                                    </tr>
                        
                            
                                </tbody>
                            </table>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col">
                                Imagen <br>    
                                <img style="width: 15em; " src={{ $sitio->imagen  }} >
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/sitios/{{ $sitio->id_interes_cult }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/sitios/destroy/{{ $sitio->id_interes_cult }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection