@extends('layouts.app')

@section('title', 'Creando Usuario')

@section('content')

<div class="container">
    <h1>Alta de Usuarios</h1>

    <form  method="POST" action="/usuarios" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Nombre de usuario..." id="username" name = "username" type="text" class="validate">
                <label for="username">Nombre de usuario: </label>
            </div>
            <div class="input-field col s6">
                <select name="tipo_usuario">
                    <option value="" disabled selected>Tipo de Usuario</option>
                    <option value="user">Normal (sin privilegios)</option>
                    <option value="admin">Administrador</option>
                </select>
                <label for="tipo_usuario">Tipo de usuario: </label>
            </div>

            
        </div>

        
        <div class="row">
            <div class="input-field col s6">
                <label for="contrasena">Contraseña: </label>
                <input placeholder="Contraseña..." name ="contrasena" type="password" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="nombre">Nombre:</label>
                <input placeholder="Nombre..." name ="nombre" type="text" class="validate">
            </div>
            
            <div class="input-field col s6">
                <label for="correo_electronico">Correo Electronico:</label>
                <input placeholder="nombre@dominio.com" name ="correo_electronico" type="email" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="apellido">Apellido:</label>
                <input placeholder="Apellido..." name ="apellido" type="text" class="validate">
            </div>
        </div>
        

        <div class="row">
            <div class="col offset-s5">
                <button type="submit" class="waves-effect blue darken-3 btn-large btn"><i class="material-icons right">cloud</i>Subir</button>
            </div>
        </div>
        

    </form>
                    
</div>
@endsection