<?php  
	session_start();

		if(session_destroy()){
			header('location:../index.php'); // Lo devolvemos a la pagina index
		}
?>