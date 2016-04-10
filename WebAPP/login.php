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
<!--
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">¿Qué buscas compa?</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/">¿Qué buscas compa<</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  -->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h4 class="header center orange-text">!Compadrito!</h1>
            <h5 class="header center orange-text">Ingresa tus datos</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <div class="col s12 m4">
                <label>Tu nombre:</label>
                <input type="text" value=""></input>
            </div>
            <div class="col s12 m4">
                <label>Tu cedula:</label>
                <input type="text" value=""></input>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
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