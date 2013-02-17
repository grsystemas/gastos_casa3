<?php
	include 'validar.php';

	


	if($_SERVER['REQUEST_METHOD'] == 'POST'){


		if(empty($msg)){


			$link = mysqli_connect('127.0.0.1', 'root', '2112', 'gastos_casa3');

			$sql = 'INSERT INTO gastos(fecha_gasto, tipo_gasto_id, detalle_gasto, monto_gasto, tipo_pago_id, cuota)'
				. ' VALUES("'.$fecha_gasto.'", "'.$tipo_gasto_id.'", '
				. '"'.$detalle_gasto.'", '
				. '"'.$monto_gasto.'", '
				. '"'.$tipo_pago_id.'", "'.$cuota.'");';

			$rs = mysqli_query($link, $sql);

			if(mysqli_affected_rows($link) > 0){

				header('Location: gastos.view.php');

				$fecha_gasto = "";
				$tipo_gasto_id = "";
				$detalle_gasto = "";
				$monto_gasto = "";
				$tipo_pago_id = "";
				$cuota = "";


			}
		}else{
			echo 'Se produjo un error al intentar cargar el gasto.';

		}
	}

?>

