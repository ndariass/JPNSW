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
        <h4 class="header center">Preguntas</h4>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿Cuántas veces quieres retirar dinero al mes?</h5>

                    <form action="#">
                        <p>
                            <input name="group2" type="radio" id="yes2" />
                            <label for="yes2">Menos de 5</label>
                        </p>
                        <p>
                            <input name="group2" type="radio" id="no2" />
                            <label for="no2">5 o más</label>
                        </p>

                    </form>
                </div>
        </div>

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿Solo quieres ahorrar, o quieres sacarla cuando la necesites?</h5>

                    <form action="#">
                        <p>
                            <input name="group3" type="radio" id="yes3" />
                            <label for="yes3">Solo ahorrar</label>
                        </p>
                        <p>
                            <input name="group3" type="radio" id="no3" />
                            <label for="no3">Poder sacarla</label>
                        </p>

                    </form>
                </div>
        </div>


        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿Quieres consignar la misma cantidad de plata al mes?</h5>

                    <form action="#">
                        <p>
                            <input name="group4" type="radio" id="yes4" />
                            <label for="yes4">Sí</label>
                        </p>
                        <p>
                            <input name="group4" type="radio" id="no4" />
                            <label for="no4">No</label>
                        </p>

                    </form>
                </div>
        </div>

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿Quisieras manejar tus productos por internet? ¿O confías más en el cajero, el tendero o el celular?</h5>

                    <form action="#">
                        <p>
                            <input type="checkbox" id="internet" />
                            <label for="internet">Internet</label>
                        </p>
                        <p>
                            <input type="checkbox" id="cajero" />
                            <label for="cajero">Cajero</label>
                        </p>

                        <p>
                            <input type="checkbox" id="tendero" />
                            <label for="tendero">Tendero</label>
                        </p>

                    </form>
                </div>
        </div>

        <div class="col s12 m4">
                <div class="icon-block">

                    <h5 class="center">¿A qué te dedicas?</h5>

                    <form action="#">
                        <p>
                            <input name="group5" type="radio" id="yes5" />
                            <label for="yes5">Empleado</label>
                        </p>
                        <p>
                            <input name="group5" type="radio" id="no5" />
                            <label for="no5">Pensionado</label>
                        </p>
                        <p>
                            <input name="group5" type="radio" id="no55" />
                            <label for="no55">Rentista</label>
                        </p>
                        <p>
                            <input name="group5" type="radio" id="no555" />
                            <label for="no555">Independiente</label>
                        </p>

                    </form>
                </div>
        </div>

        <div class="col s12 m4">

            <div class="icon-block">
                <h5 class="center">¿Estarías dispuesto a pagar cuota de manejo?</h5>

                <form action="#">
                    <p>
                        <input name="group1" type="radio" onclick="setSavingsCosts(1)" id="yes" />
                        <label for="yes">Sí</label>
                    </p>
                    <p>
                        <input name="group1" type="radio" onclick="setSavingsCosts(0)" id="no" />
                        <label for="no">No</label>
                    </p>

                </form>

            </div>

        </div>

    </div>

    <div class="row">
        <div class="col s4"> </div>
        <div class="col s4">
            <button class="btn waves-effect waves-light green-button btn-large btn-big-text" type="submit" onclick="window.open('resultado_preguntas.php', '_self')" name="action">Siguente
                <i class="material-icons right">send</i>
            </button>
        </div>
        <div class="col s4"> </div>
    </div>


</div>





<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="js/questionsControl.js"></script>
</body>
</html>