


<?php


session_start(); 
error_reporting(0);
$sesion = $_SESSION['nombre_s'];


    
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
              <a class="nav-link" href="comentarios.php">Comentarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Libros.php">Libros</a>
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

  <!--carrusel-->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="../imagenes/libros4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../imagenes/libros8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/libros5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">siguiente</span>
  </a>
</div>
  
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
                            <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>Una obra clásica e imprescindible de nuestros días que ha sido traducida a más de treinta idiomas y cuenta con más de cinco millones de ejemplares vendidos.</p></br>
                            
                     <?php if(!$sesion=='' || !$sesion==null) { ?>
                      <a href="" download="../libros/tiempo.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/tiempo.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                       
                            <?php } ?>
                      <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?>  
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/historia.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>El universo en una cáscara de nuez.</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                              <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>En este libro, Hawking nos conduce hasta la frontera misma de la física teórica donde la verdad supera muchas veces a la ficción para explicarnos en términos sencillos.</p>
                            
                             <?php if(!$sesion=='' || !$sesion==null) { ?>
                           <a href="" download="../libros/Stephen Hawking - El Universo en una cascara de nuez.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                             
                      
                     <a href="javascript:popup('../libros/Stephen Hawking - El Universo en una cascara de nuez.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                               <?php } ?>
                               <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/nuez2.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Agujeros Negros y Pequeños Universos</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                            <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>Stephen Hawking ha revolucionado la forma en la que entendemos el universo y la física para plantear preguntas.¿Cómo y por qué existe la "mente de Dios"?.</p>
                              <?php if(!$sesion=='' || !$sesion==null) { ?> 
                         <a href="" download="../libros/Stephen Hawking - Agujeros Negros y Pequeños Universos.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Stephen Hawking - Agujeros Negros y Pequeños Universos.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                            <?php } ?>
                         <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/agujerosnegros.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>El gran Diseño</h5>
                         <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Stephen W. Hawking</a></span>
                               <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>El libro examina la historia de los conocimientos científicos sobre el universo y explica la teoría M de 11 dimensiones, una teoría que apoyan muchos físicos modernos.</p>
                      
                          <?php if(!$sesion=='' || !$sesion==null) { ?>
                       <a href="" download="../libros/El Gran Diseno - Stephen Hawking.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/El Gran Diseno - Stephen Hawking.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                          <?php } ?>
                      
                        <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/dise%C3%B1o.jpg);"></div>
                    </div>
                </div>
                
                
                   <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>La conexión cosmica</h5>
                            <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                             <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>En el libro se discuten varios temas; sin embargo, se centra en la posibilidad de la existencia de inteligencias extraterrestres y  civilizaciones más avanzadas.</p></br>
                      
                          <?php if(!$sesion=='' || !$sesion==null) { ?>
                      <a href="" download="../libros/Carl Sagan - La conexion cosmica.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - La conexion cosmica.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                              <?php } ?>
                              
                                <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/conexion.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>El mundo y sus demonios.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                              <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico.</p>
                            
                                    <?php if(!$sesion=='' || !$sesion==null) { ?>
                           <a href="" download="../libros/Carl Sagan - El mundo y sus demonios.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El mundo y sus demonios.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                                 
                            <?php } ?>
                               <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/mundo.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>El cerebro de broca</h5>
                     <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                             <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>El hombre se ha planteado siempre profundos interrogantes sobre los orígenes de la conciencia, la vida sobre nuestro planeta, los primeros tiempos de la Tierra.</p>
                              <?php if(!$sesion=='' || !$sesion==null) { ?> 
                         <a href="" download="../libros/Carl Sagan - El Cerebro de Broca.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Carl Sagan - El Cerebro de Broca.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                           <?php } ?>
                             <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/cerebro.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Un punto azul pálido.</h5>
                           <span><a href="https://es.wikipedia.org/wiki/Carl_Sagan">Carl Sagan</a></span>
                               <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>Carl Sagan prosigue el espectacular viaje científico que inició en Cosmos, el libro que hizo descender a la Tierra la magnificencia del universo.</p>
                      
                         <?php if(!$sesion=='' || !$sesion==null) { ?> 
                       <a href="" download="../libros/El Gran Diseno - Stephen Hawking.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/El Gran Diseno - Stephen Hawking.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                          <?php } ?>
                       <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/punto.jpg);"></div>
                    </div>
                </div>
                
                
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Sobre la Teoria de la Relatividad.</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Albert Einstein</a></span>
                              <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>Einstein transformó nuestra comprensión del tiempo, el espacio y la gravedad. La teoría de la relatividad constituye uno de los avances científicos más importantes.</p></br>
                             
                     <?php if(!$sesion=='' || !$sesion==null) { ?>
                      <a href="" download="../libros/Albert Einstein - Sobre la Teoria de la Relatividad.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Albert Einstein - Sobre la Teoria de la Relatividad.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                       
                            <?php } ?>
                      <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?>  
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/slr.jpg);"></div>
                    </div>
                </div>
                
          
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>Los tres primeros minutos del universo.</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Steven Weinberg</a></span>
                            <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>obra maestra de divulgación científica, traducida a más de veinte idiomas, cuenta cómo en un incierto momento, hace diez mil millones de años, se produjo una gigantesca explosión.</p>
                            
                             <?php if(!$sesion=='' || !$sesion==null) { ?>
                           <a href="" download="../libros/Los tres primeros minutos del universo - Steven Weinberg.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                             
                      
                     <a href="javascript:popup('../libros/Los tres primeros minutos del universo - Steven Weinberg.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                               <?php } ?>
                               <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/l3m.jpg);"></div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5> El espejismo de Dios_</h5>
                            <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Richard Dawkins</a></span>
                              <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p> Dawkins disecciona en este libro la irracionalidad de la creencia en Dios y el daño que la religión, ha causado en la sociedad a través de los siglos.</p>
                              <?php if(!$sesion=='' || !$sesion==null) { ?> 
                         <a href="" download="../libros/Richard Dawkins - El espejismo de Dios_.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Richard Dawkins - El espejismo de Dios_.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                            <?php } ?>
                         <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/eedd.jpg);"></div>
                    </div>
                </div>
                
            
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Lo grande, lo pequeno y la mente humana.</h5>
                         <span href =""><a href="https://es.wikipedia.org/wiki/Stephen_Hawking">Roger Penrose.</a></span>
                              <img src="../imagenes/ic.png" alt="">
                           <p></p>
                            <p>La presente obra constituye una introducción accesible, esclarecedora y estimulante a la visión de Roger Penrose sobre la futura física teórica del siglo XXI.</p>
                      
                          <?php if(!$sesion=='' || !$sesion==null) { ?>
                       <a href="" download="../libros/Roger Penrose - Lo grande, lo pequeno y la mente humana.pdf" > <button type="button" class="btn btn-primary">Descargar</button></a>
                      
                     <a href="javascript:popup('../libros/Roger Penrose - Lo grande, lo pequeno y la mente humana.pdf',1200,700)">  <button type="button" class="btn btn-success">Ver</button></a>
                          <?php } ?>
                      
                        <?php if($sesion=='' || $sesion==null) { ?>
                            
                             <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="¿Comó obtener el libro?" data-content="Para ver o obtener los libros es necesario registrarse o iniciar sesión.">Obtener libro</button>
                            
                            <?php } ?> 
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(../imagenes/llb.jpg);"></div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <!-- fin de la sección de libros -->
  
  
  
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

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

      <script>
            var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-toggle="popover"]' ) );
            var popoverList = popoverTriggerList.map( function( popoverTrigger )
            {
                return new bootstrap.Popover( popoverTrigger );
            } );
        </script>
    
</body>
</html>