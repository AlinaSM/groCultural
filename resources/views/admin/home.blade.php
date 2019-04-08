@extends('layouts.admin')

@section('title', 'login')

@section('sidebar-tasks')
    <ul id="nav-mobile" class="sidenav sidenav-fixed">
    </ul>
@endsection


@section('content')

<div class="container ">
        
    <h1>Home</h1>
    <h5>Bienvenid@ {{   $_SESSION['user'] }}   al sistema de informacion sobre el estado de Guerreo </h5>  
                
</div>
    
  
@endsection