<?php

	require_once 'db.class.php';


	session_start();
	if(!isset($_SESSION['ususesion'])){
		header('Location: registrarse.php');
	}




	$sql = 'SELECT * FROM usuarios';

	$stmt = DB::getStatement($sql);

	$stmt->execute();



	include 'index.view.php';
