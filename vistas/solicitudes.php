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
</head>
<title> Solicutudes </title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/Imagen1.png"  type="image/png">
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
                        <a class="navbar-brand logo_h" href="../index.html"><img src="imgadmin/Imagen1.png" width="125" height="125" alt=""></a>
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
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indicadores graficas</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="graficaestados.php">Grafica estatal</a>
                                        </a></li>
                                        <li class="nav-item"><a class="nav-link" href="grafic.php">Grafica de municipio</a>
                                        </a></li>

                                        <li class="nav-item"><a class="nav-link" href="graficaedad.php">Grafica de edad</a>
                                        </a></li>

                                         <li class="nav-item"><a class="nav-link" href="graficapade.php">Grafica  padecimiento</a>
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



<center>
<h2>Historial general de solicitudes de prótesis</h2>
</center>

<br>
<div class="table-responsive">

<table class="table table-striped">
         <tr >
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

         $sql="SELECT P.fecha ,P.nombrepaciente, P.apellidopaterno , P.apellidomaterno, P.genero, P.causa, P.edadnino ,D.nombretutor, D.apellidopaternotutor, D.apellidopaternotutor, D.parentesco, D.correoelectronico, D.telefono, D.estado, D.municipio,D.calle,D.noexterior, D.condicion, D.ingresomensual, MS.largodedomenique, MS.largodedoanular, MS.largodedomedio    , MS.largodedopulgar, MS.largodorso, MA.anchomunon, MA.largomunon, MA.anchomuneca, MA.superheroe FROM postulantes P, detalleinfotutor D, manosaludable MS, manoafectacion MA WHERE P.correoelectronico = D.correoelectronico AND D.correoelectronico = MS.correoelectronico AND MS.correoelectronico = MA.correoelectronico";
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


         <td class="bot"><a href="includes/borrarsolicitud.php?correoelectronico=<?php echo $mostrar[11] ?>"><input type='button' name='del' id='del' value='Borrar' class="btn btn-primary" ></a></td>


         <td class="bot"><a href="includes/editarsolicitud.php?nombre=<?php echo $mostrar[1]?> & apepa=<?php echo $mostrar[2]?> & apmap=<?php echo $mostrar[3]?> & genero=<?php echo $mostrar[4]?>  & causa=<?php echo $mostrar[5]?> & edad=<?php echo $mostrar[6]?>  & nombretutor =<?php echo $mostrar[7]?> & apellidopattut =<?php echo $mostrar[8]?> & apellidomattut =<?php echo $mostrar[9]?> & parentesco =<?php echo $mostrar[10]?> & correoelectronico =<?php echo $mostrar[11]?> & telefono =<?php echo $mostrar[12]?> & estado =<?php echo $mostrar[13]?> & municipio =<?php echo $mostrar[14]?> & calle =<?php echo $mostrar[15]?>  & no =<?php echo $mostrar[16]?>    & no =<?php echo $mostrar[17]?> & condicion =<?php echo $mostrar[18]?> & ingreso =<?php echo $mostrar[19]?> & dedomenique =<?php echo $mostrar[20]?> & dedoanular =<?php echo $mostrar[21]?> & dedomedio =<?php echo $mostrar[22]?> & dedopulgar =<?php echo $mostrar[23]?> & largodorso =<?php echo $mostrar[24]?> & anchomunon =<?php echo $mostrar[25]?> & largomunon =<?php echo $mostrar[26]?> & anchomuneca =<?php echo $mostrar[27]?> & superheroe =<?php echo $mostrar[28]?>  "><input type='button' name='del' id='del' value='Actualizar' class="btn btn-info"></a></td>



         <?php

         }


         ?>

     </table>
</div>

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
                                <li><a href=><i class=width="180" height="180"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" width="180" height="180"></i></a></li>
                                <li><a href=><i class="fa fa-youtube" width="180" height="180"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>

        <script src="jsadmin/jquery-3.3.1.min.js"></script>
        <script src="jsadmin/popper.js"></script>
        <script src="jsadmin/bootstrap.min.js"></script>
        <script src="jsadmin/stellar.js"></script>
        <script src="vendorsadmin/lightbox/simpleLightbox.min.js"></script>
        <script src="vendorsadmin/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendorsadmin/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendorsadmin/isotope/isotope.pkgd.min.js"></script>
        <script src="vendorsadmin/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendorsadmin/popup/jquery.magnific-popup.min.js"></script>
        <script src="jsadmin/jquery.ajaxchimp.min.js"></script>
        <script src="vendorsadmin/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendorsadmin/counter-up/jquery.counterup.js"></script>
        <script src="jsadmin/mail-script.js"></script>
        <script src="jsadmin/theme.js"></script>


</body>

</html>