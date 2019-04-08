


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
            </div>
        </nav>
    </header>
   
    @isset($_SESSION['status'])
    <ul id="sidenav-1" class="sidenav sidenav-fixed blue-grey ">
        <li><a class="subheader">
            <img src="">    
        </a></li>
        <li>Datos del Sistema</li>
        <li><a href="/admin/estados/tasks" target="_blank">Estado</a></li>
        <li><a href="/admin/regiones/tasks" target="_blank">Regiones</a></li>
        <li><a href="/admin/municipios/tasks" target="_blank">Municipios</a></li>
        <li><a href="/admin/tradiciones/tasks" target="_blank">Tradiciones</a></li>
        <li><a href="/admin/sitios/tasks" target="_blank">Lugares de Interes</a></li>
        <li><a href="/admin/religiones/tasks" target="_blank">Religiones</a></li>
        <li><a href="/admin/lenguajes/tasks" target="_blank">Lenguajes</a></li>
        <li><a href="/admin/fauna/tasks" target="_blank">Fauna</a></li>
        <li><a href="/admin/flora/tasks" target="_blank">Flora</a></li>
        <li>Datos del Usuario</li>
        <li><a href="" target="_blank">Editar Perfil</a></li>
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
        <div class="container ">
                @yield('content') 
        </div>
    </main>


   

    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }} "></script>
  </body>
</html>
      