@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')
      
<h2>
    Operaciones de religiones  
</h2>
<br>
<div class="container">
        <a href="/religiones/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar Nuevo</a>
</div>
<br><br>    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Religion</th>
                <th>Descripcion</th>
                <th>Operaciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($religiones as $religion)
            <tr>
                <td>{{ $religion->id_religion }}</td>
                <td>{{ $religion->nombre  }}</td>
                <td>{{ $religion->descripcion  }}</td>
              
                <td> 
                    <a href="/religiones/{{ $religion->id_religion }}/edit" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons">cached</i></a>
                    <a href="/admin/religiones/show/{{ $religion->id_religion }}" class="btn tooltipped red darken-4" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete_forever</i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

  
@endsection