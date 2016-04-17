<?php
session_start();

if( isset($_GET['logout'])){
  $_SESSION["newsession"] = NULL;
  session_unset();
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
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="que_buscas.html">Compa</a></li>
        <li><a href="que_buscas.html">Familia de compas</a></li>
        <li><a href="que_buscas_negociante.php">Compadre negociantes</a></li>

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
        <li><a href="index.php">Inicio</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="que_buscas.html">Compa</a></li>
        <li><a href="que_buscas.html">Familia de compas</a></li>
        <li><a href="que_buscas_negociante.php">Compadre negociantes</a></li>

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
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="header center orange-text">¿Quieres ahorrar o pedir prestado?</h4>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
        <a class="black-text" href="preguntas.php">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Ahorro</span>
            </div>

          </div>
        </a>

      </div>

      <div class="col s12 m4">
        <a class="black-text" href="registro.php">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Crédito de poco monto (televisión, educación, mercado)</span>
            </div>

          </div>
        </a>
      </div>

      <div class="col s12 m4">
        <a class="black-text" href="registro.php">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Pa'l carrito</span>
            </div>

          </div>
        </a>
      </div>
      <div class="col s12 m4">
        <a class="black-text" href="preguntas_casita.php">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Pa' la casita</span>
            </div>

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