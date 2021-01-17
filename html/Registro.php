


<?php
include '../DataBasePhp/conexionDB.php';
$mensaje = '';


if( !empty($_POST['correo']) && !empty($_POST['contrasenia']) && !empty($_POST['nombreu']) ){
    $correo = $_POST['correo'];
    $cotrasenia = $_POST['contrasenia'];
    $nombre = $_POST['nombreu'];
    
    $insertar = "INSERT INTO usuarios(correo, contrasenia,nombre) VALUES ('$correo','$cotrasenia','$nombre')"; 
    //verificar usuario 
    $verificar_usuario  = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' "); 
    if(mysqli_num_rows($verificar_usuario) > 0 ){
      
        $mensaje = 'El usuario ya esta registrado';
        
          header("Location: Registro.php");
        exit;
    }


    $resultado = mysqli_query($conexion,$insertar); 
    if(!$resultado){
        $mensaje = 'No se ha podido realizar el registro';
    }else{
       $destino = $correo ; 
        $asunto = 'Tu registro se hizo exitosamente , bienvenido a la galeria del cosmos';
        $contenido = "Nombre: " . $nombre ."\nCorreo: ". $correo . "\nMensaje: " . $asunto ;
        @mail($destino,"lagaleriadelcosmos",$contenido); 
        $mensaje = 'Tu registro se hizo exitosamente :D'; 
        
        
        
     
    }
   mysqli_close($conexion);
}else{
    $mensaje = 'Por favor llene todos los campos..';
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
    <link href="../css/registroEstilos.css" rel="stylesheet">
    

    <title>Registrarse</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Registrate</h3>
                <p class="lead text-light">Tendras acceso a una variedad de libros de manera gratuita.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-center p-6">
                    <h1 class="font-weight-bold mb-3">Registrarse</h1>
                    <div class="form-group">
                      <a href="login.php"> <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="lead align-middle mr-2"></i>Iniciar Sesión.</button></a>
                        <a href="index.php"><button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="lead align-middle mr-2"></i> Regresar</button></a> 
                    </div>
                    <p class="text-muted mb-5">ingresa la siguiente información.</p>

                    <form action="Registro.php" method="POST" >
                        
                         <?php if(!empty($mensaje)): ?>
                        <p> <?= $mensaje ?></p>
                         <?php endif; ?>


                        <div class="form-group mb-6">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input name="correo" id="correoU" type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-6">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input name="contrasenia" id="contraseniaU" type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>

                        <div class="form-group mb-6">
                            <label class="font-weight-bold">Nombre<span class="text-danger">*</span></label>
                            <input name = "nombreu" id="NombreU" type="text" class="form-control" placeholder="Ingresa un Nombre">
                        </div>
                       
                        <button class="btn btn-primary width-100" type="submit">Enviar</button>
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