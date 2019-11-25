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
#container, #sliders {
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}
#container {
    height: 400px;
}
		</style>
	</head>
	<body>
<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/cylinder.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'cylinder',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Highcharts Cylinder Chart'
    },
    plotOptions: {
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    series: [{
        data: [
                                     <?php
                                     $sql = "select estado , count(*) as solicitudes from detalleinfotutor group by estado order by solicitudes";
                                     $result = mysqli_query($conexion,$sql);
                                     while($registros = mysqli_fetch_array($result))
                                    {
                                    ?>
                                    '<?php echo $registros["estado"] ?>',
                                   <?php
                                    }
                                   ?>],
        name: 'Cylinders',
        showInLegend: false
    }]
});
		</script>
	</body>
</html>
