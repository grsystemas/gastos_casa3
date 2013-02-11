<?php
	require_once 'db.class.php';
	session_start();
	if(!isset($_SESSION['ususesion'])){
		header('Location: registrarse.php');
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Ingreso de gastos</title>


	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	<script type="text/javascript" src="tcal.js"></script>
</head>


<body>


<?php include 'encabezado.php'; ?>

<script type="text/javascript">
	function validar() {
		//document.f1.usuario.disabled = false;

		// Si el valor del campo usuario es nulo
		if (document.f1.fecha_gasto.value == '') {

			alert ('La fecha es un dato obligatorio');

			return false;
		}
		if (document.f1.detalle_gasto.value == '') {

			alert ('El detalle del gasto es un dato obligatorio');

			return false;
		}

		if (document.f1.cuota.value == '') {
			// Alerto que es un campoi obligatorio
			alert ('La cantidad de cuotas es un dato obligatorio');

			// Cancelo el envio del formulario
			return false;
		}


		return true; // Envio el formulario
	}
</script>
	<form name="f1" method="POST" action="insert_gasto.php" enctype="multipart/form-data" onsubmit="return validar();">
		<table align="center">

			<tr>
				<td colspan="4"><h2>Ingresar gastos al Sistema</h2></td>
			</tr>


			<tr>
				<td>Fecha del Gasto </td>
				<td><input type="text" name="fecha_gasto" class="tcal" value="" /></td>

			</tr>


			<tr>

				<td rowspan="2">
					<fieldset>
						<legend>Tipo de Gasto</legend>
						<input type="radio" name="tipo_gasto_id" value="1" checked>Fijo<br>
						<input type="radio" name="tipo_gasto_id" value="2">Comida y Limpieza<br>
						<input type="radio" name="tipo_gasto_id" value="3">Variable<br>
						<input type="radio" name="tipo_gasto_id" value="4">Mantenimiento<br>
						<input type="radio" name="tipo_gasto_id" value="5">Mejoras<br>




					</fieldset>
				</td>
				<td>Detalle del Gasto</td>
				<td><input type="text" name="detalle_gasto" size="50" maxlength="290" value=""></td>

			</tr>

			<tr>
				<td>Monto $ </td>
				<td><input type="text" name="monto_gasto" size="10" maxlength="20" value=""></td>
			</tr>

			<tr>
				<td colspan="4"><hr /></td>
			</tr>
			<tr>

				<td rowspan="2">
					<fieldset>
						<legend>Tipo de Pago</legend>
						<input type="radio" name="tipo_pago_id" value="1" checked>Efectivo<br>
						<input type="radio" name="tipo_pago_id" value="2">Tarjeta de débito<br>
						<input type="radio" name="tipo_pago_id" value="3">Tarjeta de crédito<br>


					</fieldset>
				</td>


			</tr>

			<tr>

				<td rowspan="2">
					<fieldset>
						<legend>Tarjeta de débito</legend>
						<input type="radio" name="tarjeta_debito" value="1">Santander<br>
						<input type="radio" name="tarjeta_debito" value="2">HSBC<br>

					</fieldset>
				</td>
			</tr>

			<tr>

				<td rowspan="2">
					<fieldset>
						<legend>Tarjeta de crédito</legend>
						<input type="radio" name="tarjeta_credito" value="1">Santander<br>
						<input type="radio" name="tarjeta_credito" value="2">Galicia<br>



					</fieldset>
				</td>


			</tr>

				<tr>

					<td>Cantidad de cuotas</td>
					<td><input type="text" name="cuota" size="10" maxlength="20" value=""></td>
				</tr>

			<tr>
				<td></td>
				<td> <input type="submit" value="Enviar Datos" name="seleccion"></td>
				<td> <input type="reset" value="Borrar Datos" name="seleccion"></td>
				<td></td>
			</tr>

		</table>
</body>
</html>