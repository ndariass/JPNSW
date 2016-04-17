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
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h4 class="header center orange-text">Encontramos estas opciones para ti:</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img height="50px" width="200px"  src="images/fun_ecopetrol.png" alt="platica"/></h2>
                    <h5 class="center">Progresar</h5>

                    <p class="light"><strong>Podrás aumentar tu dinero
</strong> </br>
                        Requisitos:
 
Tener mínimo un año trabajando.  
No tener más de 65 años
Debes comprar un seguro por si no llegas a poder pagar.
No estar reportado en data credito.
</p>
                </div>
            </a>
        </div>

        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img height="50px" width="200px"   src="images/fun_actuar.png" alt="platica"/></h2>
                    <h5 class="center">Mujer 5
</h5>

                    <p class="light">Esta enfocado en las mujeres, te educaran financieramente, te asesoraran y acompañaran, también podras pagar como puedas, semanal, quincenal, mensual o en un solo pago
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