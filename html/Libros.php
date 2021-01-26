


<?php


session_start(); 
error_reporting(0);


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
    <link rel="stylesheet" href="../css/librosCss.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
     <link rel="stylesheet" href="../css/botonStyle.css">
   
   
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="../css/style.css">
   
   
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
    <!--función para abrir los libros -->
        <script>
            function popup(url, ancho, alto) {
                var posicion_x;
                var posicion_y;
                posicion_x = (screen.width / 2) - (ancho / 2);
                posicion_y = (screen.height / 2) - (alto / 2);
                window.open(url, "documento", "width=" + ancho + ",height=" + alto + ",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left=" + posicion_x + ",top=" + posicion_y + "");
            }
        </script>
    
    

   <!-- <button><a href="" download="../libros/tiempo.pdf" >Descargar</a></button>
    <button><a href="javascript:popup('../libros/tiempo.pdf',1200,700)">Ver</a></button>-->
  
  
   
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
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Libros.html">Libros</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" >Iniciar Sesión</a>
            </li>
            
            <!--  <li class="nav-item">
              <a class="nav-link " href="" ></a>
            </li>-->
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

          
          
          <!--
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button type="button" class="btn btn-outline-light"  type="submit">Buscar</button>
          </form>
        </div>
            -->

      </nav>

  
  
  <!--contenido de los libros-->
  
  
  
  
   <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Tus autores favoritos</span>
                        <h3 class="tl">Los libros más populares</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
     
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Historia del tiempo</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Una obra clásica e imprescindible de nuestros días que ha sido traducida a más de treinta idiomas y cuenta con más de cinco millones de ejemplares vendidos.</p></br>
                             <!-- <button><a href="" download="../libros/tiempo.pdf" >Descargar</a></button>
    <button><a href="javascript:popup('../libros/tiempo.pdf',1200,700)">Ver</a></button>-->
                      <a href="" download="../libros/tiempo.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/tiempo.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                       
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/historia.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>El universo en una cáscara de nuez.</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>En este libro, Hawking nos conduce hasta la frontera misma de la física teórica -donde la verdad supera muchas veces a la ficción— para explicarnos en términos verdaderamente sencillos.</p>
                            
                            
                           <a href="" download="../libros/Stephen Hawking - El Universo en una cascara de nuez.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Stephen Hawking - El Universo en una cascara de nuez.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                            
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/nuez2.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Agujeros Negros y Pequeños Universos</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Stephen Hawking ha revolucionado la forma en la que entendemos el universo, la física y la realidad para plantear preguntas clave de la humanidad.¿Cómo y por qué existe la "mente de Dios"?.</p>
                            
                         <a href="" download="../libros/Stephen Hawking - Agujeros Negros y Pequeños Universos.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Stephen Hawking - Agujeros Negros y Pequeños Universos.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                        
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/agujerosnegros.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>El gran Diseño</h5>
                         <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>El libro examina la historia de los conocimientos científicos sobre el universo y explica la teoría M de 11 dimensiones, una teoría que apoyan muchos físicos modernos.</p>
                      
                      
                       <a href="" download="../libros/El Gran Diseno - Stephen Hawking.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/El Gran Diseno - Stephen Hawking.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                      
                      
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/dise%C3%B1o.jpg);"></div>
                    </div>
                </div>
                
                
                   <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>La conexión cosmica</h5>
                            <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>En el libro se discuten varios temas; sin embargo, se centra en la posibilidad de la existencia de inteligencias extraterrestres, así como en la probabilidad de existencia de civilizaciones más avanzadas.</p>
                             <!-- <button><a href="" download="../libros/tiempo.pdf" >Descargar</a></button>
    <button><a href="javascript:popup('../libros/tiempo.pdf',1200,700)">Ver</a></button>-->
                      <a href="" download="../libros/Carl Sagan - La conexion cosmica.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - La conexion cosmica.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                       
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/conexion.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>El mundo y sus demonios.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico.</p>
                            
                            
                           <a href="" download="../libros/Carl Sagan - El mundo y sus demonios.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El mundo y sus demonios.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                            
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/mundo.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>El cerebro de broca</h5>
                     <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>El hombre se ha planteado siempre profundos interrogantes sobre los orígenes de la conciencia, la vida sobre nuestro planeta, los primeros tiempos de la Tierra.</p>
                            
                         <a href="" download="../libros/Carl Sagan - El Cerebro de Broca.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El Cerebro de Broca.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                        
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/cerebro.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Un punto azul pálido.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Carl Sagan prosigue el espectacular viaje científico que inició en Cosmos, el libro que hizo descender a la Tierra la magnificencia del universo, haciéndola accesible a millones de personas.</p>
                      
                      
                       <a href="" download="../libros/El Gran Diseno - Stephen Hawking.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/El Gran Diseno - Stephen Hawking.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                      
                      
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/punto.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- segunda parte de libros -->
  
  
  
   <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
         
            <div class="row">
               
     
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>La conexión cosmica</h5>
                            <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>En el libro se discuten varios temas; sin embargo, se centra en la posibilidad de la existencia de inteligencias extraterrestres, así como en la probabilidad de existencia de civilizaciones más avanzadas.</p>
                             <!-- <button><a href="" download="../libros/tiempo.pdf" >Descargar</a></button>
    <button><a href="javascript:popup('../libros/tiempo.pdf',1200,700)">Ver</a></button>-->
                      <a href="" download="../libros/Carl Sagan - La conexion cosmica.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - La conexion cosmica.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                       
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/conexion.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>El mundo y sus demonios.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico.</p>
                            
                            
                           <a href="" download="../libros/Carl Sagan - El mundo y sus demonios.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El mundo y sus demonios.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                            
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/mundo.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>El cerebro de broca</h5>
                     <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>El hombre se ha planteado siempre profundos interrogantes sobre los orígenes de la conciencia, la vida sobre nuestro planeta, los primeros tiempos de la Tierra.</p>
                            
                         <a href="" download="../libros/Carl Sagan - El Cerebro de Broca.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El Cerebro de Broca.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                        
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/cerebro.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Un punto azul pálido.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Carl Sagan prosigue el espectacular viaje científico que inició en Cosmos, el libro que hizo descender a la Tierra la magnificencia del universo, haciéndola accesible a millones de personas.</p>
                      
                      
                       <a href="" download="../libros/El Gran Diseno - Stephen Hawking.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/El Gran Diseno - Stephen Hawking.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                      
                      
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/punto.jpg);"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
  
  
    
</body>
</html>