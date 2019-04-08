@extends('layouts.admin')

@section('title', 'Estado de Guerrero')

@section('content')

    @foreach ($estados as $estado)
        @if ($estado->nombre == 'Guerrero')
        <h2>
            Operaciones de estados  
        </h2>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Nombre</th>
                        <th>Nombre</th>
                        <th>Nombre</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td>{{ $estado->id_estado }}</td>
                        <td>{{ $estado->nombre  }}</td>
                        <td>{{ $estado->nombre  }}</td>
                        <td>{{ $estado->nombre  }}</td>
                        <td>{{ $estado->nombre  }}</td>
                        <td> 
                                <a class="btn tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons">cached</i></a>
                                <a class="btn tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons">delete_forever</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

                
        @endif
    @endforeach
  
@endsection