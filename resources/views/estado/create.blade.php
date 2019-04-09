@extends('layouts.admin')

@section('title', 'Creando Estado')

@section('content')

    <div class="container">
        <h1>Alta de estado</h1>
            <form  method="POST" action="/estado" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nombre del Estado</label>
                        <input placeholder="Nombre..." name ="nombre" type="text" class="validate">
                        
                    </div>
                    <div class="input-field col s6">
                        <label for="">Gentilicio</label>
                        <input placeholder="Gentilicio..." name ="gentilicio" type="text" class="validate">
                                
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="input-field col s3">
                            <label for="">Capital</label>
                            <input placeholder="Capital..." name ="capital" type="text" class="validate">
                        
                        </div>
                        <div class="input-field col s3">
                            <label for="">Extension territorial</label>
                            <input placeholder="Extension territorial..." name ="extension_territorial" type="number" class="validate">
                                    
                        </div>
                        <div class="input-field col s3">
                            <label for="">No. de municipios</label>
                            <input placeholder="No. de municipios..." name ="numero_municipios" type="number" class="validate">
                                    
                        </div>
                        <div class="input-field col s3">
                            <label for="">No. de habitantes</label>
                            <input placeholder="No. de municipios..." name ="num_habitantes" type="number" class="validate">
                                    
                        </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 offset-s3">
                        <label for="">Descripcion</label>
                        <textarea name="descripcion"  class="materialize-textarea"></textarea>
                        
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
                </div>
                     
                <div class="row">
                    <div class="col offset-s4">
                        <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
                    </div>
                </div>

            </form>
                    
    </div>
            
@endsection