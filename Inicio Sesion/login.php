<?php
$email=$_POST["email"];
$password=$_POST["password"];
session_start();
$connection = mysqli_connect("localhost", "root", "", "usuarios");
$sentencia="select * from usuario where email='".$email."' and pass='".$password."'";
$resultado = mysqli_query($connection,$sentencia);
if(mysqli_num_rows($resultado)>0){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email']= $email;
   
    // Redirecciono al usuario a la página principal del sitio.
    //("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../dispositivos.php"); //voy a la pagina donde principal
 
  }else{
    $_SESSION['err']= "login";
    header("Location: ../index.php"); //vuelvo al arcgivo donde se encuentra el form de login
  }

  ?>
