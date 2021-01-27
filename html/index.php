

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
     <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet" href="../css/btnAtajo.css">
 
      
   
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
     <!--<script src="bootstrap.bundle.min.js/ bootstrap.bundle.js"></script> -->
     
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
   <!--btn hacia arriba-->
   <script src="../JS/jquery.scrollUp.js"></script>
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script src="../JS/jquery-1.11.1.min.js"></script>
   <script>
      $(function(){
  $.scrollUp({
      scrollImg: true
  });
});
      </script>
    
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <title>La biblioteca del cosmos</title>
  </head>
  <body>
    



  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <a class="nav-link" href="Libros.php">Libros</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" >Iniciar Sesión</a>
            </li>
            
         
            </ul>
            
            
         <div class="dropdown">
      <a class="btn btn-warning dropdown-toggle" href="login.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if(!empty($sesion) ==null): ?>
        Invitado
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
            <a href="Bigbang.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/estrella.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">¿Qué es una estrella?</h3>
            <p> Las estrellas son cuerpos celestes gigantes, compuestos principalmente por hidrógeno y helio, que producen luz y calor desde sus arremolinadas fundiciones nucleares.</p>
            <p class="recio font-weight-bold"></p>
            <a href="Estrella.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/agujeros.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Los agujeros negros</h3>
            <p>Los agujeros negros son los restos fríos de antiguas estrellas, tan densas que ninguna partícula material, ni siquiera la luz, es capaz de escapar a su poderosa fuerza gravitatoria.</p>
            <p class="recio font-weight-bold"></p>
            <a href="AgujerosNegros.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
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
            <a href="A%C3%B1osLuz.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/neutrones.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Estrella de neutrones</h3>
            <p> Una estrella de neutrones nace en las últimas etapas de una estrella masiva como consecuencia de una explosión de supernova..</p>
            <p class="recio font-weight-bold"></p>
            <a href="EstrellaNeutrones.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-4">
          <img src="../imagenes/superid.jpg" class="img-fluid">
          <div class="info-producto bg-primary text-center text-light">
            <h3 class="text-center mb-2">Las Supernovas</h3>
            <p>Son estrellas que ponen fin a su evolución en una explosión cósmica masiva conocida como supernova</p>
            <p class="recio font-weight-bold"></p>
            <a href="SuperNovas.php" class="btn btn-outline-light mb-2 btn-lg text-uppercase font-weight-bold">Leer más</a>
          </div>
        </div>

      </div>

</div>
  
  
  <!--Fisicos-->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(../imagenes/cientificos.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span></span>
                        <h3 class="tf">Los científicos mas importantes de toda la historia.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="../imagenes/sir.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                           <a href="https://es.wikipedia.org/wiki/Isaac_Newton"><h5>Isaac Newton (1643 - 1727)</h5></a> 
                            <p>fue un físico, teólogo, inventor, alquimista y matemático inglés. Es autor de los Philosophiæ naturalis principia mathematica, más conocidos como los Principia, donde describe la ley de la gravitación universal y estableció las bases de la mecánica clásica mediante las leyes que llevan su nombre. Entre sus otros descubrimientos científicos destacan los trabajos sobre la naturaleza de la luz y la óptica , y en matemáticas, el desarrollo del cálculo infinitesimal.
                            </p>
                          
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="../imagenes/p01.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                           <a href="https://es.wikipedia.org/wiki/Albert_Einstein"> <h5>Albert Einstein (1879 – 1955)</h5></a>
                            <p>Es considerado el mayor científico del siglo pasado. No hay persona en la tierra que no sepa identificar a este físico judío alemán en fotografías. Fue premio Nobel de física en 1921. Su teoría de la relatividad es, probablemente, el mayor avance científico de los tiempos modernos, siendo por todos conocida su ecuación: E= mc^2.

Si bien su obra es considerada como el fundamento para la creación de la bomba atómica, este científico siempre abogó por la paz.</p>
                          
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="../imagenes/sc.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <a href="https://es.wikipedia.org/wiki/Erwin_Schr%C3%B6dinger"><h5> Erwin Schrödinger (1887 – 1961)</h5></a>
                            <p>Erwin Schrödinger es conocido por sus aportaciones y desarrollo de la física cuántica, mecánica cuántica y termodinámica. Recibió el premio Nobel de física en 1933.

La paradoja de Schrödinger es un ejercicio mental concebido por este mismo gran científico la cual permite comprender sus interpretaciones sobre la física cuántica.</p>
                           <!-- <h6><span></span> </h6>-->
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                        <div class="testimonial-thumb">
                            <img src="../imagenes/gg0.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <a href="https://es.wikipedia.org/wiki/Galileo_Galilei"><h5>Galileo Galilei (1564 – 1642)</h5></a>
                            <p>Galileo Galilei es el símbolo de la revolución científica, ocurrida entre los siglos XVI y XVII.

Como gran personaje de su época, tocó todos los campos de conocimiento que tuvo a mano, como la astronomía, las artes y a física. Es considerado por muchos el padre de la ciencia tal como la conocemos hoy en día.</p>
                            <h6><span></span></h6>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

  
<!--footer-->
   
   <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Mas informacion sobre la página</h1>

                    <p>El objetivo principal de esta página es brindar 
                    información acerca de distintos temas relacionados con 
                    la astronomía , libros de divulgación científica y datos historicos de algunos personasjes más 
                    importantes de la física.</p>

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img class="icono-footer" src="../icon/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img class="icono-footer" src="../icon/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <img class="icono-footer" src="../icon/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
                        <img class="icono-footer" src="../icon/google-plus.png">
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="row">
                        <img class="icono-footer" src="../icon/pinterest.png">
                        <label>Siguenos en Pinteres</label>
                    </div>


                </div>

                <div class="colum3">

                    <h1>Creadores</h1>
                              <div class="row2">
                        <img class="icono-footer" src="../imagenes/luna.png">
                         <label>Alvin Pech Dzul</label>
                    </div>
                    
                      <div class="row2">
                        <img class="icono-footer" src="../imagenes/satur.png">
                         <label>Rodrigo Plaza Villanueva</label>
                    </div>
                    
                      <div class="row2">
                        <img class="icono-footer" src="../imagenes/jupiter.png">
                         <label>Israel Reyes Carrillo</label>
                    </div>
                    
                      <div class="row2">
                        <img class="icono-footer" src="../imagenes/tierra.png">
                         <label>Alexis Rosaldo Pacheco</label>
                    </div>
                  

                    <div class="row2">
                        <img class="icono-footer" src="../icon/contact.png">
                         <label>BibliotecaDelCosmos@gmail.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2021 Todos los Derechos Reservados | <a href="">La Biblioteca del Cosmos</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion </a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>

   
   







   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


   
  </body>
</html>