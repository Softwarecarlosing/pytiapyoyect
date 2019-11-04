<html>

<body>




<?php



  $nombre = $_POST['name'];
  $correoelectronico = $_POST['correoelectronico'];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST['mensaje'];

  $mailsend = mail ('carloscarmonaperes44@gmail.com','consulta de eventos',Nombre: $nombre $correoelectronico $asunto $mensaje);


  if ($mailsend){

       <body>
       <script type="text/javascript">
        window.location="verificacion.php";
        </script>
        </body>

}
else{

}

?>

</body>
</html>





