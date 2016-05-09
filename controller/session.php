<?php 

	require_once('../model/class_conexion.php');
	require_once('../model/class_sesion.php');

	// Pasamos las variables por metodo POST

	$mail = $_POST['mail'];
	$password = $_POST['pass'];

	$consulta = new Session();
	$consulta->nuevaSesion($mail, $password);

 ?>