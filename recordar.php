<?php
	if(!empty($_POST['usuario'])){
		$link = mysqli_connect('mysql12.000webhost.com', 'a6235987_root', 'salta2266', 'a6235987_gastos');
		$sql = 'SELECT * FROM usuarios WHERE nombre_usuario = "' . $_POST['usuario'] . '";';
		$rs = mysqli_query($link, $sql);
		mysqli_close($link);
		if(mysqli_num_rows($rs) > 0){ // si se encontraron resultados
			// envio el mail
			$resultado = 'Se envió un email a la dirección de email registrada en el sistema.';


			$v = mysqli_fetch_assoc($rs);
			$to = $v['mail'];
			$psw = $v['password'];

			$from = 'gustavo@grsystemas.com.ar';

			$mensaje = '<h1>Solicitud de contraseña.</h1>'
						.'<p><strong>Contraseña: </strong>'. $psw . '</p>';

			$subject = "Recuperación de contraseña";

			$header = 'From: '. $from . ' <' . $from . ">\r\n"
						. 'Reply-To: ' . $from . "\r\n"
						. "Content-Type: text/html; charset=utf-8\r\n";

			mail($to, $subject, $mensaje, $header);



		}else{
			$resultado = 'No se encontró el usuario ' . $_POST['usuario'] . '.';
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Registrarse</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="estilos.css" />
		<link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico"  />
	</head>
	<body>

	<div align="center" id="logo"><img src="images/banner3.png" alt="Proyecto Integrador" /></div>

	<?php include 'encabezado.php'; ?>

		<div id="contenido" align="center">


				<h1>Recordar la contraseña</h1>

				<strong><?php echo $resultado; ?></strong>
				<form name="recordar" method="post" action="">
						<table>
							<tr>
								<td>Ingrese su Usuario:</td>
								<td><input type="text" name="usuario" /></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Recuperar la contraseña" /></td>
							</tr>
						</table>
				</form>


		</div>
	</body>
</html>