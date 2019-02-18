@extends('layouts.app')

@section('title', 'Estado')

@section('content')

    <div class="container">
        <h1>Alta de lenguaje</h1>
        <form  method="POST" action="/lenguajes">
            @csrf
            <div class="row">

                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Lengua..." id="lenguaje" name = "lenguaje" type="text" class="validate">
                      <label for="lenguaje">Nombre de la lengua:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="descripcion" class="materialize-textarea"></textarea>
                        <label for="descripcion">Descripcion de la lengua...</label>
                        
                    </div>
                </div>  
                 
                <div class="row">
                    <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
                </div>
                </form>
                
            </div>
        </form>
    </div>
@endsection