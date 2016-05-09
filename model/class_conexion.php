<?php 
	class Conexion {
		
		// Metodo Coger Conexion
		public function getConexion(){

			$user = "root";
			$pass = "";
			$host = "localhost";
			$db = "bd_notes";

			//Creamos el objeto conexion comparandolas con las variables creadas previamente
			$conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);

			//Devolvemos la variable conexion
			return $conexion;
		}
	}
 ?>