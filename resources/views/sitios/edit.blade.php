@extends('layouts.admin')

@section('title', 'Creando Municipios')

@section('content')
    <div class="row">
        <div class="input-field col offset-s1 s9">
            <h2>Modificar el Sitio de Interes</h2>
        </div>
    </div>

    <form  method="POST" action="/sitios/{{ $sitio->id_interes_cult  }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            
        <div class="row">
            <div class="input-field col offset-s1 s9">
                <input  name = "nombre" value={{ $sitio->nombre }} type="text" class="validate" >
                <label for="nombre" class="active">Nombre:</label>
            </div>
        </div>

        <div class="row">
            <div class="col offset-s1 s3">Estado: {{ $estado->nombre }}</div>
            <div class="col s3">Region: {{ $region->nombre }} </div>
            <div class="col s3">Municipio: {{ $municipio->nombre }} </div>
        </div>

        <div class="row">
            <div class="input-field col offset-s1 s3">
                <select name="Estado" id="idEstado" ></select>
                <label>Estado:</label>
            </div>
    
            <div class="input-field col  s3">
                <select name="Region" id="selectRegionesByEstado" ></select>
                <label>Regiones:</label>
            </div>

            <div class="input-field col s3">
                <select name="Municipio" id="selectMunicipiosByRegiones" ></select>
                <label>Municipios:</label>
            </div>


        </div>

        <div class="row">
                <div class="col offset-s1 s3">Tipo de interes: {{ $tipo->nombre }}</div>
               
    
            </div>
        <div class="row">

            <div class="input-field offset-s1 col s3">
                <select name="tipo" id="idTipoSitio" ></select>
                <label>Tipo de Interes:</label>
            </div>

            <div class="input-field col s3">
                <label for="" class="active">Horario</label>
                <input  name ="horario" value={{ $sitio->horario }} type="text" class="validate"  >
            </div>

            <div class="input-field col s3">
                <label for="" class="active">Direccion</label>
                <input  name ="direccion" value={{ $sitio->direccion }} type="text" class="validate" >
            </div>

        </div>

        <div class="row">
            <div class="input-field col offset-s1 s9">
                <textarea name="descripcion_general" class="materialize-textarea"  > {{ $sitio->descripcion_general }} </textarea>
                <label for="descripcion_general" class="active">Descripcion</label>

            </div>
        </div>  
        
        <div class="row">
            <img src={{ $sitio->imagen }} alt="" srcset="">
        </div>
       <div class="row">
            <div class="file-field input-field col offset-s3 s5">
                <div class="btn">
                    <span>Imagen</span>
                        <input type="file" name="imagen" >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
       </div>
    
    
                
       <div class="row">
            <div class="col offset-s3">
                <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cached</i>Modificar</button>
                <a href="/admin/sitios/show/{{ $sitio->id_interes_cult }}" class=" red darken-4 waves-effect waves-light btn btn-large"  ><i class="material-icons">delete_forever</i>Eliminar</a>
            </div>
        </div>

        

    </form>
                    

@endsection