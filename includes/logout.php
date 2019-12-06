<?php
    include_once 'user_session.php';

    //fin de session de usuario
    $userSession->session_start();
    $userSession = new UserSession();
    $userSession->closeSession();
    $UserSession->destroySession();
    setcookie(session_name(), '', time() - 42000, '/');

    header("location:../loginadmin.php");

    // Borra todas las variables de sesión
    $_SESSION = array();
    // Borra la cookie que almacena la sesión
    if(isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
    }
  // Finalmente, destruye la sesión
    session_destroy();



?>


