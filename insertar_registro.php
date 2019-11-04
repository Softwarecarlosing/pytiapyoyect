<html>

<body>
<head>


</head>

<?php

       include("con_db.php");
       //$conex = mysqli_connect("localhost","root","","brazos");

       if (isset($_POST['register'])){
         if(strlen($_POST['nombrepaciente']) >= 1 && strlen($_POST['correoelectronico']) >= 1){
           $nombrepaciente = trim($_POST['nombrepaciente']);
           $apellidopaterno = trim($_POST['apellidopaterno']);
           $apellidomaterno = trim($_POST['apellidomaterno']);
           $edad = trim($_POST['edad']);
           $nombretutor = trim($_POST['nombretutor']);
           $apellidopaternotutor = trim($_POST['apellidopaternotutor']);
           $apellidomaternotutor = trim($_POST['apellidomaternotutor']);
           $parentesco = trim($_POST['parentesco']);
           $correoelectronico = trim($_POST['correoelectronico']);
           $telefono = trim($_POST['telefono']);
           $estado = trim($_POST['estado']);
           $municipio = trim($_POST['municipio']);
           $calle = trim($_POST['calle']);
           $noexterior = trim($_POST['noexterior']);
           $condicion = trim($_POST['condicion']);
           $ingresomensual = trim($_POST['ingresomensual']);
           $dedomenique = trim($_POST['dedomenique']);
           $dedoanular = trim($_POST['dedoanular']);
           $dedomedio = trim($_POST['dedomedio']);
           $dedopulgar = trim($_POST['dedopulgar']);
           $largodorso = trim($_POST['largodorso']);
           $anchomunon = trim($_POST['anchomunon']);
           $largomunon = trim($_POST['largomunon']);
           $anchomuneca = trim($_POST['anchomuneca']);
           $superheroe = trim($_POST['superheroe']);
           $consulta = "INSERT INTO registropostulantess (nombrepaciente,apellidopaterno, apellidomaterno, edad, nombretutor, apellidopaternotutor, apellidomaternotutor, parentesco, correoelectronico, telefono, estado, municipio, calle, noexterior, condicion, ingresomensual,dedomenique,dedoanular,dedomedio,dedopulgar,largodorso,anchomunon,largomunon,anchomuneca,superheroe) VAlUES ('$nombrepaciente','$apellidopaterno', '$apellidomaterno', '$edad','$nombretutor', '$apellidopaternotutor','$apellidomaternotutor','$parentesco','$correoelectronico','$telefono','$estado','$municipio','$calle','$noexterior','$condicion','$ingresomensual','$dedomenique','$dedoanular','$dedomedio','$dedopulgar','$largodorso','$anchomunon','$largomunon','$anchomuneca','$superheroe')";

           $resultado = mysqli_query($conex,$consulta);

           if($resultado){

                 ?>
                  <body>
                  <script type="text/javascript">
                  window.location="verificacion.php";
                  </script>
                  </body>


                <?php
            } else {
               ?>
               <h3 class"bad">¡Ups ha ocurrido un error!</h3>
                die("No se ha podido conectar a la BD: " . mysql_error());
                echo mysql_errno($resultado) . ": " . mysql_error($resulatado) . "\n";
               <?php
            }
         } else {
               ?>
               <h3 class="bad">!Por favor completa los campos!</h3>
               <?php

        }


      }