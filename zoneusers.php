
<!doctype html>
<html lang="en">
</head>
<title> Solicutudes </title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/Imagen1.png"  type="image/png">
        <title>Brazos Firmes</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

<?php

    include("cone.php");
    $cone=$base->query("SELECT * FROM administradores");
    $registros=$cone->fetchAll(PDO::FETCH_OBJ);
    $registros=$base->query("SELECT * FROM administradores")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){
       $nombreadmin=$_POST['nombreadmin'];
       $password=$_POST['password'];
       $correoelectronicoadmin=$_POST['correoelectronicoadmin'];
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
                        <a class="navbar-brand logo_h" href="index.html"><img src="img/Imagen1.png" width="125" height="125" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="loginadmin.php">Regresar a inicio</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminstradores</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="zoneusuarios.php">Ver o agregar</a>

                                        </a></li>
                                    </ul>
                                </li>
                                 <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver solicitudes</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="solicitudes.php">Ver historial</a>

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



        <section class="home_blog_area pad_top">
            <div class="container">

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
      <td class="sin">&nbsp;</td>
     <tr>

     <?php

      foreach($registros as $personas):?>

     <tr>
      <td></td>
      <td><?php echo $personas->nombreadmin ?></td>
      <td><?php echo $personas->password ?></td>
      <td><?php echo $personas->correoelectronicoadmin ?></td>
      <td class="bot"><a href="borrar.php?id=<?php echo $personas->idAdmin?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class="bot"><input type='button' name='up' id='up' value='Actualizar'></a></td>
     </tr>

     <?php
     endforeach;
     ?>

     <tr>
     <td></td>
       <td><input type='text' name='nombreadmin' size='10' class='centrado'></td>
       <td><input type='text' name='password' size='10' class='centrado'></td>
       <td><input type='text' name='correoelectronicoadmin' size='10' class='centrado'></td>
       <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
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
                <li><a href="https://www.facebook.com/brazosfirmes/"><i class="fa fa-facebook" width="180" height="180"></i></a></li>
                <li><a href="https://www.instagram.com/fundacionbrazosfirmes/?hl=es-la"><i class="fa fa-instagram" width="180" height="180"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCj7fOi5HIrTHTy8oqRYArrQ"><i class="fa fa-youtube" width="180" height="180"></i></a></li>
              </ul>
            </aside>
              </div>
            </div>
          </div>
        </footer>



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