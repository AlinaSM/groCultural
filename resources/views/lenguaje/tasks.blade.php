@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')
      
<h2>
    Operaciones de lenguaje  
</h2>
<br>
<div class="container">
        <a href="/lenguajes/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar Nuevo</a>
</div>
<br><br>    
    <div class="row">
        <div class="col offset-s2 s7">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Lenguaje</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
        
                <tbody>
        
                    @foreach ($lenguajes as $lenguaje)
                    <tr>
                        <td>{{ $lenguaje->id_lengua }}</td>
                        <td>{{ $lenguaje->nombre  }}</td>              
                        <td> 
                            <a href="/admin/lenguajes/asignar/{{ $lenguaje->id_lengua }}" class="btn tooltipped blue" data-position="bottom" data-tooltip="Asignar"><small >Asignar lugar</small></a>
                            <a href="/lenguajes/{{ $lenguaje->id_lengua }}/edit" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons">cached</i></a>
                            <a href="/admin/lenguajes/show/{{ $lenguaje->id_lengua }}" class="btn tooltipped red darken-4" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete_forever</i></a>
                        </td>
                    </tr>
                    @endforeach
        
                </tbody>
            </table>
        </div>
    </div>


  
@endsection