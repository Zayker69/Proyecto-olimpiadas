<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="css/inicioSesion.css">
    <link rel="icon" href="../img/logo.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="inicio Sesion/login.php" method="POST" id="form">
        <div class="form">
            <h1 style="color: #fff;">INICIO SESION</h1>
            <div class="grupo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" ><span class="barra"></span>
                <label for="">Password</label>
            </div>
            
            <button type="submit">INICIAR SESION</button>
            <a href="Inicio Sesion/registrar.html">¿No tienes cuenta? CREA UNA</a>

            <p class="warnings" id="warnings"></p>
        </div>
        <?php
 session_start();
 if ( !isset( $_SESSION['err'] ) ) {

   
  }else{
    echo '<h3 style="color: white; background-color: purple;">Usuario y/o contraseña incorrecta</h3>';
  }
?>
        
    </form>

    <script type="module" src="login.js"></script>
</body>
</html>
