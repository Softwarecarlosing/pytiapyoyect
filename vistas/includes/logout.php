<?php
    include_once 'user_session.php';

    //fin de session de usuario
    $userSession = new UserSession();
    $userSession->closeSession();

    header("location:../loginadmin.php");

?>