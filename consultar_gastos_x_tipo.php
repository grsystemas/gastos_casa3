<?php

	session_start();
	if(!isset($_SESSION['ususesion'])){
		header('Location: registrarse.php');
	}

	require_once 'db.class.php';

	$tipo_gasto = $_POST['tipo_gasto'];



	$sql = "SELECT gastos.fecha_gasto, tipo_gastos.nombre_tipo_gasto, gastos.detalle_gasto,
					gastos.monto_gasto, tipo_pagos.nombre_tipo_pago, gastos.cuota FROM gastos, tipo_gastos, tipo_pagos
					WHERE gastos.tipo_gasto_id='$tipo_gasto' AND gastos.tipo_gasto_id=tipo_gastos.id AND gastos.tipo_pago_id=tipo_pagos.id";


	$stmt = DB::getStatement($sql);
	$stmt->execute();



?>
