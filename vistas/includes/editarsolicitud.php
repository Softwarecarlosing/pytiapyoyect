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
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imgadmin/Imagen1.png" type="image/png">
    <title>Contacto</title>
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

                                         <li class="nav-item"><a class="nav-link" href="graficapade.php">Grafica padecimiento</a>
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

<center><h2></h2><center>
<div class="card">
    <div class="card-body" style="background-color:#EEEEEE ;">
        <form method="POST" action="insertar_registroadmin.php">
            <h4>Paciente</h4><br>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label>Correo electrónico</label>
                    <input type="email" name="correoelectronico" class="form-control"  placeholder="Correo Electronico">
                </div>

                <div class="form-group col-md-4">

                    <label>Nombre del niño</label>
                    <input type="text" name="nombrepaciente" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group col-md-3">
                    <label>Apellido Paterno</label>
                    <input type="text" name="apellidopaterno" class="form-control"  placeholder="Apellido Paterno">
                </div>

                <div class="form-group col-md-3">
                    <label>Apellido Materno</label>
                    <input type="text" name="apellidomaterno" class="form-control"  placeholder="Apellido Materno">
                </div>

                <div class="form-group col-md-3">
                    <label>Genero</label>
                    <input type="text" name="genero" class="form-control"  placeholder="genero">
                </div>

                 <div class="form-group col-md-3">
                    <label>Causa del problema</label>
                    <select class="form-control" name="causa">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="Oligodactilia">Oligodactilia</option>
                        <option value="Agenecia">Agenecia</option>
                        <option value="Mano de pinza">Mano de pinza</option>
                        <option value="Amputación">Amputación</option>
                    </select>

                <div class="">

                 </div>


                <div class="form-group col-md-3">
                    <label>Edad</label>
                    <select class="form-control" name="edadnino">
                        <option value="" disabled selected>Seleccione una opción</option>
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
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>

                    </select>

                </div>

    </div>


</div> <br>
<div class="card">
    <div class="card-body" style="background-color:#EEEEEE ;">

            <h4>Datos del tutor</h4><br>
            <div class="form-row">

                <div class="form-group col-md-4">

                    <label>Nombre</label>
                    <input type="text" name="nombretutor" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                    <label>Apellido Paterno</label>
                    <input type="text" name="apellidopaternotutor" class="form-control"  placeholder="Apellido Paterno">
                </div>

                <div class="form-group col-md-4">
                    <label>Apellido Materno</label>
                    <input type="text" name="apellidomaternotutor" class="form-control"  placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-4">
                    <label>Parentesco</label>
                    <input type="text" name="parentesco" class="form-control" placeholder="Parentesco">
                </div>
                <div class="form-group col-md-4">
                    <label>Telefono</label>
                    <input type="number" name="telefono" class="form-control"  placeholder="Telefono">
                </div>
            </div>
</div> <br>
        <div class="card">
    <div class="card-body" style="background-color:#EEEEEE ;">

            <h4>Dirección y datos económicos</h4><br>
            <div class="form-row">

                <div class="form-group col-md-4">

                    <label>Estado</label>
                    <input type="text" name="estado" class="form-control"  placeholder="Estado">
                </div>
                <div class="form-group col-md-4">
                    <label>Municipio</label>
                    <input type="text" name="municipio" class="form-control"  placeholder="Municipio">
                </div>

                <div class="form-group col-md-4">
                    <label>Colonia</label>
                    <input type="text" name="colonia" class="form-control"  placeholder="Colonia">
                </div>
                <div class="form-group col-md-4">
                    <label>Calle</label>
                    <input type="text" name="calle" class="form-control" placeholder="Calle">
                </div>
                <div class="form-group col-md-4">
                    <label>No exterior</label>
                    <input type="number" name="noexterior" class="form-control" placeholder="No exterior">
                </div>
                 <div class="form-group col-md-4">
                    <label>Codigo postal</label>
                    <input type="number" name="codigopostal" class="form-control" placeholder="Codigo postal">
                </div>
                <div class="form-group col-md-4">
                    <label>Estado economico</label>
                    <input type="text" name="condicion" class="form-control"  placeholder="Condicion">
                </div>
                <div class="form-group col-md-4">
                    <label>Ingreso mensual del tutor</label>
                    <input type="number" name="ingresomensual" class="form-control"  placeholder="Ingreso mensual">
                </div>

                </div>

                </div> <br>
                <div class="card">
                <div class="card-body" style="background-color:#EEEEEE ;">

                <h4>Medidas de mano sana</h4><br>
                <div class="form-row">

                <div class="form-group col-md-4">
                    <label>Dedo menique</label>
                    <input type="number" step="any" name="dedomenique" class="form-control"  placeholder="Dedo menique">
                </div>
                <div class="form-group col-md-4">
                    <label>Dedo anular</label>
                    <input type="number" step="any" name="dedoanular" class="form-control"  placeholder="Dedo anular">
                </div>

                <div class="form-group col-md-4">
                    <label>Dedo medio</label>
                    <input type="number" step="any" name="dedomedio" class="form-control"  placeholder="Dedo medio">
                </div>
                <div class="form-group col-md-4">
                    <label>Dedo pulgar</label>
                    <input type="number" step="any" name="dedopulgar" class="form-control"  placeholder="Dedo pulgar">
                </div>


                 <div class="form-group col-md-4">
                    <label>Largo dorso</label>
                    <input type="number" step="any" name="largodorso" class="form-control"  placeholder="Largo dorso">
                </div>


                </div>
                </div> <br>
                <div class="card">
                <div class="card-body" style="background-color:#EEEEEE ;">

                <h4>Medidas de mano afectada</h4><br>
                <div class="form-row">

                <div class="form-group col-md-4">
                    <label>Ancho muñon</label>
                    <input type="number" step="any" name="anchomunon" class="form-control"  placeholder="Ancho munon">
                </div>

                <div class="form-group col-md-4">
                    <label>Largo Muñon</label>
                    <input type="number" step="any" name="largomunon" class="form-control"  placeholder="Largo muñon">
                </div>

                <div class="form-group col-md-4">
                    <label>Ancho Muñeca</label>
                    <input type="number" step="any" name="anchomuneca" class="form-control"  placeholder="Ancho muñeca">
                </div>

                <div class="form-group col-md-4">
                    <label>Super heroe favorito del niño</label>
                    <input type="text" name="superheroe" class="form-control"  placeholder="super heroe">
                </div>

              </div>

            </div>
        </div>
    </div>
             <!--<<div class="form-group">

            </div>
           label for="condiciones">Acepta las <a href="pagina_condiciones.html">condiciones</a> </label><input type="checkbox" name="condiciones" /> -->


            <button type="submit" name="register" class="btn btn-primary btn-block">Registrar información</button>
        </form>

    </div>
</div><br>













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