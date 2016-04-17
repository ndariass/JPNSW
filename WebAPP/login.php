<?php
session_start();

if( isset($_GET['logout'])){
    $_SESSION["newsession"] = NULL;
    session_unset();
}

?>
<?php

if(isset($_POST['actionSubmit'])) {
    if (($_POST["name"] == "Nicolas" && $_POST["id"] == 1) ||
        ($_POST["name"] == "Pedro" && $_POST["id"] == 2) ||
        ($_POST["name"] == "Jose" && $_POST["id"] == 3) ||
        ($_POST["name"] == "Juan" && $_POST["id"] == 4) ||
        ($_POST["name"] == "Walter" && $_POST["id"] == 5) ||
        ($_POST["name"] == "Maria" && $_POST["id"] == 1)
    ) {
        $_SESSION["newsession"]= $_POST["name"];
        header('Location: inicio.php');

    } else {


        ?>
        <script type='text/javascript'>Android.showToast('Usuario no valido');</script>
        <?php
    }
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
        <h4 class="header center">!Compadrito!</h1>
            <h5 class="header center">Ingresa tus datos</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <form method="post" action=>
            <div class="col s12 m4">
                <label>Tu nombre:</label>
                <input type="text" value="" name="name"></input>
            </div>
            <div class="col s12 m4">
                <label>Tu cedula:</label>
                <input type="text" value="" name="id"></input>
            </div>

            <button class="btn waves-effect waves-light btn-large btn-big-text green-button" type="submit" name="actionSubmit">Ingresar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>




<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>