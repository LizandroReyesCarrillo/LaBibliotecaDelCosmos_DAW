<?php


session_start(); 
error_reporting(0);
$sesion = $_SESSION['nombre_s'];

    
?>
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
     <link rel="stylesheet" href="../icon/style.css">
     <link rel="stylesheet" href="../icon/theme.css">
   
   
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
     <!--<script src="bootstrap.bundle.min.js/ bootstrap.bundle.js"></script> -->
     
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
   <!--zoom-->
 
    <title> Los Agujeros Negros</title>
  
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
<div>
<div class="content">
     <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
           
            <h1>Los agujeros negros.</h1>
             <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Enero</a> <span><i class="fa fa-calendar"></i>LaGaleriaDelCosmos</span> <a href="#"><i class="fa fa-tags"></i>2021</a> </div>
            <div class="single_page_content"> <img class="img-center" src="../imagenes/agn.png" alt="">
        <p>Los agujeros negros son los restos fríos de antiguas estrellas, tan densas que ninguna partícula material, ni siquiera la luz, es capaz de escapar a su poderosa fuerza gravitatoria.</p>
<p>Mientras muchas estrellas acaban convertidas en enanas blancas o estrellas de neutrones, los agujeros negros representan la última fase en la evolución de enormes estrellas que fueron al menos de 10 a 15 veces más grandes que nuestro sol.
Cuando las estrellas gigantes alcanzan el estadio final de sus vidas estallan en cataclismos conocidos como supernovas. Tal explosión dispersa la mayor parte de la estrella al vacío espacial pero quedan una gran cantidad de restos «fríos» en los que no se produce la fusión.
En estrellas jóvenes, la fusión nuclear crea energía y una presión exterior constante que se encuentra en equilibrio con la fuerza de gravedad interior que produce la propia masa de la estrella. Sin embargo, en los restos inertes de una supernova no hay una fuerza que se resista a la gravedad, por lo que la estrella empieza a replegarse sobre sí misma.</p>
<p>Sin una fuerza que frene la gravedad, el emergente agujero negro encoje hasta un volumen cero, en cuyo punto pasa a ser infinitamente denso. Incluso la luz de dicha estrella es incapaz de escapar a su inmensa fuerza gravitatoria, que se ve atrapada en órbita, por lo que la oscura estrella se conoce con el nombre de agujero negro.
Los agujeros negros atraen la materia, e incluso la energía, hacia sí, pero no en mayor medida que otras estrellas u objetos cósmicos de masa similar. Esto significa que un agujero negro con la misma masa que la de nuestro sol, no «aspiraría» más objetos hacia sí que nuestro sol con su propia fuerza gravitatoria.</p>
<p>Los planetas, la luz y otra materia deben pasar cerca de un agujero negro para ser atraídos dentro de su radio de acción. Cuando alcanzan un punto sin retorno, se dice que han entrado en el horizonte de sucesos, un punto del que es imposible escapar porque requiere moverse a una velocidad superior a la de la luz.
Pequeños pero poderosos
Los agujeros negros tienen un tamaño pequeño. Un agujero de una masa solar de un millón, como el que se sospecha que se encuentra en el centro de algunas galaxias, tendría un radio de unos tres millones de kilómetros, es decir, sólo unas cuatro veces el tamaño de nuestro sol. Un agujero negro con una masa igual a la del sol tendría un radio de tres kilómetros.</p>
<p>Dado que son tan pequeños, distantes y oscuros, los agujeros negros no pueden ser observados de manera directa. A pesar de esto, los científicos han confirmado las sospechas largo tiempo mantenidas de su existencia. Esto se realiza normalmente midiendo la masa de una región del espacio y buscando zonas con una gran masa oscura.</p>
<p>Existen muchos agujeros negros en el seno de los sistemas binarios. Estos agujeros atraen continuamente masa de su estrella vecina, aumentando el agujero negro y encogiendo la otra estrella, hasta que el agujero negro se hace grande y la estrella compañera se desvanece por completo.
Pueden existir agujeros negros supermasivos en el centro de algunas galaxias, incluida nuestra Vía Láctea. Estos cuerpos inmensos pueden tener una masa de 10 a 100 mil millones de soles. Son parecidos a los agujeros negros más pequeños pero alcanzan tales dimensiones al haber mucha materia en el interior de la galaxia que pueden atraer. Los agujeros negros pueden acumular cantidades de materia ilimitadas; simplemente se convierten en cuerpos aún más densos a medida que aumenta su masa.
Los agujeros negros han capturado la imaginación del público y jugado un papel destacado en conceptos extremadamente teóricos como el de los agujeros de gusano. Estos «túneles» permitirían realizar viajes rápidos en el espacio y en el tiempo, pero no hay pruebas reales de su existencia.</p>

             
            </div>
          
            <div class="related_post">
              <h2>Algunos temas similares <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href=""> <img src="../imagenes/adn.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.clarin.com/cultura/5-teorias-sobre-el-origen-de-la-vida-como-surgio-y-evoluciono-el-ser-vivo-_0_e91XDRZ-.html">El principio de todo

                    5 teorías sobre el origen de la vida: ¿Cómo surgió y evolucionó el ser vivo?</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href=""> <img src="../imagenes/marte.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.muyinteresante.es/ciencia/articulo/la-nasa-confirma-que-hay-agua-liquida-en-marte-321443517094">La NASA confirma que hay agua líquida en Marte</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href=""> <img src="../imagenes/luna.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.bbc.com/mundo/noticias-54697135">La NASA confirma la existencia de agua en la superficie iluminada del satélite de la Tierra</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
   
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span class="amarillo">Temas relacionados.</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="Bigbang.php" class="media-left"> <img alt="" src="../imagenes/bigban.jpg"> </a>
                  <div class="media-body"> <a href="Bigbang.php" class="catg_title">¿Qué es el Big bang? En cosmología, se entiende por Big Bang​ al principio del universo, es decir, el punto...</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../imagenes/estrella.jpg"> </a>
                  <div class="media-body"> <a href="Estrella.php" class="catg_title">¿Qué es una estrella?
            Las estrellas son cuerpos celestes gigantes, compuestos principalmente por hidrógeno y helio...</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../imagenes/luz.jpg"> </a>
                  <div class="media-body"> <a href="AñosLuz.php" class="catg_title"> ¿Qué son los años luz? Un año luz es la distancia que la luz recorre en un año terrestre. Un año luz....</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="EstrellaNeutrones.php" class="media-left"> <img alt="" src="../imagenes/neutrones.jpg"> </a>
                  <div class="media-body"> <a href="EstrellaNeutrones.php" class="catg_title">Estrella de neutrones
             Una estrella de neutrones nace en las últimas etapas de una estrella...</a> </div>
                </div>
              </li>
            </ul>
          </div>
       
          <div class="single_sidebar wow fadeInDown">
            <h2><span class="amarillo">Datos para recordar.</span></h2>
            <a class="sideAdd" href="#"><img src="../imagenes/c5.jpg" alt=""></a>
            	 </div></div></div></div>

<!--footer-->
 
   <!--footer-->
   <div class="ftc">
   <footer class="container-ft">
       
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

</div>


   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   

   
  </body>
</html>