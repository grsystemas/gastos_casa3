<?php

	session_start();
	if(!isset($_SESSION['ususesion'])){
		header('Location: registrarse.php');
	}

	require_once 'db.class.php';
	require_once 'consultar_gastos_x_tipo.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Consulta por tipo</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	<script type="text/javascript" src="tcal.js"></script>

</head>

<body>

<?php include 'encabezado.php'; ?>

<form name="f1" method="POST" action="" enctype="multipart/form-data">
	<h2 align="center">Consultar por tipo de gasto</h2>
	<table align="center" border="1" width="57%" cellspacing="0">

		<tr>
			<td><label>Seleccionar  <select name="tipo_gasto">
				<option value="1">Gastos Fijos</option>
				<option value="2">Gastos Variables</option>
				<option value="3">Comida y Limpieza</option>
				<option value="4">Mantenimiento</option>
				<option value="5">Mejoras</option>
			</select></label></td>
			<td><input type="submit" value="Consultar" name="seleccion"></td>
		</tr>

		<tr>
			<th>Fecha de gasto</th>
			<th>Tipo de gasto</th>
			<th>Descripción del gasto</th>
			<th>$</th>
			<th>Tipo de pago</th>
			<th>Cantidad de cuotas</th>

		</tr>

		<?php
		while($g = $stmt->fetchObject()){
			?>

			<tr>
				<td><?php echo $g->fecha_gasto; ?></td>
				<td><?php echo $g->nombre_tipo_gasto; ?></td>
				<td><?php echo $g->detalle_gasto; ?></td>
				<td><?php echo $g->monto_gasto; ?></td>
				<td><?php echo $g->nombre_tipo_pago; ?></td>
				<td><?php echo $g->cuota; ?></td>

			</tr>
			<?php
		}
		?>

	</table>

