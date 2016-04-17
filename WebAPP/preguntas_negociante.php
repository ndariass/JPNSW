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
        <h4 class="header center">Preguntas</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col s12 m4">

                <div class="icon-block">
                    <h5 class="center">¿Tu negocio ya esta en funcionamiento?</h5>

                    <form action="#">
                        <p>
                            <input name="group1" type="radio" id="yes" />
                            <label for="yes">En funcionamiento</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="no" />
                            <label for="no">Quiero crearlo</label>
                        </p>

                    </form>

                </div>

        </div>

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿En cuantos meses quieres pagar el dinero?</h5>

                    <form action="#">
                        <p>
                            <input name="group2" type="text" id="yes2" />
                        </p>

                    </form>
                </div>
        </div>

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿Cada cuanto quieres realizar pagos?</h5>

                    <form action="#">
                        <p>
                            <input name="group3" type="checkbox" id="yes3" />
                            <label for="yes3">Semanal</label>
                        </p>
                        <p>
                            <input name="group3" type="checkbox" id="no3" />
                            <label for="no3">Quincenal</label>
                        </p>

<p>
                            <input name="group3" type="checkbox" id="no3" />
                            <label for="no3">Mensual</label>
                        </p>
                        <p>
                            <input name="group3" type="checkbox" id="no3" />
                            <label for="no3">Unico pago</label>
                        </p>
                    </form>
                </div>
        </div>


        

    </div>

    <div class="row">
        <div class="col s4"> </div>
        <div class="col s4">
            <button class="btn waves-effect waves-light brown-button btn-large btn-big-text" type="submit" onclick="window.open('resultado_preguntas_comerciante.php', '_self')" name="action">Siguente
                <i class="material-icons right">send</i>
            </button>
        </div>
        <div class="col s4"> </div>
    </div>


</div>





<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>