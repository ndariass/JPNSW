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
<div class="section no-pad-bot" id="index-banner" style="min-height: 20vh;">
    <div class="container ">
        <h4 class="header center">Encuentra tu banco más cercano</h4>
    </div>
</div>

<h5 class="header center" style="margin-bottom: 20px !important;">¿Qué deseas ver?</h5>
  <div class="row center">
        <a href="#" onclick="$('#map_container').show();initMap();" class="btn-large waves-effect waves-light green-button btn-big-text">Banco</a>
        <a href="#" onclick="$('#map_container').show();initMap();" class="btn-large waves-effect waves-light green-button btn-big-text">Cooperativa</a>
      </div>


<div id="map_container" class="container" style="display: none;">
    <div class="row">
        <div id="map" style="width: 100%; height: 60vh" ></div>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV02qTf1FI3o0sEaZwmnOGM3bH11JIP_Y&callback=getLocation">
        </script>
    </div>


</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="js/map.js"></script>
<script src="js/banks.js"></script>

</body>
</html>