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
