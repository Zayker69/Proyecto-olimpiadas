<?php
 session_start();
 if ( !isset( $_SESSION['email'] ) ) {
    header("location: index.php");
  }else{ //cerramos el else al final de la pagina
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dispositivos</title>
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>DISPOSITIVOS PRECARGADOS</h1>
  </header>
      <img src="img/flecha-2.svg" alt="abrir/cerrar-menu" id='moveArrow' class="flecha" onclick="openMenu()" onmouseover="openMenu()">
      <div class="sideMenu" id="sideMenu" onmouseleave="closeMenu()">
        <div class="logo"><h1>TAP</h1></div>
        <div class="txtLogo"><h1>CALC</h1><img src="img/rayo-logo_WHITE.svg" alt=""></div>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="dispositivos.php">Dispositivos</a></li>
          <li><a href="calculadora.html">Calculadora</a></li>
          <li><a href="ayuda.html">Ayuda</a></li>
          <li><a href="cerrar.php">Cerrar Sesión</a></li>
        </ul>
      </div>
      <section class="center">
      <div class="grid-container">
        <div class="grid-item">Heladera Clase A<img src="img/rt38-removebg-preview.png" alt="" onclick="alert(msgHelaA)"></div>
        <div class="grid-item">Heladera clase B<img src="img/helaB-removebg-preview.png" alt="" onclick="alert(msgHelaB)"></div>
        <div class="grid-item">Calefon<img src="img/calefon-removebg-preview.png" alt="" onclick="alert(msgCalefon)"></div>
        <div class="grid-item">Aire Acondicionado<img src="img/aire-removebg-preview.png" alt="" onclick="alert(msgAire)"></div>
        <div class="grid-item">Cocina Electrica<img src="img/cocElec-removebg-preview.png" alt="" onclick="alert(msgCocina)"></div>
        <div class="grid-item">Lavarropas<img src="img/lavaRropas-removebg-preview.png" alt="" onclick="alert(msgLavarropas)"></div>
        <div class="grid-item">Lampara LED<img src="img/laLED-removebg-preview.png" alt="" onclick="alert(msgLED)"></div>
        <div class="grid-item">Lampara Incandescente<img src="img/incandescente-removebg-preview.png" alt="" onclick="alert(msgIncan)"></div>
        <div class="grid-item">Tubo de Mercurio<img src="img/TuboMer-removebg-preview.png" alt="" onclick="alert(msgMercurio)"></div>
        <div class="grid-item">Television<img src="img/tele-removebg-preview.png" alt="" onclick="alert(msgTele)"></div>
        <div class="grid-item">Microondas clase A<img src="img/microA-removebg-preview.png" alt="" onclick="alert(msgMicroA)"></div>
        <div class="grid-item">Microondas clase B<img src="img/microB-removebg-preview.png" alt="" onclick="alert(msgMicroB)"></div>
      </div>
    </section>
    
       <script>alert('Selecciona el dispositivo que desees');</script>
       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
       <script src="js/index.js"></script>
       <script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>
<?php 
}
 ?>