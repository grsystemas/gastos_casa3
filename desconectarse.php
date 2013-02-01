<?php
	session_start();

	$desconectado = "";

	if(isset($_SESSION['ususesion'])){
		$desconectado = "?desconectado=1";
	}

	session_start();

	session_unset();

	session_destroy();

	header('Location: registrarse.php' . $desconectado);

?>