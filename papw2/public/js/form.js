var inputs = document.getElementsByClassName('formulario__input');

for (var i = 0; i < inputs.length; i++) 
{
	inputs[i].addEventListener('keyup', function(){
		if (this.value.length>=1) {
			this.nextElementSibling.classList.add('fijar');
		}
		else
		{
			this.nextElementSibling.classList.remove('fijar');
		}
	});
}

function mostrar(){
	var pass = document.getElementById('pass');

	pass.type = "text";
}

function ocultar(){
	var pass = document.getElementById('pass');

	pass.type = "password";
}

$(document).ready(function(){

	//Validaciones Formulario

	$( "#Nombre" ).blur(function() {
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

	if(nom.val() != "")
	{
		nom.removeClass('input_vacio');
		nom.addClass('input_lleno');
	}
	else
	{
		nom.removeClass('input_lleno');
		nom.addClass('input_vacio');
	}

	if(nom.val()!="" && ape.val()!="" && email.val()!="" && contra.val()!="")
	{
		$('#Registro_Completo').removeClass('disabled');
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});


	$( "#Apellido" ).blur(function() {
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

	if(ape.val() != "")
	{
		ape.removeClass('input_vacio');
		ape.addClass('input_lleno');
	}
	else
	{
		ape.removeClass('input_lleno');
		ape.addClass('input_vacio');
	}

	if(nom.val()!="" && ape.val()!="" && email.val()!="" && contra.val()!="")
	{
		$('#Registro_Completo').removeClass('disabled');
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});

	$( "#Correo" ).blur(function() {
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

	if(email.val() != "")
	{
		email.removeClass('input_vacio');
		email.addClass('input_lleno');
	}
	else
	{
		email.removeClass('input_lleno');
		email.addClass('input_vacio');
	}

	if(nom.val()!="" && ape.val()!="" && email.val()!="" && contra.val()!="")
	{
		$('#Registro_Completo').removeClass('disabled');
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});


	$( "#pass" ).blur(function() {
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

	if(contra.val() != "")
	{
		contra.removeClass('input_vacio');
		contra.addClass('input_lleno');
	}
	else
	{
		contra.removeClass('input_lleno');
		contra.addClass('input_vacio');
	}

	if(nom.val()!="" && ape.val()!="" && email.val()!="" && contra.val()!="")
	{
		$('#Registro_Completo').removeClass('disabled');
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});

	//Validaciones Fin

	// Enter en cualquier input, agarre el boton

	$('#form_Login > .form-group >.form-control').keypress(function (e) {
  		if (e.which == 13) 
  		{
    		$('.ingresar').click();
    		return false;    
  		}
	});

	$( ".ingresar" ).click(function() {
  		alert( "Bienvenido." );
	});

	// Focus de los Modales

	$('#mimodal').on('shown.bs.modal',function(){
  		$('#Nombre').focus();
	});

	$('#mimodal2').on('shown.bs.modal',function(){
  	$('#Correo_ingresar').focus();
	});

	// Eventos Despues de Cerrar El Modal

	$('#mimodal').on('hide.bs.modal',function(){
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

			nom.removeClass("input_vacio");
			nom.removeClass("input_lleno");
			nom.val("");
			ape.removeClass("input_vacio");
			ape.removeClass("input_lleno");
			ape.val("");
			email.removeClass("input_vacio");
			email.removeClass("input_lleno");
			email.val("");
			contra.removeClass("input_vacio");
			contra.removeClass("input_lleno");
			contra.val("");
		});

	// Boton Subir

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() == $(document).height()){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

	
}); 