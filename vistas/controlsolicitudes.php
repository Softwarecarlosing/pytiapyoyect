<?php

 SESSION_START();

 $nombre=$_SESSION['user'];

 $conexion=mysqli_connect("localhost","root","","brazosultimate");

?>

<?php
  if(isset($_SESSION['user'])){



  }else{
  echo '<SCRIPT LANGUAGE="javascript">
         location.href = "loginadmin.php";
         </SCRIPT>';
  }

?>


<!doctype html>
<html lang="en">
<head>

<title> Solicutudes </title>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="imgadmin/Imagen1.png"  type="imageadmin/png">
        <title>Brazos Firmes</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <script src="code/highcharts.js"></script>
        <script src="code/highcharts-3d.js"></script>
        <script src="code/modules/exporting.js"></script>
        <script src="code/modules/export-data.js"></script>



</head>

<body>

    <header class="header_area">
        <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="../index.html"><img src="img/Imagen1.png" width="125" height="125" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">

                               <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <!-- --></a>
                                    <ul class="dropdown-menu">


                                        </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item active"><a class="nav-link" href="loginadmin.php">Inicio</a></li>
                                <li class="nav-item submenu dropdown">

                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminstradores</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="zoneusers.php">Ver o agregar</a>

                                        </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrar solicitud</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="formularioadmin.php">ir registro</a>

                                        </a></li>
                                    </ul>
                                </li>
                                 <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitudes</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="solicitudes.php">Historial</a>
                                        </a></li>
                                        <li class="nav-item"><a class="nav-link" href="controlsolicitudes.php">Control</a>
                                        </a></li>

                                    </ul>
                                </li>

                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link" href="">Cuenta</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="includes/logout.php">Cerrar sesion </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link" href="includes/logout.php"></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>






        <section class="banner_area">
            <div class="box_1620">


            </div>
        </section>




<br>
<br>
<br>
<br>
<br>
<br>

<style>
input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=date]:focus {
  border: 3px solid #555;
}
</style>

<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>

<form method="POST" action="controlsolicitudes.php">

  <h2>Buscar por Fecha</h2>
    Fecha inicial: <br/>
    <input type="date" id="calendario" name="fechainicio" value="2019-09-0"
       min="2019-08-15" max="2050-10-31">
    Fecha final: <br/>
    <input type="date" id="calendariodos" name="fechafin" value="2019-09-0"
       min="2019-08-15" max="2050-10-31">
    <br><br/>
    <input type="submit" id="btn_submit" value="Buscar"   class="btn btn-primary btn-lg btn-block">

</form>




<p>
<p>
<center>
<h2>Solicitudes de prótesis</h2>
</center>
<p>
<p>

<div class="table-responsive">

