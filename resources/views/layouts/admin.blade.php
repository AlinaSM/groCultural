


<!DOCTYPE html>
<html>
  <head>
    <title> Administracion del sitio GroCultural - @yield('title')</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/materialize.min.css') }}"> 
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!-- NAVBAR -->
    <header class=  @isset($_SESSION['status'])  {{'headerBar'}}  @endisset>
        <nav>
            <div class="nav-wrapper  blue-grey">
                <a href="/" class="brand-logo">GroCultural</a> 
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @isset($_SESSION['status']) 
                      <li><a href="/logout">Cerrar Sesion</a></li>
                    @endisset
                </ul>
            </div>

        </nav>
    </header>
   
    @isset($_SESSION['status'])
    <ul id="sidenav-1" class="sidenav sidenav-fixed blue-grey ">
        <li><a class="subheader">
            <img src="">    
        </a></li>
        <li>Datos del Sistema</li>
        <li><a href="/admin/estados/tasks" >Estado</a></li>
        <li><a href="/admin/regiones/tasks" >Regiones</a></li>
        <li><a href="/admin/municipios/tasks" >Municipios</a></li>
        <li><a href="/admin/tradiciones/tasks" >Tradiciones</a></li>
        <li><a href="/admin/sitios/tasks" >Sitios de Interes</a></li>
        <li><a href="/admin/religiones/tasks" >Religiones</a></li>
        <li><a href="/admin/lenguajes/tasks" >Lenguajes</a></li>
        <li><a href="/admin/fauna/tasks" >Fauna</a></li>
        <li><a href="/admin/flora/tasks" >Flora</a></li>
        <li>Datos del Usuario</li>
        <li><a href="" >Editar Perfil</a></li>
        <br><br>    
        <li>Sobre el Sistema</li>
        <li>
           <i>
            Desarrollado por: <br>
            Alina Salinas Mendoza 
            Fco. Gerardo Salinas Mendoza 
           </i>
        </li>
    </ul>       
    @endisset
    <!-- LEFT SIDEBAR	 -->
    
    
    
    <main class= @isset($_SESSION['status'])  {{'mainBar'}}  @endisset>
        @yield('content') 
    </main>


   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script> 

    
    <script src="{{ asset('js/main.js') }} "></script>
    <script src="{{ asset('js/materialize.js') }} "></script>
  </body>
</html>
      