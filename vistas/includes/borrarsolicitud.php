<?php

    include("cone.php");


    $correoelectronico=$_GET["correoelectronico"];

    $base->query("DELETE FROM postulantes WHERE correoelectronico='$correoelectronico'");
    $base->query("DELETE FROM detalleinfotutor WHERE correoelectronico='$correoelectronico'");
    $base->query("DELETE FROM manoafectacion WHERE correoelectronico='$correoelectronico'");
    $base->query("DELETE FROM manosaludable WHERE correoelectronico='$correoelectronico'");



    header("Location:../solicitudes.php");


?>