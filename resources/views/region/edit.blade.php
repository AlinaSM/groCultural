<?php 
$estado = $data['estado'][0];
$listaDeEstados = $data['estados'];
$region = $data['region']; 



?>

@extends('layouts.admin')

@section('title', 'Editar Region')

@section('content')
<div class="container">
        <h1>Editar region</h1>

       
    
    <form  method="POST" action="/regiones/{{  $region->id_region  }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nombre de la Region</label>
                        <input placeholder="Nombre..." name ="nombre" type="text" class="validate" value="{{ $region->nombre }}">
                    </div>
                    
                    <div class="input-field col s6 ">
                        <label for="">Capital</label>
                        <input placeholder="Capital..." name ="capital_regional" type="text" class="validate" value="{{ $region->capital_regional }}">
                    </div>
                    
                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="Estado" >
                            <option value="{{ $estado->id_estado }}" selected>{{ $estado->nombre }}</option>
                            @foreach ($listaDeEstados as $estadoListado)
                                @if ($estado->id_estado != $estadoListado->id_estado)
                                    <option value="{{ $estadoListado->id_estado }}">{{ $estadoListado->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label>Estado:</label>
                    </div>

                   

                    <div class="input-field col s6">
                        <label for="">Ubicacion Geografica</label>
                        <input placeholder="Ubicacion Geografica..." name ="ubicacion_geografica" type="text" class="validate" value="{{ $region->ubicacion_geografica }}">
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="input-field col s4">
                        <label for="">Extension territorial</label>
                        <input placeholder="Extension territorial..." name ="extension_territorial" type="number" class="validate" value="{{ $region->extension_territorial }}">
                    </div>
                    <div class="input-field col s4">
                        <label for="">No. de municipios</label>
                        <input placeholder="No. de municipios..." name ="numero_municipios" type="number" class="validate" value="{{ $region->numero_municipios }}">
                    </div>
                    <div class="input-field col s4">
                        <label for="">No. de habitantes</label>
                        <input placeholder="No. de municipios..." name ="numero_habitantes" type="number" class="validate" value="{{ $region->numero_habitantes }}">
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="">Descripcion</label>
                        <textarea name="descripcion"  class="materialize-textarea">{{ $region->descripcion }}</textarea>
                    </div>
                </div>

            
                
                <div class="row">
                    
                    <div class="input-field col s6">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Mapa</span>
                                <input type="file" name="mapa">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <img style="width: 15rem;"  src={{ $region->mapa }} alt="" srcset="">
                    </div>
                </div>
                


                     
                <div class="row">
                    <div class="col offset-s3">
                        <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cached</i>Modificar</button>
                        <a href="/admin/regiones/show/{{ $region->id_region }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar</a>
                    </div>
                </div>

            </form>
                    
    </div>
        
@endsection