<?php

require_once 'db.class.php';

	$fecha_desde = $_POST['fecha_desde'];
	$fecha_hasta = $_POST['fecha_hasta'];


	$sql = "SELECT gastos.fecha_gasto, tipo_gastos.nombre_tipo_gasto, gastos.detalle_gasto,
					gastos.monto_gasto, tipo_pagos.nombre_tipo_pago, gastos.cuota FROM gastos, tipo_gastos, tipo_pagos
					WHERE gastos.fecha_gasto >= '$fecha_desde' AND gastos.fecha_gasto <= '$fecha_hasta' AND gastos.tipo_gasto_id=tipo_gastos.id AND gastos.tipo_pago_id=tipo_pagos.id";


$stmt = DB::getStatement($sql);
$stmt->execute();


?>
