<?php
 $conexion=mysqli_connect("localhost","root","","brazosultimate");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>

<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Contents of Highsoft\'s weekly fruit delivery'
    },
    subtitle: {
        text: '3D donut in Highcharts'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Delivered amount',
        data: [
                 <?php
                 $sql = "select estado , count(*) as solicitudes from detalleinfotutor group by estado order by solicitudes";
                 $result = mysqli_query($conexion,$sql);
                while($registros = mysqli_fetch_array($result))
                {
                ?>
                ['<?php echo $registros["estado"]; ?>',<?php echo $registros["solicitudes"] ?>],
                <?php
                }
                ?>
        ]
    }]
});
		</script>
	</body>
</html>
