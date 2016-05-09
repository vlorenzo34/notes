<?php 
	
	class Register {

		//Atributos 
		private $str_name;
		private $str_surname;
		private $str_mail;
		private $str_pass;

		//Metodo Registro del Usuario
		public function registroUsuario($str_name, $str_surname, $str_mail, $str_pass){

			//Crear nuevo objeto de la clase conexion
			$modelo = new Conexion();
			$conexion = $modelo->getConexion();

			$sql = "INSERT INTO tbl_users (username, surname, email, photo, password, user_level) VALUES (:name, :surname, :mail,'default.jpg', :pass, 1)";

			$statement = $conexion->prepare($sql);
			$statement->bindParam(':name', $str_name);
			$statement->bindParam(':surname', $str_surname);
			$statement->bindParam(':mail', $str_mail);
			$statement->bindParam(':pass', $str_pass);

			

			if (!$statement){
				echo "Error";
			}else{
				$statement->execute();
				header("Location: ../register_success.html");
			}
		}
	}

 ?>