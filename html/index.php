

<?php


session_start(); 
error_reporting(0);
$sesion = $_SESSION['nombre_s'];

    
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
     <link rel="stylesheet" href="../css/botonStyle.css">
   
   
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
     <!--<script src="bootstrap.bundle.min.js/ bootstrap.bundle.js"></script> -->
     
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <title>La biblioteca del cosmos</title>
  </head>
  <body>
    



  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--contenedor del menú-->
       <div class="container">

        <a class="navbar-brand" href="#">
         
            <img src="../imagenes/lo.png" alt="" class="logotipo">
            <span>La biblioteca del cosmos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Libros</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" >Iniciar Sesión</a>
            </li>
            
            <!--  <li class="nav-item">
              <a class="nav-link " href="" ></a>
            </li>-->
            </ul>
            
            
         <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="login.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if(!empty($sesion) ==null): ?>
         Usuario Invitado
          <?php endif;?>
          
           <?php if(empty($sesion) ==null): ?>
           
           <?php   echo $sesion;  ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
          <?php endif;?>
      
        
        </a>

               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#"> <?php   echo $sesion;  ?></a></li>
            <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a></li>
              <li><a class="dropdown-item" href="Registro.php">Registrarse</a></li>
           </ul>
          </div> 
          
          
            <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
           
            <input type="checkbox" id="checkbox"  onclick="document.documentElement.classList.toggle('darkMode')" />
            <div class="slider round">
                  
                                   
                                   
                                   <div class="sun">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">
  <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z"/>
  <path d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.154l-.36 1.51a.25.25 0 0 1-.282.188l-1.532-.244a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.509a.25.25 0 0 0-.374-.154l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11z"/>
</svg>
                   
             
                                   </div>
                
                                    <div class="mon">
                            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
</svg>
            
                            
                    </div>         
           
               
            </div>
       
        </label>
       
    </div>

          
          
          <!--
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button type="button" class="btn btn-outline-light"  type="submit">Buscar</button>
          </form>
        </div>
            -->

      </nav>

   <!--carrusel -->
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
   <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
   <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
   <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
 </ol>
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="../imagenes/b1.jpg" class="d-block w-100" alt="..." >
     <div class="carousel-caption d-none d-md-block">
       <h5>¿Sabes qué comó se creo el universo?</h5>
       <p></p>
     </div>
   </div>
   <div class="carousel-item">
     <img src="../imagenes/b2.jpg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
       <h5></h5>
       <p></p>
     </div>
   </div>
   <div class="carousel-item">
     <img src="../imagenes/b3.jpg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
       <h5></h5>
       <p></p>
     </div>
   </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
<!--galeria de imagenes-->
<div class="titulo"><h2>Temas</h2></div>
<div class="container">

    <div class="row mt-4 justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/bigban.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">¿Qué es el Big bang?</h3>
            <p>En cosmología, se entiende por Big Bang​ al principio del universo, es decir, el punto inicial en el que se formó la materia, el espacio y el tiempo.</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/estrella.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">¿Qué es una estrella?</h3>
            <p> Las estrellas son cuerpos celestes gigantes, compuestos principalmente por hidrógeno y helio, que producen luz y calor desde sus arremolinadas fundiciones nucleares.</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/agujeros.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Los agujeros negros</h3>
            <p>Los agujeros negros son los restos fríos de antiguas estrellas, tan densas que ninguna partícula material, ni siquiera la luz, es capaz de escapar a su poderosa fuerza gravitatoria.</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

      </div>

      
    <div class="row mt-4 justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/luz.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">¿Qué son los años luz?</h3>
            <p>Un año luz es la distancia que la luz recorre en un año terrestre. Un año luz equivale aproximadamente a 9 billones de kilómetros.</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/neutrones.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Estrella de neutrones</h3>
            <p> Una estrella de neutrones nace en las últimas etapas de una estrella masiva como consecuencia de una explosión de supernova..</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/agujeros.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Las Supernovas</h3>
            <p>Son estrellas que ponen fin a su evolución en una explosión cósmica masiva conocida como supernova</p>
            <p class="recio font-weight-bold"></p>
            <a href="" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

      </div>

</div>

  

   
<section id="footer" class="bg-dark">
    <div class="container">
     <img src="../imagenes/lo.png" class="logo-brand" alt="logo0"><span>La biblioteca del cosmos</span>
     <ul id="baner" class="list-inline">
         <li class="list-inline-item footer-menu"><a href="index.html">Inicio</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Videos</a></li>
           <li class="list-inline-item footer-menu"><a href="login.html">Registrarse</a></li>
            <li class="list-inline-item footer-menu"><a href="https://www.youtube.com/watch?v=6EBNIgkrU74&list=PLU8oAlHdN5BmpIQGDSHo5e1r4ZYWQ8m4B"></a></li>
     </ul>
     <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
         <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
         <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
     </ul>
     <small>@todos los derechos reservados</small>
    </div>
    
</section>

   
   







   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>