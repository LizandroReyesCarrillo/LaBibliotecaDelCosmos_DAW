

<?php

   session_start();
    $mensaje = '';
   include '../DataBasePhp/conexionDB.php';

    if(  !empty($_POST['correo'])  && !empty($_POST['contrasenia']) ){
        
    
        
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        
        $sql = "SELECT id,correo,contrasenia,nombre FROM usuarios WHERE correo = '$correo' ";
        $resultado = $conexion->query($sql);
        $numero = $resultado->num_rows; 
        
        if($numero > 0){
         
            //validar contrasenia
            
            $row = $resultado->fetch_assoc(); 
            $contra_bd = $row['contrasenia'];
            
          
            //echo  $contra_bd;
            
            if( $contra_bd ==  $contrasenia ){
                
                //iniciando sesion
                $_SESSION['nombre_s'] = $row['nombre']; 
                
                header("Location: index.php");
                
                
                //$mensaje = 'ingresandooo';
            }else{
                $mensaje = 'Contraseña invalida';
            }
            
            
        }else{
         $mensaje = 'Usuario invalido';
        }
        
        
    }


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="../css/loginEstilos.css" rel="stylesheet">
    

    <title>Iniciar Sesión</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Registrate.</h3>
                <p class="lead text-light">Tendras acceso a una variedad de libros de manera gratuita.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-center p-6">
                    <h1 class="font-weight-bold mb-3">Iniciar Sesión</h1>
                    <div class="form-group">
                       
                       
                        <a href="Registro.php"><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="lead align-middle mr-2"></i> Registrarse </button></a>
                        
                        
                        <a href="index.php"><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="lead align-middle mr-2"></i> Regresar</button></a> 
                    </div>
                    <p class="text-muted mb-5">ingresa la siguiente información.</p>

                    <form action="login.php" method="POST"  >
                        
                        <div class="form-group mb-6">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input  name="correo"  id="correoU" type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-6">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input name="contrasenia" id="contraseniaU" type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                         
                          <?php if(!empty($mensaje)): ?>
                        <p> <?= $mensaje ?></p>
                         <?php endif; ?>
                         
                         
                       
                        <button class="btn btn-primary width-100" type="submit">iniciar sesión.</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2020 la biblioteca del cosmos</small>
                </div>
           </div>
       </div>
   </section>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../JS/validar.js"></script>
</body>
</html>