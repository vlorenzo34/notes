<?php 

	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Notes</title>
	
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

	<!-- Framework Semantic UI -->
	<link rel="stylesheet" href="dist/semantic.min.css">
	<script type="text/javascript" src="dist/semantic.min.js"></script>

	<!-- Scripts -->
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<header>
		<!-- Menu pagina principal -->
		<nav class="ui stackable menu">
		<!-- Header pagina principal nombre del proyecto -->
			<a id="header" href="main.php" class="header item">
			    Notes
			</a>
		  	<!-- Boton para iniciar sesion -->
			<div class="right menu">
				<!-- Sesión del usuario -->
				<div class="ui item">
					<?php echo $_SESSION['session_user']." ".$_SESSION['session_surname']; ?>
				</div>
				<!-- IMAGEN estara recogida por la base de datos -->
				<div class="ui item">
					<img class="ui mini image" src="img/<?php echo $_SESSION['session_photo']  ?>">
				</div>
				<!-- LOGOUT -->
		    	<a  href="controller/logout.php" class="ui item">
		      		Logout
		    	</a>
		  	</div>
		</nav>
	</header>
	<!-- Filtros para apuntes -->
	<section>
		<div class="ui padded centered grid">
			<div class="twelve wide column">
		  		<div class="ui pointing stackable menu">
					<a class="active item">ESO</a>
					<a class="item">Bachillerato</a>
					<a class="item">Formación Profesional</a>
					<a class="item">Formación Profesional</a>
					<div class="right menu">
				    	<div class="item">
				      		<div class="ui transparent icon input">
				        		<input type="text" placeholder="Busqueda de archivos">
				        		<i class="search link icon"></i>
				      		</div>
				    	</div>
				  	</div>
				</div>
				<div class="ui segment">
				  <p></p>
				</div>
		  	</div>
		</div>
	</section>
</body>
</html>