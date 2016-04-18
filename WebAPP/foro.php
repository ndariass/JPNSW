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

<style>
.lista {
  margin: 20px;
}

.lista ul {
  list-style-type: none;
}

.lista h3 {
  font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
}

.lista li img {
  float: left;
  margin: 0 15px 0 0;
}

.lista li p {
  font: 200 12px/1.5 Georgia, Times New Roman, serif;
}

.lista li {
  padding: 10px;
  overflow: auto;
}

.lista li:hover {
  background: #eee;
  cursor: pointer;
}
</style>
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

      <ul id="nav-mobile" class="side-nav">
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
      <h4 class="header center">¿Cómo deseas comenzar?</h4>
    </div>
  </div>
  <div class="container">


    <div class="row">
      <div class="col s12 m6">
       <a href="#"  style="text-align: center !important; width: 350px;" onclick="$('#pregunta').show();$('#preguntas').hide();$('#pregunta_enviada').hide();$('#pregunta_existente').hide();" class="btn green-button">¿Cuál es tu pregunta?</a>

     </div>
     </div>
       <div class="row">
      <div class="col s12 m6">
     <a href="#" style="text-align: center !important; width: 350px; opacity: 0.6;" onclick="$('#preguntas').show();$('#pregunta').hide();$('#pregunta_enviada').hide();" class="btn green-button">Revisa preguntas de otros compadres</a>
   </div>
   </div>

</div>


<div id="pregunta" class="row" style="display: none;">
  <div class="col s12 m4">
    <textarea placeholder="!Cuentanos tu inquietud compadre!"></textarea>
    <a href="#" onclick="$('#pregunta').hide();$('#pregunta_existente').show();$('#preguntas').show();" class="btn green-button">Siguente</a>
  </div>
</div>

<div id="pregunta_enviada" class="row" style="display: none;">
  <div class="col s12 m4">
      <h5>!Gracias por enviar tu pregunta!</h5>
  </div>
</div>

<div id="pregunta_existente" class="row" style="display: none;">
  <div class="col s12 m4">
      Puede que ya tengamos una respuesta a tu pregunta, si no es así:
  </div>
  <div class="col s12 m4">
    <?php
      if (!$_SESSION["newsession"]){
        echo "<a href=\"registro.php\" class=\"btn green-button\">Enviar</a>";
      }else{
      echo "<a href=\"#\" onclick=\"$('#pregunta_existente').hide();$('#pregunta_enviada').show();\" class=\"btn green-button\">Enviar</a>";
      }
      ?>

  </div>
</div>

<div id="preguntas" class="row lista" style="display: none;">
  <ul>
    <li>
      <img src="http://lorempixum.com/100/100/nature/1" >
      <h3>¿cómo accedo a un credito en el tolima?</h3>
      <br/>
      <p>Respuestas:</p>
      <div>
        <ul>
          <li>Hola comadre! hay una sucursal en el centro del pueblo, donde ofrecen varios creditos, yo le puedo colaborar</li>
          <li>Hola comadre! qué tipo de credito le gustaría</li>
          <li>Hola comadre! cuanta plata necesita?</li>
        </ul>
        </div>
    </li>
  </ul>

  <p>Publicidad</p>
  <img onclick="window.open('http://www.davivienda.com')" src="images/davivienda.jpg" style="width: 90%">

</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script type="text/javascript">
  function showAndroidToast(toast) {
    Android.showToast(toast);
  }

  function getLocation() {
    navigator.geolocation.getCurrentPosition(displayLocation, handleError);
  }

  function displayLocation(position){
    showAndroidToast(position.coords.latitude + ", " + position.coords.longitude, position.coords.longitude);

  }

  function handleError(e){
    showAndroidToast(e);
  }

</script>
</body>
</html>