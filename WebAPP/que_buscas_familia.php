<?php
session_start();

if( isset($_GET['logout'])){
  $_SESSION["newsession"] = NULL;
  session_unset();
}

$savings = '';
$advice = '';
$whereTo = '';
$other = '';

if( isset($_GET['logout'])){
  $_SESSION["newsession"] = NULL;
  session_unset();
  set_unregistered();
}

function set_unregistered(){
  global $savings;
  global $advice;
  global $whereTo;
  global $other;

  $savings = "images/platica_familia.png";
  $advice = "images/consejo_familia.png";
  $whereTo = "images/vueltas_familia.png";
  $other = "images/otro_familia.png";
}

function set_registered(){
  global $savings;
  global $advice;
  global $whereTo;
  global $other;

  $savings = "images/platica_registrado.png";
  $advice = "images/consejo_registrado.png";
  $whereTo = "images/vueltas_registrado.png";
  $other = "images/otro_registrado.png";
}

if ($_SESSION["newsession"]){
  set_registered();
}

else {
  set_unregistered();
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Compadres financieros</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body>
<div class="navbar-fixed">
<nav class="cyan darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="inicio.php">Inicio</a></li>

        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas_familia.php">Familia de compas</a></li>
        <li><a href="que_buscas_negociante.php">Compadre negociante</a></li>

        <?php
        if ($_SESSION["newsession"]){
          echo "<li><a href=\"?logout\">Cerrar sesión</a></li>";
        }

        else {
        echo "<li><a href=\"login.php\">¿Ya eres integrante?</a></li>";
        }
        ?>

      </ul>

      <ul id="nav-mobile" class="side-nav" style="font-size: 40pt !important;">
        <li><a href="inicio.php">Inicio</a></li>

        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas_familia.php">Familia de compas</a></li>
        <li><a href="que_buscas_negociante.php">Compadre negociante</a></li>

        <?php
        if ($_SESSION["newsession"]){
          echo "<li><a href=\"?logout\">Cerrar sesión</a></li>";
        }

        else {
        echo "<li><a href=\"login.php\">¿Ya eres integrante?</a></li>";
        }
        ?>

      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="header center">¿Qué buscas compa?</h4>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
      <a class="black-text" href="que_buscas_2_familia.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="<?php echo $savings; ?>" alt="platica"/></h2>
          <h5 class="center">Platica</h5>

          <p class="light">Necesitas dinero para un proyecto propio.</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
      <a class="black-text" href="foro.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="<?php echo $advice; ?>" alt="platica"/></h2>
          <h5 class="center">Un compa que me aconseje</h5>

          <p class="light">Quiero un compa que me ayude o me enseñe como hacer las cosas</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
      <a class="black-text" href="map.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="<?php echo $whereTo; ?>" alt="donde vueltas"/></h2>
          <h5 class="center">Donde hacer las vueltas</h5>

          <p class="light">Quieres ubicar un servicio cerca</p>
        </div>
        </a>
      </div>
      <div class="col s12 m4">
      <a class="black-text" href="otras_vueltas.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="<?php echo $other; ?>" alt="otras vueltas"/></h2>
          <h5 class="center">Otras vueltas</h5>

          <p class="light">Seguros y financiación de proyectos alternativos</p>
        </div>
        </a>
      </div>
    </div>
  </div>

  

  

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>