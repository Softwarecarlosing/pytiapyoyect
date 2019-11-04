<html>

<body>
<head>


</head>

<?php

       include("con_db_.php");

       if (isset($_POST['register'])){
         if(strlen($_POST['nombrepaciente'])) >= 1 && strelen($_POST['correoelectronico']) >= 1){
           $nombrepaciente = trim($_POST['nombrepaciente']);
           $apellidopaterno = trim($_POST['apellidopaterno']);
           $apellidomaterno = trim($_POST['apellidomaterno']);
           $nombretutor = trim($_POST['nombretutor']);
           $apellidopaternotutor = trim($_POST['apellidopaternotutor']);
           $apellidomaternotutor = trim($_POST['apellidomaternotutor']);
           $parentesco = trim($_POST['parentesco']);
           $correoelectronico = trim($_POST['correoelectronico']);
           $telefono = trim($_POST['telefono']);
           $consulta = "INSERT INTO PACIENTES (nombrepaciente,     apellidopaterno, apellidomaterno, edad, nombretutor, apellidopaternotutor, apellidomaternotutor, parentesco, correoelectronico, telefono) VAlUES ('$nombrepaciente',$'apellidopaterno', '$apellidomaterno', '$edad','$nombretutor', '$apellidopaternotutor','$apellidomaternotutor',$'parentesco','$correoelectronico','$telefono')";
           $resultado = mysql_query($conex,$consulta);
           if($resultado){

                 ?>
                 <h3 class="ok">¡Te has inscripto correctamente !</h3>
                <?php
            } else {
               ?>
               <h3 class"bad">¡Ups ha ocurrido un error!</h3>
               <?php
            }
         } else {
               ?>
               <h3 class="bad">!Por favor completa los campos!</h3>
               <?php

        }

}







/*
    $nombrepaciente=$_POST["nombrepaciente"];
    $apellidopaterno=$_POST["apellidopaterno"];
    $apellidomaterno=$_POST["apellidomaterno"];
    $edad=$_POST["edad"];
    $nombretutor=$_POST["nombretutor"];
    $apellidopaternotutor=$_POST["apellidopaternotutor"];
    $apellidomaternotutor=$_POST["apellidomaternotutor"];
    $parentesco=$_POST["parentesco"];
    $correoelectronico=$_POST["correoelectronico"];
    $telefono=$_POST["telefono"];



    try{

         $base=new PDO('mysql:host=localhost; dbname=brazos', 'root', '');

         $base->setAttribute(PD0::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $base->exec("SET CHARACTER SET, utf8");

         $sql="INSERT INTO PACIENTES (nombrepaciente, 	apellidopaterno, apellidomaterno, edad, nombretutor, apellidopaternotutor, apellidomaternotutor, parentesco, correoelectronico, telefono) VAlUES (:nombrepaciente,:apellidopaterno, :apellidomaterno, :edad,:nombretutor, :apellidopaternotutor,:apellidomaternotutor,:parentesco,:correoelectronico,:telefono)";

         $resultado=$base->prepare($sql);
         $result->execute($sql);


    }

*/

?>





</body>














</html>