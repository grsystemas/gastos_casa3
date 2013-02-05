
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Ingreso de gastos</title>

	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script>
</head>
<body>

	<!-- add class="tcal" to your input field -->
	<!--<div><input type="text" name="date" class="tcal" value="" /></div>
</form>
</body>
</html>-->

	<form name="f1" method="POST" action="insert_gastos.php" enctype="multipart/form-data" onsubmit="return validar();">
		<table align="center">

			<tr>
				<td colspan="4"><h2>Ingresar gastos al Sistema</h2></td>
			</tr>


			<tr>
				<td>Fecha del Gasto </td>
				<td><input type="text" name="fecha_gasto" class="tcal" value="hacer clic aquí" /></td>

			</tr>


			<tr>

				<td rowspan="2">
					<fieldset>
						<legend>Tipo de Gasto</legend>
						<input type="radio" name="tipo_gasto_id" value="1" <?php if($tipo == "fijo"){echo 'checked="checked"';} ?>>Fijo<br>
						<input type="radio" name="tipo_gasto_id" value="2" <?php if($tipo == "comlim"){echo 'checked="checked"';} ?>>Comida y Limpieza<br>
						<input type="radio" name="tipo_gasto_id" value="3" <?php if($tipo == "variable"){echo 'checked="checked"';} ?>>Variable<br>
						<input type="radio" name="tipo_gasto_id" value="4" <?php if($tipo == "mantenimiento"){echo 'checked="checked"';} ?>>Mantenimiento<br>
						<input type="radio" name="tipo_gasto_id" value="5" <?php if($tipo == "mejoras"){echo 'checked="checked"';} ?>>Mejoras<br>




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
						<input type="radio" name="tipo_pago_id" value="1" <?php if($tipo == "efectivo"){echo 'checked="checked"';} ?>>Efectivo<br>
						<input type="radio" name="tipo_pago_id" value="2" <?php if($tipo == "tarjeta"){echo 'checked="checked"';} ?>>Tarjeta de débito<br>
						<input type="radio" name="tipo_pago_id" value="3" <?php if($tipo == "cuotastarjeta"){echo 'checked="checked"';} ?>>Tarjeta de crédito<br>


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
