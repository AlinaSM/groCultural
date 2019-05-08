@extends('layouts.admin')

@section('title', 'Creando Municipios')

@section('content')
    <div class="row">
        <div class="input-field col offset-s1 s9">
            <h2>Modificar el Municipio</h2>
        </div>
    </div>

    <form  method="POST" action="/municipios/{{ $municipio->id_municipio  }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            
        <div class="row">
                <div class="input-field col offset-s1 s9">
                    <input placeholder="Municipio..." value={{$municipio->nombre}} name = "nombre" type="text" class="validate">
                    <label for="religion" class="active">Nombre del municipio:</label>
                </div>
            </div>
    
            <div class="row">
                <div class="input-field col offset-s1 s4">
                    <select name="Estado" id="idEstado"></select>
                    <label>Estado:</label>
                </div>
        
                <div class="input-field col offset-s1 s4">
                    <select name="Region" id="selectRegionesByEstado"></select>
                    <label>Regiones:</label>
                </div>
            </div>
            
            
            <div class="row">
                <div class="input-field col offset-s1 s4">
                    <label for="" class="active">Clima del municipio</label>
                    <input placeholder="Clima..." value={{ $municipio->clima }} name ="clima" type="text" class="validate">
                </div>
    
                <div class="input-field col offset-s1 s4">
                    <label for="" class="active">Numero de habitantes:</label>
                    <input placeholder="Numero de habitantes..." value={{ $municipio->numero_habitantes }} name ="numero_habitantes" type="number" class="validate">
                </div>
    
            </div>
    
            <div class="row">
                <div class="input-field col offset-s1 s9">
                    <textarea name="historia_general" class="materialize-textarea">{{ $municipio->historia_general }}</textarea>
                    <label for="historia_general" class="active">Historia general...</label>
                    
                </div>
            </div>  
            
            <div class="row">
                
                <div class="input-field col offset-s1 s5">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagen de Escudo</span>
                            <input type="file" name="escudo">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="input-field col s5 ">
                    <img style="width: 5rem;"  src="{{ $municipio->escudo }}" alt="" srcset="">
                </div>
            </div>
                

            <div class="row ">
                
                <div class="input-field col offset-s1 s5">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagen del Mapa</span>
                            <input type="file" name="mapa">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                    <div class="input-field col s5">
                    <img style="width: 5rem;"  src="{{ $municipio->mapa }}" alt="" srcset="">
                </div>
            </div>



                
       <div class="row">
            <div class="col offset-s3">
                <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cached</i>Modificar</button>
                <a href="/admin/municipios/show/{{ $municipio->id_municipio }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar</a>
            </div>
        </div>

        

    </form>
                    

@endsection