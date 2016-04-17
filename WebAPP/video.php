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
        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas.php">Familia de compas</a></li>
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
        <li><a href="que_buscas.php">Compa</a></li>
        <li><a href="que_buscas.php">Familia de compas</a></li>
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
  <div class="container">
    <div class="row">

     <iframe width="360" height="315" src="https://www.youtube.com/embed/5s4MxySCi0w?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

    </div>
    <div class="row center">
    <a href="index.php" id="download-button" class="btn-large waves-effect waves-light orange">Continuar</a>
    </div>  
  </div>

  

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  
</body>
</html>