<table class="table table-striped">

         <tr>
         <td>Fecha</td>
         <td> Nombre </td>
         <td> Apellido paterno </td>
         <td> Apellido materno </td>
         <td> Genero</td>
         <td>Causa</td>
         <td>Edad</td>
         <td> Nombre tutor</td>
         <td> Apellido paterno</td>
         <td> Apellido materno</td>
         <td> parentesco</td>
         <td> Correo Electronico</td>
         <td> Telefono</td>
         <td> Estado</td>
         <td> Municipio</td>
         <td> Calle</td>
         <td> No exterior</td>
         <td> Condicion</td>
         <td> Ingreso mensual</td>
         <td> Dedo menique</td>
         <td> Dedo anular</td>
         <td> Dedo medio</td>
         <td> Dedo pulgar</td>
         <td> Largo dorso</td>
         <td> Ancho muñon</td>
         <td> Largo muñon</td>
         <td> Ancho muñeca</td>
         <td> Super heroe</td>
         </tr>

         <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $fechainicio = trim($_POST['fechainicio']);
         $fechafin = trim($_POST['fechafin']);


         $sql="SELECT P.fecha ,P.nombrepaciente, P.apellidopaterno , P.apellidomaterno, P.genero, P.causa, P.edadnino ,D.nombretutor, D.apellidopaternotutor, D.apellidopaternotutor, D.parentesco, D.correoelectronico, D.telefono, D.estado, D.municipio,D.calle,D.noexterior, D.condicion, D.ingresomensual, MS.largodedomenique, MS.largodedoanular, MS.largodedomedio    , MS.largodedopulgar, MS.largodorso, MA.anchomunon, MA.largomunon, MA.anchomuneca, MA.superheroe FROM postulantes P, detalleinfotutor D, manosaludable MS, manoafectacion MA WHERE CAST(P.fecha AS DATE) BETWEEN '$fechainicio' AND '$fechafin' AND P.correoelectronico = D.correoelectronico AND D.correoelectronico = MS.correoelectronico AND MS.correoelectronico = MA.correoelectronico";

        // $sql="SELECT * FROM registropostulantess WHERE CAST(fecha AS DATE) BETWEEN '$fechainicio' AND '$fechafin'";
         $result=mysqli_query($conexion,$sql);

         while($mostrar=mysqli_fetch_array($result)){
          ?>


         <tr>
         <td> <?php echo $mostrar[0] ?>  </td>
         <td> <?php echo $mostrar[1] ?>  </td>
         <td> <?php echo $mostrar[2] ?> </td>
         <td> <?php echo $mostrar[3] ?> </td>
         <td> <?php echo $mostrar[4] ?> </td>
         <td> <?php echo $mostrar[5] ?> </td>
         <td> <?php echo $mostrar[6] ?> </td>
         <td> <?php echo $mostrar[7] ?> </td>
         <td> <?php echo $mostrar[8] ?> </td>
         <td> <?php echo $mostrar[9] ?> </td>
         <td> <?php echo $mostrar[10] ?> </td>
         <td> <?php echo $mostrar[11] ?> </td>
         <td> <?php echo $mostrar[12] ?> </td>
         <td> <?php echo $mostrar[13] ?> </td>
         <td> <?php echo $mostrar[14] ?> </td>
         <td> <?php echo $mostrar[15] ?> </td>
         <td> <?php echo $mostrar[16] ?> </td>
         <td> <?php echo $mostrar[17] ?> </td>
         <td> <?php echo $mostrar[18] ?> </td>
         <td> <?php echo $mostrar[19] ?> </td>
         <td> <?php echo $mostrar[20] ?> </td>
         <td> <?php echo $mostrar[21] ?> </td>
         <td> <?php echo $mostrar[22] ?> </td>
         <td> <?php echo $mostrar[23] ?> </td>
         <td> <?php echo $mostrar[24] ?> </td>
         <td> <?php echo $mostrar[25] ?> </td>
         <td> <?php echo $mostrar[26] ?> </td>
         <td> <?php echo $mostrar[27] ?> </td>
         <td class="bot"><a href="borrar.php?id=<?php echo $personas->idAdmin?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
         </tr>
         <?php
         }
         }
         ?>
     </table>
</div>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<form method="POST" action="controlsolicitudes.php">
<p>
<p>
<h2>Buscar registros por edad</h2>
<p>
<p>
<div class="center large">
                    <select class="center large" name="edad">
                        <option value="5" disabled selected>Seleccione edad a buscar</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                    </select>
                    <br><br/>
    <input type="submit" id="btn_submit" value="Buscar por edad"   class="btn btn-primary btn-lg btn-block">
</form>
<p>
<p>
<div class="table-responsive">

