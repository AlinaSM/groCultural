@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')
      
<h2>
    Operaciones de estados  
</h2>
<br>
<div class="container">
        <a href="/estado/create" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar" >Agregar Nuevo</a>
</div>
<br><br>    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Capital</th>
                <th>Ext. Territorial</th>
                <th>Gentitlicio</th>
                <th># Municipios</th>
                <th># Habitantes</th>
                <th>Operaciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($estados as $estado)
            <tr>
                <td>{{ $estado->id_estado }}</td>
                <td>{{ $estado->nombre  }}</td>
                <td>{{ $estado->capital  }}</td>
                <td>{{ $estado->extension_territorial  }}</td>
                <td>{{ $estado->gentilicio  }}</td>
                <td>{{ $estado->numero_municipios  }}</td>
                <td>{{ $estado->num_habitantes  }}</td>
                <td> 
                    <a href="/estado/{{$estado->id_estado}}/edit" class="btn tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons">cached</i></a>
                    <a href="/admin/estado/show/{{ $estado->id_estado }}" class="btn tooltipped red darken-4" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete_forever</i></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

  
@endsection