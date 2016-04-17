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
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h4 class="header center">Encontramos estas opciones para tí</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img height="75px" width="150px"  src="images/seguro_sura.png" alt="platica"/></h2>
                    <h5 class="center">Seguro de desempleo
</h5>
                    Si quedas sin trabajo este seguro cubre tus gastos por un periodo de tiempo según el monto que pagues.

                    </br>
                    </br>

                    Puedes ajustar el sistema de pago según la plata que tengas.
</p>
                </div>
            </a>
        </div>

        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img height="75px" width="150px"   src="images/seguro_axa.png" alt="platica"/></h2>
                    <h5 class="center">Seguro de desempleo

</h5>

                    No te pide requisitos medicos ni ningún tramite adicional
                    </br>
                    </br>
                    Da plata a tu familia si mueres accidentalmente
                    </br>
                    </br>
                    La plata que te dan depende de los productos que cubras con el seguro.
</p>
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