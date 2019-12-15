<html>

<body>
<head>


</head>

<?php


       $conex = mysqli_connect("localhost","root","","brazosultimate");

       if (isset($_POST['register'])){
         if(strlen($_POST['nombrepaciente']) >= 1 && strlen($_POST['correoelectronico']) >= 1){
           $correoelectronico = mysql_real_escape_string(trim($_POST['correoelectronico']));
           $nombrepaciente = mysql_real_escape_string(trim($_POST['nombrepaciente']));
           $apellidopaterno = mysql_real_escape_string(trim($_POST['apellidopaterno']));
           $apellidomaterno = mysql_real_escape_string(trim($_POST['apellidomaterno']));
           $genero = mysql_real_escape_string(trim($_POST['genero']));
           $causa = mysql_real_escape_string(trim($_POST['causa']));
           $edadnino = mysql_real_escape_string(trim($_POST['edadnino']));
           $nombretutor = mysql_real_escape_string(trim($_POST['nombretutor']));
           $apellidopaternotutor = mysql_real_escape_string(trim($_POST['apellidopaternotutor']));
           $apellidomaternotutor =  mysql_real_escape_string(trim($_POST['apellidomaternotutor']));
           $parentesco = mysql_real_escape_string(trim($_POST['parentesco']));
           $telefono = mysql_real_escape_string(trim($_POST['telefono']));
           $estado = mysql_real_escape_string(trim($_POST['estado']));
           $municipio = mysql_real_escape_string(trim($_POST['municipio']));
           $calle = mysql_real_escape_string(trim($_POST['calle']));
           $noexterior = mysql_real_escape_string(trim($_POST['noexterior']));
           $condicion = mysql_real_escape_string(trim($_POST['condicion']));
           $ingresomensual = mysql_real_escape_string(trim($_POST['ingresomensual']));
           $dedomenique = mysql_real_escape_string(trim($_POST['dedomenique']));
           $dedoanular = mysql_real_escape_string(trim($_POST['dedoanular']));
           $dedomedio = mysql_real_escape_string(trim($_POST['dedomedio']));
           $dedopulgar = mysql_real_escape_string(trim($_POST['dedopulgar']));
           $largodorso = mysql_real_escape_string(trim($_POST['largodorso']));
           $anchomunon = mysql_real_escape_string(trim($_POST['anchomunon']));
           $largomunon = mysql_real_escape_string(trim($_POST['largomunon']));
           $anchomuneca = mysql_real_escape_string(trim($_POST['anchomuneca']));
           $superheroe = mysql_real_escape_string(trim($_POST['superheroe']));

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
                  window.location="verificacionadmin.php";
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


//SELECT * FROM administradores WHERE correo = "or '1'='1'
