<?php

	require_once('../model/class_conexion.php');
	require_once('../model/class_registro.php');

	//Pasamos las variables por metodo POST
	$username = $_POST['username'];
	$surname = $_POST['surname'];
	$mail = $_POST['mail'];
	$password = $_POST['pass'];

	$consulta = new Register();
	$consulta->registroUsuario($username,$surname,$mail,$password);
?>