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
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h4 class="header center">Estos son los productos que más se ajustan a tu perfil</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img src="images/logo_banco_bogota.png" alt="platica"/></h2>
                    <h5 class="center">Cuenta de ahorros Flexiahorro Personal</h5>

                    <p class="light"><strong>Cuota de manejo: $6.900</strong> </br>
                        Esta Cuenta te ofrece: Puedes realizar todos los retiros en Cajeros Aval totalmente GRATIS. * Depende de las condiciones escogidas en la apertura de tu cuenta. Disfrutas de las diferentes alianzas. Participas en Promociones Vigentes. Puedes hacer uso de tus productos en los siguientes canales: Internet, Cajeros Automáticos, Agilizador Electrónico, Servilinea, Oficinas.</p>

                    <p>
                        <strong>Más Información</strong>
                    </p>

                </div>
            </a>
        </div>

        <div class="col s12 m4">
            <a class="black-text" href="registro.php">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><img src="images/logo_banco_popular.png" alt="platica"/></h2>
                    <h5 class="center">Ahorro Puro Tradicional</h5>

                    <p class="light"><strong>Cuota de manejo $8.000</strong> </br>
                        Es una cuenta de ahorros tradicional a través de la cual usted o su empresa podrá depositar dinero o cheques en el Banco Popular, obtener rendimientos y disponer de tales sumas mediante talonario de ahorros y/o tarjeta débito. La obtención de los rendimientos se hace sobre el saldo mínimo trimestral y se abona al final del período, el depósito inicial para su apertura es de $30.000. </p>

                    <p>
                        <strong>Más Información</strong>
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