$(document).ready(function() {

	//Funcion para Modal de Iniciar Sesión
	$(".login.button").click(function() {
		$('.small.modal').modal({
			blurring: true
		}).modal('show');
	});

	//Modal Error Login
	$('.error.modal').modal({
		blurring: true,
		closable: false
	}).modal('show');

	//Modal Registro completado
	$('.completed.modal').modal({
		blurring: true,
		closable: false
	}).modal('show');

	//Validacion Formulario Inicio de sesión
	$(".session.button").click(function(){
			$('.session.form').form({
				fields:{
					on: 'blur',
					mail:{
						identifier: 'mail',
						rules:[{
								type: 'email',
								prompt: 'Introduce una direccion de correo electrónico valida'
							}]
					},
					pass:{
						identifier: 'pass',
						rules:[{
								type: 'empty',
								prompt: 'Introduce una contraseña'
							}]
					}	
				}
			});
	});

	//Validacion Formulario de Registro
	$(".register.button").click(function(){
		$('.register.form').form({
				fields:{
					on: 'blur',
		    		username:{
		      			identifier : 'username',
		      			rules:[{
		      				type: 'empty',
		      				prompt: 'Introduce tu nombre',
		      				},{
		      				type   : 'maxLength[12]',
        					prompt : 'Introduce un nombre con menos de 12 caracteres'
		      				}]
		      		},
		      		surname:{
		      			identifier : 'surname',
		      			rules:[{
		      				type: 'empty',
		      				prompt: 'Introduce tus apellidos',
		      				},{
		      				type   : 'maxLength[25]',
        					prompt : 'Introduce un apellido con menos de 25 caracteres'
		      				}]
		      		},
		      		mail:{
		      			identifier : 'mail',
		      			rules:[{
		      				type   : 'email',
        					prompt : 'Introduce una direccion de correo electrónico valida'
		      				}]
		      		},
		      		pass:{
		      			identifier : 'pass',
		      			rules:[{
			      			type   : 'empty',
        					prompt : 'Introduce una contraseña',
			      			}]
		      		}
		    	}
			});
	});	
});
