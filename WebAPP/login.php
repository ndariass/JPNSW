<?php

$session_name;

if(isset($_POST['actionSubmit'])) {
    if (($_POST["name"] == "Nicolas" && $_POST["id"] == 1) ||
        ($_POST["name"] == "Pedro" && $_POST["id"] == 2) ||
        ($_POST["name"] == "Jose" && $_POST["id"] == 3) ||
        ($_POST["name"] == "Juan" && $_POST["id"] == 4)
        || ($_POST["name"] == "Walter" && $_POST["id"] == 5)
    ) {
        $session_name = $_POST["name"];
        header('Location: index.php');

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

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h4 class="header center orange-text">!Compadrito!</h1>
            <h5 class="header center orange-text">Ingresa tus datos</h4>
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

            <button class="btn waves-effect waves-light" type="submit" name="actionSubmit">Submit
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