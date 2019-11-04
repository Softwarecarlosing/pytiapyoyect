<?php
 $conexion=mysqli_connect("localhost","root","","brazosoficial");
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

        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                                 <li class="nav-item"><a class="nav-link" href="loginadmin.php">Regresar a inicio</a></li>
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



<center>
<h2>Historial general de solicitudes de prótesis</h2>
</center>

<br>
<div class="table-responsive">

<table class="table table-striped">
         <tr>
         <td> Nombre </td>
         <td> Apellido paterno </td>
         <td> Apellido materno </td>
         <td> edad </td>
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
         <td> Estatus</td>
         <td>fecha de registro</td>
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
                                <h3>"Manos que Impulsan"</h3>
                            </div>
                            <p>Se parte de este equipo de Dearrollo Humano!
                                Cada vez mas personas son Beneficiadas!</p>
                            <p>© 2019 La informacion publicada en este sitio es propiedad intelectual de Fundacion Brazos Firmes.</p>
                        </aside>
                    </div>
                    <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>"Tu Puedes Donar!"</h3>
                            </div>
                            <p>
                                Somos una organizacion que realiza sus actividades mediante la gestion de recursos publicos y privados, funcionando tambien con la aportacion de nuestros integrantes!
                                Estamos muy agradecidos con todos nuestros patrocinadores, tu tambien puedes se parte de ellos!
                                Pregunta como en: brazosfirmesac@gmail.com
                            </p>
                        </aside>
                    </div>
                    <div class="col-lg-4">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3>Redes Sociales</h3>
                            </div>
                            <p>Siguenos En Redes Sociales</p>
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