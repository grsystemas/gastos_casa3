<?php
	require_once 'db.class.php';
	session_start();
	if(!isset($_SESSION['ususesion'])){
		header('Location: registrarse.php');
	}
	//require_once 'gasto.class.php';
	$sql = 'SELECT gastos.fecha_gasto, tipo_gastos.nombre_tipo_gasto, gastos.detalle_gasto,
gastos.monto_gasto, tipo_pagos.nombre_tipo_pago, gastos.cuota FROM gastos, tipo_gastos, tipo_pagos
WHERE gastos.tipo_gasto_id=tipo_gastos.id AND gastos.tipo_pago_id=tipo_pagos.id';


	$stmt = DB::getStatement($sql);

	$stmt->execute();

	?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Registrarse</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="estilos.css" />

</head>

<body>

<?php include 'encabezado.php'; ?>


<h2 align="center">Listado de Gastos</h2>
<table align="center" border="1" width="57%" cellspacing="0">
	<tr>
		<th>Fecha de gasto</th>
		<th>Tipo de gasto</th>
		<th>Descripción del gasto</th>
		<th>$</th>
		<th>Tipo de pago</th>
		<th>Cantidad de cuotas</th>

	</tr>

	<?php
	while($p = $stmt->fetchObject()){
		?>

	<tr>
			<td><?php echo $p->fecha_gasto; ?></td>
			<td><?php echo $p->nombre_tipo_gasto; ?></td>
			<td><?php echo $p->detalle_gasto; ?></td>
			<td><?php echo $p->monto_gasto; ?></td>
			<td><?php echo $p->nombre_tipo_pago; ?></td>
			<td><?php echo $p->cuota; ?></td>

		</tr>
		<?php
	}
	?>

</table>
</body>