@extends('layouts.admin')

@section('title', 'Creando Estado')

@section('content')

    <div class="container">
        <h1>Religion: {{ $religion->nombre }}</h1>
            <form  method="POST" action="/religiones" enctype="multipart/form-data">
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
                                        <td><b>nombre</b></td>
                                        <td>{{ $religion->nombre  }}</td>
                                    </tr>

            
                                    <tr>
                                        <td><b>Descripcion</b></td>
                                        <td>{{ $religion->descripcion  }}</td>
                                    </tr>
                        
                                </tbody>
                            </table>
                    </div>
                   
                     
              
                <div class="row">
                        <div class="col offset-s2">
                                <a href="/religiones/{{ $religion->id_religion }}/edit" class="  waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>¿Ir a modificar ?</a>
                            <a href="/admin/religiones/destroy/{{ $religion->id_religion }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar permanentemente</a>
                        </div>
                    </div>
            </form>
                    
    </div>
            
@endsection