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
<div class="navbar-fixed">
<nav class="cyan darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="inicio.php">Inicio</a></li>

        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas_familia.php">Familia de compas</a></li>
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
        <li><a href="inicio.php">Inicio</a></li>

        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas_familia.php">Familia de compas</a></li>
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
  </div>
  <h5 class="header center">¿Ya estas registrado?</h5>
  <div class="row center">
        <a href="login.php" id="download-button" class="btn-large waves-effect waves-light green-button">Si</a>
        <a href="#" onclick="$('#form').show();" id="download-button" class="btn-large waves-effect waves-light green-button">No</a>
      </div>
  <div id="form" style="display: none;">
  <div class="section no-pad-bot" id="index-banner" >
    <div class="container">
      <br><br>
      <h4 class="header center">!Compadrito!</h1>
      <h5 class="header center" style="margin-bottom: 20px">Te voy a molestar con unas pregunticas:</h5>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
        <label>Tu nombre:</label>
        <input type="text" value=""></input>
      </div>
      <div class="col s12 m4">
        <label>Tu apellido:</label>
        <input type="text" value=""></input>
      </div>
      <div class="col s12 m4">
        <label>Tu cédula:</label>
        <input type="text" value=""></input>
      </div>
      <div class="col s12 m4">
        <label>Tu teléfono:</label>
        <input type="text" value=""></input>
      </div>
      <div class="col s12 m4">
        <label>Tu email:</label>
        <input type="text" value=""></input>
      </div>
      <div class="col s12 m4">
        <label>Ingresa tu foto y preséntate ante la comunidad (las personas que incluyen foto son percibidas como más confiables y obtienen respuestas más rápido)
        </label>
      </div>

      <div class="col s12 m4">
        <img width="150px" height="150px" src="images/no_avatar.jpg"/>
        <input type="file"></input>
      </div>
    </div>
     <div class="row">
     <a href="inicio.php" onclick="Android.showToast('Usuario registrado');" class="btn-large waves-effect waves-light green-button btn-big-text">Siguente</a>
     </div>
  </div>
  

  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>