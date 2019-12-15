<?php

SESSION_START();

$nombre=$_SESSION['user'];

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
<link rel="stylesheet" href="cssadmin/bootstrap.css">
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

<?php

    include("cone.php");
    $cone=$base->query("SELECT * FROM administradores");
    $registros=$cone->fetchAll(PDO::FETCH_OBJ);
    $registros=$base->query("SELECT * FROM administradores")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){
       $nombreadmin=mysql_real_escape_string($_POST['nombreadmin']);
       $password=mysql_real_escape_string(md5($_POST['password']));
       $correoelectronicoadmin=mysql_real_escape_string($_POST['correoelectronicoadmin']);
       $sql="INSERT INTO administradores (nombreadmin,password,correoelectronicoadmin) values (:nombreadmin,:password,:correoelectronicoadmin)";

      $resultado=$base->prepare($sql);
      $resultado->execute(array(":nombreadmin"=>$nombreadmin,":password"=>$password,":correoelectronicoadmin"=>$correoelectronicoadmin));

       header("Location:zoneusers.php");
    }

?>

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
                                 <li class="nav-item"><a class="nav-link" href="loginadmin.php">Regresar a inicio</a></li>
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
<h2>Control de administradores</h2>
</center>

<br>

<div class="table-responsive">
    <center>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table width="50%" border="0" aling="center"  class="table table-striped">
     <tr>
      <td class="primera_fila"></td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Password</td>
       <td class="primera_fila">Correo Electronico</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
     <tr>

     <?php

      foreach($registros as $personas):?>

     <tr>
      <td></td>
      <td><?php echo $personas->nombreadmin ?></td>
      <td><?php echo $personas->password ?></td>
      <td><?php echo $personas->correoelectronicoadmin ?></td>
      <td class="bot"><a href="includes/borraruser.php?id=<?php echo $personas->idAdmin?>"><input type='button' name='del' id='del' value='Borrar' class="btn btn-danger"></a></td>
      <td class="bot"><input type='button' name='up' id='up' value='Actualizar' class="btn btn-info"></a></td>
     </tr>

     <?php
     endforeach;
     ?>

     <tr>
     <td></td>
       <td><input type='text' name='nombreadmin' size='10' class='centrado'></td>
       <td><input type='text' name='password' size='10' class='centrado'></td>
       <td><input type='text' name='correoelectronicoadmin' size='10' class='centrado'></td>
       <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' class="btn btn-primary"></td></tr>
    </table>
    <form>
    </center>
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
                <li><a href=""><i class="" width="180" height="180"></i></a></li>
                <li><a href=""><i class="" width="180" height="180"></i></a></li>
                <li><a href=""><i class="" width="180" height="180"></i></a></li>
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