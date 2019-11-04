<?php

    include("cone.php");


    $id=$_GET["id"];
    $base->query("DELETE FROM administradores WHERE idAdmin='$id'");
    header("Location:zoneusers.php");




?>