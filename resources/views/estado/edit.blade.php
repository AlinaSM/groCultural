@extends('layouts.admin')

@section('title', 'Editar Estado')

@section('content')
<div class="container">
        <h1>Editar estado</h1>

    
    <form  method="POST" action="/estado/{{  $estado->id_estado  }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nombre del Estado</label>
                    <input placeholder="Nombre..." name ="nombre" type="text" class="validate" value="{{ $estado->nombre }}">
                        
                    </div>
                    <div class="input-field col s6">
                        <label for="">Gentilicio</label>
                        <input placeholder="Gentilicio..." name ="gentilicio" type="text" class="validate" value="{{ $estado->gentilicio }}">
                                
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6 offset-s3">
                        <label for="">Capital</label>
                        <input placeholder="Capital..." name ="capital" type="text" class="validate" value="{{ $estado->capital }}">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="input-field col s4">
                        <label for="">Extension territorial</label>
                        <input placeholder="Extension territorial..." name ="extension_territorial" type="number" class="validate" value="{{ $estado->extension_territorial }}">
                                
                    </div>
                    <div class="input-field col s4">
                        <label for="">No. de municipios</label>
                        <input placeholder="No. de municipios..." name ="numero_municipios" type="number" class="validate" value="{{ $estado->numero_municipios }}">
                                
                    </div>
                    <div class="input-field col s4">
                        <label for="">No. de habitantes</label>
                        <input placeholder="No. de municipios..." name ="num_habitantes" type="number" class="validate" value="{{ $estado->num_habitantes }}">
                                
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="">Descripcion</label>
                        <textarea name="descripcion"  class="materialize-textarea">{{ $estado->descripcion }}</textarea>
                        
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="input-field col s6">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen de Escudo</span>
                                <input type="file" name="imagen_escudo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s6 ">
                        <img style="width: 5rem;"  src={{ $estado->imagen_escudo }} alt="" srcset="">
                    </div>
                </div>
                

                <div class="row ">
                    
                    <div class="input-field col s6">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen del mapa</span>
                                <input type="file" name="imagen_estado">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                        <div class="input-field col s6">
                        <img style="width: 5rem;"  src={{ $estado->imagen_estado }} alt="" srcset="">
                    </div>
                </div>


                     
                <div class="row">
                    <div class="col offset-s3">
                        <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cached</i>Modificar</button>
                        <a href="/admin/estado/show/{{ $estado->id_estado }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar</a>
                    </div>
                </div>

            </form>
                    
    </div>

        
@endsection