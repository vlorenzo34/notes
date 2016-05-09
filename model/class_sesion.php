<?php

session_start();

class Session {

	//Esta función será la encargada de comprobar si existe el usuario en la base de datos
	public function nuevaSesion($str_mail, $str_pass){

		//Creamos conexion (no la coge de la clase conexion (Revisar))
		$conexion = mysqli_connect("localhost", "root", "", "bd_notes");
		
		//Consulta para seleccionar el usuario 
	    $sql = "SELECT * FROM tbl_users WHERE email = '".$str_mail."' AND password = '".$str_pass."'";

		//Ejecutamos la consulta y guardamos el resultado en la variable resultado
		$result = mysqli_query($conexion, $sql);

		if($array = mysqli_fetch_array($result)){
			
			$_SESSION['session_user'] = $array['username'];
			$_SESSION['session_surname'] = $array['surname'];
			$_SESSION['session_mail'] = $array['email'];
			$_SESSION['session_photo'] = $array['photo'];

			header("Location: ../main.php");
		}else{
			header("Location: ../login_error.html");
		}
			
	}
}

?>