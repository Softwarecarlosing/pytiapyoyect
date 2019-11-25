<?php
 $conexion=mysqli_connect("localhost","root","","brazosultimate");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Graficas Ejemplo</title>

		<!-- Importa las librerias de jQuery y las de Highcharts -->
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/exporting.js"></script>

		<!-- Creo la gráfica -->
		<script type="text/javascript">
			var chart;
			$(document).ready(function() {

				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
						defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
					},
					title: {
						text: 'Solicitudes por Estado '	// Titulo (Opcional)
					},
					subtitle: {
						text: 'Brazos Firmes'				// Subtitulo (Opcional)
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

	</head>
	<body>
		<!-- "Llamo" a la gráfica y la pinto en el cuerpo de la página -->
		<div id="graficaLineal" style="width: 100%; height: 500px; margin: 0 auto"></div>
	</body>
</html>

