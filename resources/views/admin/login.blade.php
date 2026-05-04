@extends('layouts.admin')

@section('title', 'login')

@section('content')

<div class="container">
    <h1>Login</h1>
    
    @if(isset($error))
        <div class="card-panel red darken-1 white-text center-align">
            {{ $error }}
        </div>
    @endif

        <form autocomplete="off" method="POST" action="/admin" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-field col s6 offset-s3">
                    <label for="">Nombre de Usuario</label>
                    <input placeholder="Ingrese nombre de usuario..." name ="alias" type="text" class="validate" autocomplete="off">
                </div>
                <div class="input-field col s6 offset-s3">
                    <label for="">Contraseña</label>
                    <input placeholder="Ingrese su contraseña..." name ="contrasena" type="password" class="validate" autocomplete="new-password">
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