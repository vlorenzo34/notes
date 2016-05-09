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
			<a id="header" href="index.php" class="header item">
			    Notes
			 </a>
		  	<!-- Boton para iniciar sesion -->
			<div class="right menu">
		    	<div class="item">
			    	<div id="button" class="ui login button">Iniciar sesión</div>
			    </div>
		  	</div>
		</nav>
	</header>
	<!-- Seccion Slider -->
    <section class="ui text center aligned padded slider grid">
    	<div "twelve wide column">
    		<h1 class="ui header">
        		Imagina una web...
    		</h1>
	    	<h2 class="ui header">
	    		Donde compartir tus conocimientos.
	    	</h2>
	    	<div class="ui huge primary button">
	    		Empezar
	    		<i class="right arrow icon"></i>
	    	</div>
    	</div>
    </section>
	<!-- Explicacion web y Formulario Registro -->
	<section id="content" class="ui stackable two column middle centered grid">
		<div class="row">
		<!-- Resumen web -->
		<div class="seven wide content column">
			<h3 class="ui header">¡Notes funciona a tu manera!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, provident.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, odio!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta saepe dolore excepturi et nam dignissimos?</p>
		</div>
		<!-- Formulario de registro -->
		<div class="five wide content column">
	    	<form  method="POST" action="controller/register.php" class="ui register form">
				<div class="two fields">
			    	<div class="field">
			    		<label>Nombre</label>
			    		<div class="ui left icon input">
			    			<input type="text" name="username" placeholder="Nombre">
			    			<i class="user icon"></i>
			    		</div>
			      	</div>
			      	<div class="field">
			      		<label>Apellidos</label>
			      		<div class="ui left icon input">
			        		<input type="text" name="surname" placeholder="Apellido/s">
			        		<i class="user icon"></i>
			        	</div>
			      	</div>
			    </div>
	    		<!-- Correo electronico -->
			 	<div class="field">
			        <label>Correo electrónico</label>
			        <div class="ui left icon input">
			        	<input type="text" name="mail" placeholder="Email">
			        	<i class="mail icon"></i>
			        </div>
		        </div>
		        <!-- Contraseña -->
			  	<div class="field">
			        <label>Contraseña</label>
			        <div class="ui left icon input">
			        	<input type="password" name="pass" placeholder="Password">
			        	<i class="lock icon"></i>
			        </div>
		        </div>
		        <!-- Mensaje de ERROR validacion REGISTRO JQUERY -->
				
				<div class="ui error message">
			        	
			    </div>
		        
		        <!-- Crear cuenta -->
			 	<button  id="button" class="large ui right floated register button" type="submit">Crear una cuenta</button>
			</form>
		</div>
  	</section>
	<!-- Pie de la pagina -->
  	<footer section id="content" class="ui inverted vertical footer segment">
	    <div class="ui container">
	        <div class="ui two column centered padded grid">
	          <p>© Copyright 2016 notes. Todos los derechos reservados.</p>
	        </div>
	  	</div>
  	</footer>
  	<!-- Ventana Modal Iniciar Sesion -->
  	<section class="ui small modal">
		<div class="ui header">
			Iniciar Sesión
		</div>
		<div class="ui equal width center aligned padded grid">
			<div class="column">
				<!-- Formulario de inicio de sesión -->
				<form class="ui session form" method="POST" action="controller/session.php">
					<!-- Campo Email Iniciar sesión -->
					<div class="field">	    
						<div class="ui left icon input">
				        	<input type="text" name="mail" placeholder="Email">
				        	<i class="mail icon"></i>
			        	</div>
					</div>
					<!-- Campo Password Iniciar sesión -->
					<div class="field">
				    	<div class="ui left icon input">
				        	<input type="password" name="pass" placeholder="Password">
				        	<i class="lock icon"></i>
			        	</div>
				  	</div>
				  	<!-- Mensaje de ERROR validacion INICIAR SESION JQUERY -->

					<div class="ui error message">
			        	
			    	</div>

				  	<!-- Iniciar sesion -->
				 	<button id="button" class="large ui left floated session button" type="submit">Iniciar sesión</button>
				</form>
			</div>
		</div>
  	</section>
</body>
</html>