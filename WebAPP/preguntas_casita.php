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
                <h5 class="center">¿Quieres comprar casita?</h5>

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

        <div class="col s12 m4">
            <div class="icon-block">

                <h5 class="center">¿Quieres remodelar tu casita?</h5>

                <form action="#">
                    <p>
                        <input name="group2" type="radio" id="yes2" />
                        <label for="yes2">Si</label>
                    </p>
                    <p>
                        <input name="group2" type="radio" id="no2" />
                        <label for="no2">No</label>
                    </p>

                </form>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">

                <h5 class="center">¿La quieres para vivir en ella o arrendarla?</h5>

                <form action="#">
                    <p>
                        <input type="checkbox" id="internet" />
                        <label for="internet">Vivir</label>
                    </p>
                    <p>
                        <input type="checkbox" id="cajero" />
                        <label for="cajero">Arrendarla</label>
                    </p>

                </form>
            </div>
        </div>


        <div class="col s12 m4">
            <div class="icon-block">

                <h5 class="center">¿Eres hombre o mujer?</h5>

                <form action="#">
                    <p>
                        <input name="group3" type="radio" id="yes3" />
                        <label for="yes3">Hombre</label>
                    </p>
                    <p>
                        <input name="group3" type="radio" id="no3" />
                        <label for="no3">Mujer</label>
                    </p>

                </form>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col s4"> </div>
        <div class="col s4">
            <button class="btn waves-effect waves-light btn-big-text green-button btn-large" type="submit" onclick="window.open('resultados_casita.php', '_self')" name="action">Siguiente
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