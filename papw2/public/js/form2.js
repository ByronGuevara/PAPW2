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
			var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
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
		    if (regex.test($('#Correo').val().trim())) 
		    {
		    	$('#Registro_Completo').removeClass('disabled');
		    }
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});


	$( "#Correo" ).blur(function() {
			var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
			var nom = $("#Nombre");
			var ape = $("#Apellido");
			var email = $("#Correo");
			var contra = $("#pass");

	if(email.val() != "")
	{
			if (regex.test($('#Correo').val().trim())) 
		    {
		    			$(".spann").remove();

				email.removeClass('input_vacio');
				email.addClass('input_lleno');		  
			}
			else
			{
				email.removeClass('input_lleno');
				email.addClass('input_vacio');

				$(".spann").remove();
				$("<p class='spann'> Formato de correo no valido </p>").insertAfter("#Correo");
			}

	}
	else
	{
		email.removeClass('input_lleno');
		email.addClass('input_vacio');
		$(".spann").remove();
	}

	if(nom.val()!="" && ape.val()!="" && email.val()!="" && contra.val()!="")
	{
		    if (regex.test($('#Correo').val().trim())) 
		    {
		    	$('#Registro_Completo').removeClass('disabled');
		    }
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});



	$( "#pass" ).blur(function() {
			var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
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
		    if (regex.test($('#Correo').val().trim())) 
		    {
		    	$('#Registro_Completo').removeClass('disabled');
		    }
	}
	else
	{
		$('#Registro_Completo').addClass('disabled');
	}

	});


	// Habilitar el boton, mientras escribes

	$("#Nombre").on('keyup', function(){
        var cantidad = $(this).val().length;

        if(cantidad > 0 && $("#Correo").hasClass('input_lleno') && $("#pass").hasClass('input_lleno'))
        {
			$('#Registro_Completo').removeClass('disabled');
        }
        else
        {
			$('#Registro_Completo').addClass('disabled');
        }
    });

    $("#Correo").on('keyup', function(){
        var cantidad = $(this).val().length;
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if(regex.test($('#Correo').val().trim()))
        {
			$(".spann").remove();
        }

        if(cantidad > 0 && $("#Nombre").hasClass('input_lleno') && $("#pass").hasClass('input_lleno') && regex.test($('#Correo').val().trim()))
        {
			$('#Registro_Completo').removeClass('disabled');
        }
        else
        {
			$('#Registro_Completo').addClass('disabled');
        }
    });


	$("#pass").on('keyup', function(){
        var cantidad = $(this).val().length;

        if(cantidad > 0 && $("#Correo").hasClass('input_lleno') && $("#Nombre").hasClass('input_lleno'))
        {
			$('#Registro_Completo').removeClass('disabled');
        }
        else
        {
			$('#Registro_Completo').addClass('disabled');
        }
    });

    ///// TECLAS PROHIBIDAS //////


    $("#Nombre").on('keypress', function(e){
    	key = e.keyCode || e.which;
    	tecla = String.fromCharCode(key).toString();
    	letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    	especiales = [8, 6, 13]; 
    	tecla_especial = false;

    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
		swal("", "Tecla No Valida", "warning");
        return false;
      }
    });

    $("#Correo, #pass").on('keypress', function(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ_,+0123456789@-";
    especiales = [8, 37, 39, 46, 6, 13];
    tecla_especial = false;


    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
		swal("", "Tecla No Valida", "warning");
        return false;
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

		$('#Nombre, #Correo, #pass').keypress(function (e) {
  		if (e.which == 13) 
  		{
  			if($("#Registro_Completo").hasClass('disabled'))
  			{
    		return false;  
    		}  
    		else
    		{
    			$('#Registro_Completo').click();
    			return false;  
    		}
  		}
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
			$(".spann").remove();
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