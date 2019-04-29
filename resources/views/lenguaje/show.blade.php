@extends('layouts.admin')

@section('title', 'Lenguajes')

@section('content')

    <div class="container">
        <h1>Lenguaje: {{ $lenguaje->nombre }}</h1>
            <form  method="POST" action="/lenguajes" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col s6 offset-s3">
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
                                        <td>{{ $lenguaje->nombre  }}</td>
                                    </tr>

            
                                    <tr>
                                        <td><b>Descripcion</b></td>
                                        <td>{{ $lenguaje->descripcion  }}</td>
                                    </tr>
                        
                                </tbody>
                            </table>
                    </div>
                   
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/lenguajes/{{ $lenguaje->id_lengua }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/lenguajes/destroy/{{ $lenguaje->id_lengua }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection