@extends('layouts.admin')

@section('title', 'login')

@section('content')

<div class="container">
    <h1>Login</h1>
        <form  method="POST" action="/usuarios" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <label for="">Nombre de Usuario</label>
                    <input placeholder="Ingrese nombre de usuario..." name ="alias" type="text" class="validate">
                </div>
                <div class="input-field col s6 offset-s3">
                    <label for="">Contraseña</label>
                    <input placeholder="Ingrese su contraseña..." name ="contrasena" type="text" class="validate">
                </div>
            </div>

            <div class="row">
                <div class="col offset-s5">
                    <button type="submit" class="waves-effect yellow accent-4 black-text btn-large btn">Ingresar</button>
                </div>
            </div>

        </form>
                
</div>
    
  
@endsection