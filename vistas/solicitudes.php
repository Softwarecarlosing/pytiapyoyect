<?php
 $conexion=mysqli_connect("localhost","root","","brazos");
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

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminstradores</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Ver o agregar</a>

                                        </a></li>
                                    </ul>
                                </li>
                                 <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ver solicitudes</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Ver historial</a>

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



<center>
<h2>Solicitudes de protesis</h2>
</center>

<br>
    <center>
    <table border="1">
         <tr>
         <td> Nombre </td>
         <td> Apellido paterno </td>
         <td> Apellido materno </td>
         <td> edad </td>
         </tr>


         <?php
         $sql="SELECT * from registropostulantess";
         $result=mysqli_query($conexion,$sql);

         while($mostrar=mysqli_fetch_array($result)){
          ?>



         <tr>
         <td> <?php echo $mostrar[1] ?>  </td>
         <td> <?php echo $mostrar[2] ?> </td>
         <td> <?php echo $mostrar[3] ?> </td>
         <td> <?php echo $mostrar[4] ?> </td>


         </tr>
         <?php

         }
         ?>
     </table>
     </center>

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