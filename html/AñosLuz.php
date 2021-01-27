
 
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
    <title>¿Qué son los años luz.?</title>
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
              <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Libros.html">Libros</a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php" >Iniciar Sesión</a>
            </li>
            
            </ul>
            
            
         <div class="dropdown">
      <a class="btn btn-warning dropdown-toggle" href="login.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi <bi-></bi->moon" viewBox="0 0 16 16">
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
           
            <h1>¿Qué es un año luz?.</h1>
             <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Enero</a> <span><i class="fa fa-calendar"></i>LaGaleriaDelCosmos</span> <a href="#"><i class="fa fa-tags"></i>2021</a> </div>
            <div class="single_page_content"> <img class="img-center" src="../imagenes/aniosluz.jpg" alt="">
         <p>Cuando miramos hacia el cielo vemos cientos o miles de estrellas como nuestro Sol. Pero si las vemos tan pequeñas y débiles es porque están muy lejos, a años luz de distancia. Pero, ¿qué es un año luz?
En astronomía estamos acostumbrados a utilizar medidas de distancia como el segundo-luz o el año-luz, pero mucha gente piensa que son unidades de tiempo. Sin embargo, un año-luz es la distancia que recorre la luz en un año. Por tanto, aunque hablemos de tiempo (en este caso, de años), en realidad estamos calculando distancia; la distancia que recorrerá la luz en ese tiempo.</p>
<h5 class="subt">¿A cuánto equivale un año-luz?</h5>
<p>La luz viaja en el vacío a 299.792.458 metros por segundo. Para hacerlo más sencillo, muchas veces decimos que la velocidad de la luz es de aproximadamente 300.000 km/s. Por tanto, si calculamos los segundos que hay en un año y los multiplicamos por la velocidad de la luz, sabremos a cuántos km equivale un año luz.
El resultado de esta cuenta es de unos 9,5 billones de kilómetros: 9.460.730 472.580 km. Esa es la distancia en km a la que equivale exactamente un año-luz.
Como puedes imaginar, esta unidad en ocasiones puede resultar demasiado grande, por lo que utilizamos otras fracciones de tiempo. Por ejemplo, el Sol está a unos 150 millones de kilómetros de la Tierra, o lo que es lo mismo, a unos 8 minutos-luz. La Luna, por su parte, está a unos 380.000 km o, lo que es lo mismo, 1,3 segundos-luz.</p>
<h5 class="subt">Un viaje en el tiempo</h5>
<p>Que la luz tarde un tiempo significativo en recorrer estas distancias tan grandes implica que las estrellas que estamos viendo constantemente imágenes del pasado.
En el caso del Sol, vemos su imagen con tan solo 8 minutos de desfase. Pero en el caso de las estrellas, estamos viendo cómo eran hace cientos o miles de años. De hecho, puede que estemos observando la luz de estrellas que ya hayan explotado. O que aún no veamos la luz de estrellas que ya se han formado.</p>
             
            </div>
          
            <div class="related_post">
              <h2>Algunos temas similares <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../imagenes/adn.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.clarin.com/cultura/5-teorias-sobre-el-origen-de-la-vida-como-surgio-y-evoluciono-el-ser-vivo-_0_e91XDRZ-.html">El principio de todo

                    5 teorías sobre el origen de la vida: ¿Cómo surgió y evolucionó el ser vivo?</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../imagenes/marte.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.muyinteresante.es/ciencia/articulo/la-nasa-confirma-que-hay-agua-liquida-en-marte-321443517094">La NASA confirma que hay agua líquida en Marte</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href=""> <img src="../imagenes/luna.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="https://www.bbc.com/mundo/noticias-54697135">la NASA confirma la existencia de agua en la superficie iluminada del satélite de la Tierra</a> </div>
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
                <div class="media wow fadeInDown"> <a href="" class="media-left"> <img alt="" src="../imagenes/sn.jpg"> </a>
                  <div class="media-body"> <a href="AñosLuz.php" class="catg_title">Las Supernovas
            Son estrellas que ponen fin a su evolución en una explosión cósmica masiva conocida como supernova...</a> </div>
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
            <a class="sideAdd" href="#"><img src="../imagenes/c0.jpg" alt=""></a> </div></div></div></div>


 
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