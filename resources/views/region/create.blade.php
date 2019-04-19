@extends('layouts.admin')

@section('title', 'Creando Region')

@section('content')

    <div class="container">
        <h1>Alta de Region</h1>
            <form  method="POST" action="/regiones" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nombre de la Region</label>
                        <input placeholder="Nombre..." name ="nombre" type="text" class="validate">
                    </div>

                    <div class="input-field col s6">
                        <label for="">Capital Regional</label>
                        <input placeholder="Capital..." name ="capital_regional" type="text" class="validate">
                    </div>

                </div>
                <br>
                <div class="row">
                        <div class="input-field col s3">
                            <label for="">Ubicacion Geografica</label>
                            <input placeholder="Donde se encuentra..." name ="ubicacion_geografica" type="text" class="validate">
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
                            <input placeholder="No. de municipios..." name ="numero_habitantes" type="number" class="validate">
                        </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 ">
                        <label for="">Descripcion</label>
                        <textarea name="descripcion"  class="materialize-textarea"></textarea>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="Estado" id="idEstado">
                                <option value="" disabled selected>Elige un estado</option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->id_estado }}">{{ $estado->nombre }}</option>
                                @endforeach
                            </select>
                            <label>Estado:</label>
                        </div>
                    </div>
                    <div class="input-field col s6 ">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen del mapa</span>
                                <input type="file" name="mapa">
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