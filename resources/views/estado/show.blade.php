@extends('layouts.admin')

@section('title', 'Creando Estado')

@section('content')

    <div class="container">
        <h1>Estado {{ $estado->nombre }}</h1>
            <form  method="POST" action="/estado" enctype="multipart/form-data">
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
                                        <td><b>nombre</b></td>
                                        <td>{{ $estado->nombre  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Capital</b></td>
                                        <td>{{ $estado->capital  }}</td>
                                    </tr>


                                    <tr>
                                        <td><b>Gentilicio</b></td>
                                        <td>{{ $estado->gentilicio  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Num. Municipios</b></td>
                                        <td>{{ $estado->numero_municipios  }}</td>
                                    </tr> 

                                    <tr>
                                        <td><b>Num. Habitantes</b></td>
                                        <td>{{ $estado->num_habitantes  }}</td>
                                    </tr>

                                    <tr>
                                        <td><b>Descripcion</b></td>
                                        <td>{{ $estado->descripcion  }}</td>
                                    </tr>
                        
                                </tbody>
                            </table>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="col">
                                Escudo <br>    
                                <img style="width: 15em; " src={{ $estado->imagen_escudo  }} >
                                <br><br>
                                Estado <br>    
                                <img style="width: 25em; " src={{ $estado->imagen_estado  }} >
                            </div>
                        </div>
                    </div>
                </div>
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/estado/{{ $estado->id_estado }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/estado/destroy/{{ $estado->id_estado }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection