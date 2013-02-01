<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){


		if(!empty($_POST['otrousuario'])){
			// borrar todo
			setcookie('usuarioactual', '', 1);
			setcookie('passwordactual', '', 1);
			header('Location: index.php');
		}else{



			$link = mysqli_connect('mysql12.000webhost.com', 'a6235987_root', 'salta2266', 'a6235987_gastos');
			$sql = 'SELECT nombre_usuario FROM usuarios '
						. 'WHERE nombre_usuario = "'. $_POST['usuario']
						. '" AND password = "'. $_POST['password'].'";';
			$rs = mysqli_query($link, $sql);
			if(mysqli_num_rows($rs) > 0){
				switch($_POST['recordar']){
					case 'recordarusuario':
						// hay que recordar el usuario
						setcookie('usuarioactual', $_POST['usuario'], time() + 60 * 60 * 24 * 30);
						setcookie('passwordactual', '', 1);
						break;
					case 'recordarambos':
						// hay que recordar el usuario y el password
						setcookie('usuarioactual', $_POST['usuario'], time() + 60 * 60 * 24 * 30);
						setcookie('passwordactual', $_POST['password'], time() + 60 * 60 * 24 * 30);
						break;
					case 'norecordar':
						// hay que borrar el usuario y password
						setcookie('usuarioactual', '', 1);
						setcookie('passwordactual', '', 1);


				}
				session_start();
				$_SESSION['ususesion'] = $_POST['usuario'];
				header('Location: index.php');
			}else{
				$error = "Por favor, verifique los datos ingresados";
			}
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


				<h1>Registrarse</h1>
				<?php
					if(!empty($_GET['desconectado'])){
						?>
						<span style="color:red;">Se desconectó con éxito del sistema.</span>
						<?php
					}
				?>
				<span style="color:red;"><?php echo $error; ?></span>
				<form name="form_login" method="post" action="">
						<table>
							<tr>
								<td>Usuario:</td>
								<td><input type="text" name="usuario" value="<?php if(isset($_COOKIE['usuarioactual'])){ echo $_COOKIE['usuarioactual']; } ?>" /></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" value="<?php if(isset($_COOKIE['passwordactual'])){ echo $_COOKIE['passwordactual'];} ?>" /></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="radio" name="recordar" value="recordarusuario" <?php if(!empty($_COOKIE['usuarioactual']) ){ echo 'checked="checked"'; } ?> />Recordar usuario.<br />
									<input type="radio" name="recordar" value="recordarambos" />Recordar usuario y password.<br />
									<input type="radio" name="recordar" value="norecordar" />No recordar nada.<br />
								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Enviar" /></td>
							</tr>
							<!--<tr>
								<td></td>
								<td><input type="checkbox" name="otrousuario" value="1" />Iniciar sesión como otro usuario.</td>
							</tr>-->
							<tr>
								<td></td>
								<td><hr /><a href="recordar.php">Olvidé mi contraseña.</a></td>
							</tr>
						</table>
				</form>


		</div>
	</body>
</html>