<table class="table table-striped">

         <tr>
         <td>Edad</td>
         <td>Fecha</td>
         <td> Nombre </td>
         <td> Apellido paterno </td>
         <td> Apellido materno </td>
         <td> Genero</td>
         <td>Causa</td>
         <td> Nombre tutor</td>
         <td> Apellido paterno</td>
         <td> Apellido materno</td>
         <td> parentesco</td>
         <td> Correo Electronico</td>
         <td> Telefono</td>
         <td> Estado</td>
         <td> Municipio</td>
         <td> Calle</td>
         <td> No exterior</td>
         <td> Condicion</td>
         <td> Ingreso mensual</td>
         <td> Dedo menique</td>
         <td> Dedo anular</td>
         <td> Dedo medio</td>
         <td> Dedo pulgar</td>
         <td> Largo dorso</td>
         <td> Ancho muñon</td>
         <td> Largo muñon</td>
         <td> Ancho muñeca</td>
         <td> Super heroe</td>
         </tr>

         <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $edad = trim($_POST['edad']);


         $sqledad="SELECT P.edadnino, P.fecha ,P.nombrepaciente, P.apellidopaterno , P.apellidomaterno, P.genero, P.causa, D.nombretutor, D.apellidopaternotutor, D.apellidopaternotutor, D.parentesco, D.correoelectronico, D.telefono, D.estado, D.municipio,D.calle,D.noexterior, D.condicion, D.ingresomensual, MS.largodedomenique, MS.largodedoanular, MS.largodedomedio, MS.largodedopulgar, MS.largodorso, MA.anchomunon, MA.largomunon, MA.anchomuneca, MA.superheroe FROM postulantes P, detalleinfotutor D, manosaludable MS, manoafectacion MA WHERE '$edad' = P.edadnino AND P.correoelectronico = D.correoelectronico AND D.correoelectronico = MS.correoelectronico AND MS.correoelectronico = MA.correoelectronico";


         $result=mysqli_query($conexion,$sqledad);

         while($mostrar=mysqli_fetch_array($result)){
          ?>



         <tr>
         <td> <?php echo $mostrar[0] ?>  </td>
         <td> <?php echo $mostrar[1] ?>  </td>
         <td> <?php echo $mostrar[2] ?> </td>
         <td> <?php echo $mostrar[3] ?> </td>
         <td> <?php echo $mostrar[4] ?> </td>
         <td> <?php echo $mostrar[5] ?> </td>
         <td> <?php echo $mostrar[6] ?> </td>
         <td> <?php echo $mostrar[7] ?> </td>
         <td> <?php echo $mostrar[8] ?> </td>
         <td> <?php echo $mostrar[9] ?> </td>
         <td> <?php echo $mostrar[10] ?> </td>
         <td> <?php echo $mostrar[11] ?> </td>
         <td> <?php echo $mostrar[12] ?> </td>
         <td> <?php echo $mostrar[13] ?> </td>
         <td> <?php echo $mostrar[14] ?> </td>
         <td> <?php echo $mostrar[15] ?> </td>
         <td> <?php echo $mostrar[16] ?> </td>
         <td> <?php echo $mostrar[17] ?> </td>
         <td> <?php echo $mostrar[18] ?> </td>
         <td> <?php echo $mostrar[19] ?> </td>
         <td> <?php echo $mostrar[20] ?> </td>
         <td> <?php echo $mostrar[21] ?> </td>
         <td> <?php echo $mostrar[22] ?> </td>
         <td> <?php echo $mostrar[23] ?> </td>
         <td> <?php echo $mostrar[24] ?> </td>
         <td> <?php echo $mostrar[25] ?> </td>
         <td> <?php echo $mostrar[26] ?> </td>
         <td> <?php echo $mostrar[27] ?> </td>
         </tr>
         <?php
         }
         }
         ?>
     </table>
</div>


<p>
<p>
<p>
<p>
<p>
<p>
<p>
<p>
<form method="POST" action="controlsolicitudes.php">
<p>
<p>
<h2>Buscar registros por municipio</h2>
<p>
<p>
 <div class="">
                    <select class="" name="municipio">
                        <option value="" disabled selected>Seleccionar municipio</option>
                        <option value="Cuautepec">Cuautepec</option>
                        <option value="Tulancingo">Tulancingo</option>
                        <option value="Pachuca">Pachuca de soto</option>
                    </select>
                    <br><br/>
    <input type="submit" id="btn_submit" value="Buscar"   class="btn btn-primary btn-lg btn-block">
</form>
<p>
<p>
<div class="table-responsive">

