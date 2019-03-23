@extends('layouts.app')

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
                      <input placeholder="Lengua..." id="tradiciones" name = "religion" type="text" class="validate">
                      <label for="tradiciones">Nombre de la tradicion:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="descripcion" class="materialize-textarea"></textarea>
                        <label for="tradiciones">Descripcion de la religiones...</label>
                        
                    </div>
                </div>  

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="fecha..." id="religion" name = "fecha_festejo" type="date" class="validate">
                      <label for="tracicion">Fecha del festejo:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Lengua..." id="religion" name = "religion" type="text" class="validate">
                      <label for="religion">Tipo de tradicion:</label>
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