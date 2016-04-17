<html>
<body>

<?php

if ( ($_POST["name"] == "Nicolas" && $_POST["id"] == 1) ||
    ($_POST["name"] == "Pedro" && $_POST["id"] == 2) ||
    ($_POST["name"] == "Jose" && $_POST["id"] == 3) ||
    ($_POST["name"] == "Juan" && $_POST["id"] == 4)
    || ($_POST["name"] == "Walter" && $_POST["id"] == 5)) {

    header('Location: inicio.php');

}

else {


    ?>
    <script type='text/javascript'>alert('Usuario no valido');</script>
    <?php
}
?>


</body>
</html>