<table class="table table-striped">
         <tr>
         <td> Municipio</td>
         <td>Fecha</td>
         <td> Nombre </td>
         <td> Apellido paterno </td>
         <td> Apellido materno </td>
         <td> Genero</td>
         <td>Causa</td>
         <td>Edad</td>
         <td> Nombre tutor</td>
         <td> Apellido paterno</td>
         <td> Apellido materno</td>
         <td> parentesco</td>
         <td> Correo Electronico</td>
         <td> Telefono</td>
         <td> Estado</td>
         <td> Calle</td>
         <td> No exterior</td>
         <td> Condicion</td>
         <td> Ingreso mensual</td>
         <td> Dedo menique</td>
         <td> Dedo anular</td>
         <td> Dedo medio</td>
         <td> Dedo pulgar</td>
         <td> Largo dorso</td>
         <td> Ancho muñon</td>
         <td> Largo muñon</td>
         <td> Ancho muñeca</td>
         <td> Super heroe</td>
         </tr>


         <?php
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $municipio = trim($_POST['municipio']);

         $sqlmunicipio="SELECT D.municipio, P.fecha ,P.nombrepaciente, P.apellidopaterno , P.apellidomaterno, P.genero, P.causa, P.edadnino ,D.nombretutor, D.apellidopaternotutor, D.apellidopaternotutor, D.parentesco, D.correoelectronico, D.telefono, D.estado, D.calle,D.noexterior, D.condicion, D.ingresomensual, MS.largodedomenique, MS.largodedoanular, MS.largodedomedio,MS.largodedopulgar, MS.largodorso, MA.anchomunon, MA.largomunon, MA.anchomuneca, MA.superheroe FROM postulantes P, detalleinfotutor D, manosaludable MS, manoafectacion MA WHERE '$municipio' = D.municipio AND P.correoelectronico = D.correoelectronico AND D.correoelectronico = MS.correoelectronico AND MS.correoelectronico = MA.correoelectronico";

         $result=mysqli_query($conexion,$sqlmunicipio);

         while($mostrar=mysqli_fetch_array($result)){
          ?>



         <tr>
         <td> <?php echo $mostrar[0] ?> </td>
         <td> <?php echo $mostrar[1] ?>  </td>
         <td> <?php echo $mostrar[2] ?> </td>
         <td> <?php echo $mostrar[3] ?> </td>
         <td> <?php echo $mostrar[4] ?> </td>
         <td> <?php echo $mostrar[5] ?> </td>
         <td> <?php echo $mostrar[6] ?> </td>
         <td> <?php echo $mostrar[7] ?> </td>
         <td> <?php echo $mostrar[8] ?> </td>
         <td> <?php echo $mostrar[9] ?> </td>
         <td> <?php echo $mostrar[10] ?> </td>
         <td> <?php echo $mostrar[11] ?> </td>
         <td> <?php echo $mostrar[12] ?> </td>
         <td> <?php echo $mostrar[13] ?> </td>
         <td> <?php echo $mostrar[14] ?> </td>
         <td> <?php echo $mostrar[15] ?> </td>
         <td> <?php echo $mostrar[16] ?> </td>
         <td> <?php echo $mostrar[17] ?> </td>
         <td> <?php echo $mostrar[18] ?> </td>
         <td> <?php echo $mostrar[19] ?> </td>
         <td> <?php echo $mostrar[20] ?> </td>
         <td> <?php echo $mostrar[21] ?> </td>
         <td> <?php echo $mostrar[22] ?> </td>
         <td> <?php echo $mostrar[23] ?> </td>
         <td> <?php echo $mostrar[24] ?> </td>
         <td> <?php echo $mostrar[25] ?> </td>
         <td> <?php echo $mostrar[26] ?> </td>
         <td> <?php echo $mostrar[27] ?> </td>

         </tr>
         <?php
         }
         }
         ?>
     </table>
</div>
<p>
<p>
 <section class="home_blog_area pad_top">
            <div class="container">

            </div>
        </section>

            <footer class="footer_area">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3></h3>
                            </div>
                            <p></p>
                            <p></p>
                        </aside>
                    </div>
                    <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3></h3>
                            </div>
                            <p>

                            </p>
                        </aside>
                    </div>
                    <div class="col-lg-4">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3></h3>
                            </div>
                            <p></p>
                            <ul class="list">
                                <li><a href=""><i class="" width="180" height="180"></i></a></li>
                                <li><a href=""><i class="" width="180" height="180"></i></a></li>
                                <li><a href=""><i class="" width="180" height="180"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>

        <!--<script type="text/javascript">
           $(function() {
           $("#calendario").datepicker();
              });
            </script>-->


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>


</body>

</html>