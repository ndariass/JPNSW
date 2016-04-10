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
  <!--<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">¿Cuál de mis compadres eres?</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/">¿Cuál de mis compadres eres?<</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>-->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h4 class="header center orange-text">¿Cuál de mis compadres eres?</h4>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col s12 m4">
      <a class="black-text" href="que_buscas.html">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/chicos-ICONO.png" alt="negociante"/></h2>
          <h5 class="center">Compa</h5>

          <p class="light">Eres un compadre más, el vecino que busca un servicio para si mismo.</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
      <a class="black-text" href="#!">
        <div class="icon-block">
          <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/papas-ICONO.png" alt="negociante"/></h2>
          <h5 class="center">Familia de compas</h5>

          <p class="light">Eres un compadre y su familia, que buscan un servicio para todos</p>
        </div>
        </a>
      </div>

      <div class="col s12 m4">
        <a class="black-text" href="que_buscas_negociante.html">
          <div class="icon-block">
            <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/comerciantes-ICONO.png" alt="negociante"/></h2>
            <h5 class="center">Compadre negociante</h5>

            <p class="light">Eres un compadre con ideas de negocio</p>
          </div>
        </a>
      </div>

      <div class="col s12 m4">
        <a class="black-text" href="login.php">
          <div class="icon-block">
            <h2 class="center light-blue-text"><img width="150px" height="150px" src="images/comerciantes-ICONO.png" alt="negociante"/></h2>
            <h5 class="center">¿Ya eres integrante?</h5>

            <p class="light">Estás registrado</p>
          </div>
        </a>
      </div>
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