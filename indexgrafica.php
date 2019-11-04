<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Graficas Ejemplo</title>
		
		
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/exporting.js"></script>


		<?php 
			$visitas = array( 'name' => 'Visitas' , 'data' => array(103,474,402,536,1041,270,0,160,2462,3797,3527,4505,8090,7493,7048,11408,10886)) ;
			$unicas = array( 'name' => 'Visitantes Únicos' , 'data' => array(21,278,203,370,810,213,0,134,1991,3122,2870,3655,6400,5818,5581,8529,8261));
			$pagVistas = array( 'name' => 'Páginas Vistas' , 'data' => array(1064,1648,1040,1076,2012,397,0,325,3732,6067,5226,6482,11503,11937,9751,16061,15643)) ;
			
			$entrenamientos = array();
			array_push( $entrenamientos, $visitas);
			array_push( $entrenamientos, $unicas);
			array_push( $entrenamientos, $pagVistas);
			
			// Se hace un array para ponerlo en el eje de las 'X'
			$semanas = array(Feb12,Mar12,Abr12,May12,Jun12,Jul12,Ago12,Sep12,Oct12,Nov12,Dic12,Ene13,Feb13,Mar13,Abr13,May13,Jun13);
		?>
		
		<script type="text/javascript">
		
			var chart;
			$(document).ready(function() {

				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						defaultSeriesType: 'line'
					},
					title: {
						text: 'Datos de las Visitas'
					},
					subtitle: {
						text: 'Jarroba.com'
					},
					xAxis: {
						// Le pasamos los datos que irán en el eje de las 'X' en JSON
						categories: <?php echo json_encode( $semanas) ?>
					},
					yAxis: {
						title: {
							text: 'Nº Visitas'
						}
					},
					tooltip: {
						enabled: true,
						formatter: function() {
							return '<b>'+ this.series.name +'</b><br/>'+
								this.x +': '+ this.y +' '+this.series.name;
						}
					},
					plotOptions: {
						line: {
							dataLabels: {
								enabled: true
							},
							enableMouseTracking: true
						}
					},
					// Le pasamos los datos en JSON
					series: <?php echo json_encode( $entrenamientos) ?>
				});
				
				
			});
				
		</script>

	</head>
	<body>
		
		<div id="container" style="width: 100%; height: 500px; margin: 0 auto"></div>
		
	</body>
</html>
