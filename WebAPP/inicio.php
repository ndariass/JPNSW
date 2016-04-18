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

        <?php
        if ($_SESSION["newsession"]){
          echo  "<h4 class=\"header center-align\">" . "Hola compadre " . $_SESSION["newsession"] . "</h4>";
        }
        ?>

      </div>
    </div>

    <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h4 class="header center">¿Cuál de mis compadres eres? </h4>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col s12 m4">
      <a class="black-text" href="que_buscas.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/chicos-ICONO.png" alt="negociante"/></h2>
          <h5 class="center">Compa</h5>

          <p class="light">Eres un compadre que busca un servicio para sí mismo</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
      <a class="black-text" href="que_buscas_familia.php">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="180px" height="150px" src="images/icono_familia.png" alt="negociante"/></h2>
          <h5 class="center">Familia de compas</h5>

          <p class="light">Eres un compadre que busca un servicio para tí y tu familia</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
        <a class="black-text" href="que_buscas_negociante.php">
          <div class="icon-block">
            <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/icono_comerciantes.png" alt="negociante"/></h2>
            <h5 class="center">Compadre negociante</h5>

            <p class="light">Eres un compadre con ideas de negocios y buscas la ayuda para llevarlas a cabo</p>
          </div>
        </a>
      </div>


      <?php
        if (!$_SESSION["newsession"]){
          echo "
            <div class=\"col s12 m4\">
          <a class=\"black-text\" href=\"login.php\">
            <div class=\"icon-block\">
              <h2 class=\"center light-blue-text\"><img width=\"150px\" height=\"150px\" src=\"images/icono_registrado.png\" alt=\"negociante\"/></h2>
              <h5 class=\"center\">¿Ya eres integrante?</h5>

              <p class=\"light\">Oprime aquí si ya eres un compadre registrado en nuestra pagina</p>
            </div>
          </a>
        </div>";
        }

      ?>


    </div>
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