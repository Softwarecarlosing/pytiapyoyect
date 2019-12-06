<?php


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

        <script language="JavaScript">

        javascript:window.history.forward(1);


        </script>





        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="imgadmin/Imagen1.png"  type="image/png">
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
                                        <li class="nav-item"><a class="nav-link" href="controlsolicitudes.php">Grafica de municipio</a>
                                        </a></li>

                                        <li class="nav-item"><a class="nav-link" href="controlsolicitudes.php">Grafica de edad</a>
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


        <div id="container" style="height: 400px"></div>


    <script type="text/javascript">
    Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Padecimientos de los postulantes'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
               <?php
                 $sql = "select causa , count(*) as pade from postulantes group by causa order by pade";
                 $result = mysqli_query($conexion,$sql);
                while($registros = mysqli_fetch_array($result))
                {
                ?>
                ['<?php echo $registros["causa"]; ?>',<?php echo $registros["pade"] ?>],
                <?php
                }
                ?>
        ]
    }]
});

  </script>


 <script type="text/javascript">
            var chart;
            $(document).ready(function() {

                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'graficaLineal',  // Le doy el nombre a la gráfica
                        defaultSeriesType: 'line'   // Pongo que tipo de gráfica es
                    },
                    title: {
                        text: 'Solicitudes por Estado ' // Titulo (Opcional)
                    },
                    subtitle: {
                        text: 'Brazos Firmes'               // Subtitulo (Opcional)
                    },
                    // Pongo los datos en el eje de las 'X'
                    xAxis: {
                        categories: [

                                     <?php
                                     $sql = "select estado , count(*) as solicitudes from detalleinfotutor group by estado order by solicitudes";
                                     $result = mysqli_query($conexion,$sql);
                                     while($registros = mysqli_fetch_array($result))
                                    {
                                    ?>
                                    '<?php echo $registros["estado"] ?>',
                                   <?php
                                    }
                                   ?>


                         ],
                        // Pongo el título para el eje de las 'X'
                        title: {
                            text: 'Meses'
                        }
                    },
                    yAxis: {
                        // Pongo el título para el eje de las 'Y'
                        title: {
                            text: 'Nº Visitas'
                        }
                    },
                    // Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfica
                    tooltip: {
                        enabled: true,
                        formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                                this.x +': '+ this.y +' '+this.series.name;
                        }
                    },
                    // Doy opciones a la gráfica
                    plotOptions: {
                        line: {
                            dataLabels: {
                                enabled: true
                            },
                            enableMouseTracking: true
                        }
                    },
                    // Doy los datos de la gráfica para dibujarlas
                    series: [{
                                name: 'Solicitudes',
                                data: [
                                      <?php
                                     $sql = "select estado , count(*) as solicitudes from detalleinfotutor group by estado order by solicitudes";
                                     $result = mysqli_query($conexion,$sql);
                                     while($registros = mysqli_fetch_array($result))
                                    {
                                    ?>
                                     <?php echo $registros["solicitudes"] ?>,
                                   <?php
                                    }
                                   ?>


                                ]

                            }],
                });


            });

        </script>













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












