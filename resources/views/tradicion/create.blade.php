@extends('layouts.admin')

@section('title', 'Creando Tradiciones')

@section('content')

    <div class="container">
        <h1>Alta de Tradiciones</h1>
            <form  method="POST" action="/tradiciones" enctype="multipart/form-data">
                @csrf
                <div class="row">

                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input  name = "nombre" type="text" class="validate">
                      <label for="tradiciones">Nombre de la tradicion:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="descripcion" class="materialize-textarea"></textarea>
                        <label >Descripcion de la religiones...</label>
                        
                    </div>
                </div>  

                <div class="row">
                    <div class="input-field col s12">
                      <input  name = "fecha_festejo" type="text" class="validate">
                      <label >Fecha del festejo:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field offset-s3 col s5">
                        <select name="tipo" id="idTipoTradicion" required></select>
                        <label>Tipo de Tradicion:</label>
                    </div>
                </div>


                <div class="row">
                        <div class="file-field input-field col offset-s3 s5">
                            <div class="btn">
                                <span>Imagen</span>
                                    <input type="file" name="imagen" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                   </div>
                     
                <div class="row">
                    <div class="col offset-s4">
                        <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
                    </div>
                </div>
                </form>

            </form>
                    
    </div>
            
@endsection