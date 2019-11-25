<html>

<body>
<head>


</head>

<?php

       include("con_db.php");
       //$conex = mysqli_connect("localhost","root","","brazos");

       if (isset($_POST['register'])){
         if(strlen($_POST['nombrepaciente']) >= 1 && strlen($_POST['correoelectronico']) >= 1){
           $correoelectronico = trim($_POST['correoelectronico']);
           $nombrepaciente = trim($_POST['nombrepaciente']);
           $apellidopaterno = trim($_POST['apellidopaterno']);
           $apellidomaterno = trim($_POST['apellidomaterno']);
           $genero = trim($_POST['genero']);
           $causa = trim($_POST['causa']);
           $edadnino = trim($_POST['edadnino']);
           $nombretutor = trim($_POST['nombretutor']);
           $apellidopaternotutor = trim($_POST['apellidopaternotutor']);
           $apellidomaternotutor = trim($_POST['apellidomaternotutor']);
           $parentesco = trim($_POST['parentesco']);
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

           $postulantes = "INSERT INTO postulantes (correoelectronico,nombrepaciente,apellidopaterno,apellidomaterno,genero,causa,edadnino) VAlUES ('$correoelectronico','$nombrepaciente','$apellidopaterno','$apellidomaterno','$genero','$causa','$edadnino')";

           $resultado = mysqli_query($conex,$postulantes);

           $detalleinfotutor = "INSERT INTO detalleinfotutor (correoelectronico,nombretutor,apellidopaternotutor,apellidomaternotutor,parentesco,telefono,estado,municipio,calle,noexterior,ingresomensual,condicion) VAlUES ('$correoelectronico','$nombretutor','$apellidopaternotutor','$apellidomaternotutor','$parentesco','$telefono','$estado','$municipio','$calle','$noexterior','$ingresomensual','$condicion')";

           $resgistrotutor = mysqli_query($conex,$detalleinfotutor);

           $manosana = "INSERT INTO manosaludable (correoelectronico,largodedomenique,largodedoanular,largodedomedio,largodedopulgar,largodorso) VAlUES ('$correoelectronico','$dedomenique','$dedoanular','$dedomedio','$dedopulgar','$largodorso')";

           $registrosana = mysqli_query($conex,$manosana);

           $manoafectada = "INSERT INTO manoafectacion(correoelectronico,anchomunon,largomunon,anchomuneca,superheroe ) VAlUES ('$correoelectronico','$anchomunon','$largomunon','$anchomuneca','$superheroe')";

           $registroafectada = mysqli_query($conex,$manoafectada);


           if($registroafectada){

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
