<!DOCTYPE html>
<html>
  <head>
    <title> GroCultural - @yield('title')</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
      
    <nav>
        <div class="nav-wrapper   light-green darken-3">
            <a href="/" class="brand-logo">GroCultural</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="/estado">Estado</a></li>
            <li><a href="/regiones">Regiones</a></li>
            <li><a href="/municipios">Municipios</a></li>
            <li><a href="/tradiciones">Tradiciones</a></li>
            <li><a href="/sitios">Sitios de Interes</a></li>
            <li><a href="/lenguajes">Lenguajes</a></li>
            <li><a href="/religiones">Religiones</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Content goes here -->
    @yield('content') 

 
    <footer class="page-footer  light-green darken-3">
        <div class="container ">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Guerrero Cultural</h5>
                    <p class="grey-text text-lighten-4">Sistema de informacion desarrollado por:</p>
                    <p class="grey-text text-lighten-4">Alina Salinas Mendoza</p>
                    <p class="grey-text text-lighten-4">Francisco Gdo. Salinas Mendoza</p>
                </div>
            
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright 
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/main.js') }} "></script>
  </body>
</html>
      