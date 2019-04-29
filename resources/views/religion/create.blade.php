@extends('layouts.admin')

@section('title', 'Creando Religiones')

@section('content')

    <div class="container">
        <h1>Alta de Religiones</h1>
            <form  method="POST" action="/religiones" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Religion..." id="religion" name = "nombre" type="text" class="validate">
                      <label for="religion">Nombre de la religion:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="descripcion" class="materialize-textarea"></textarea>
                        <label for="descripcion">Descripcion de la religion...</label>
                        
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