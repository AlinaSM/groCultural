@extends('layouts.admin')

@section('title', 'Editar Religion')

@section('content')
<div class="container">
        <h1>Editar Lenguaje</h1>

    
    <form  method="POST" action="/lenguajes/{{  $lenguaje->id_lengua  }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nombre de la lenguaje</label>
                    <input placeholder="Nombre..." name ="nombre" type="text" class="validate" value="{{ $lenguaje->nombre }}">
                        
                    </div>
                    <div class="input-field col s6">
                        <label for="">Descripcion</label>
                        <input placeholder="Descripcion..." name ="descripcion" type="text" class="validate" value="{{ $lenguaje->descripcion }}">
                                
                    </div>
                </div>
               


                <br>
                <br>

                <div class="row">
                    <div class="col offset-s3">
                        <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cached</i>Modificar</button>
                        <a href="/admin/religiones/show/{{ $lenguaje->id_lengua }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar</a>
                    </div>
                </div>

            </form>
                    
    </div>

        
@endsection