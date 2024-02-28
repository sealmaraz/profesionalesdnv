const formulario = document.getElementById('contacto');
const inputs = document.querySelectorAll('#contacto input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    asunto: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    consulta: /^[a-zA-ZÀ-ÿ\s]{1,200}$/, // Letras y espacios, pueden llevar acentos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    // usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	// password: /^.{4,12}$/, // 4 a 12 digitos.
    // telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
	nombre: false,
	asunto: false,
	consulta: false,
	email: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		// case "email":
		// 	validarCampo(expresiones.email, e.target, 'email');
		// break;
		// case "password":
		// 	validarCampo(expresiones.password, e.target, 'password');
		// 	validarPassword2();
		// break;
		// case "password2":
		// 	validarPassword2();
		// break;
		// case "correo":
		// 	validarCampo(expresiones.correo, e.target, 'correo');
		// break;
		// case "telefono":
		// 	validarCampo(expresiones.telefono, e.target, 'telefono');
		// break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		// document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		// document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		// document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		// document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		// document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		// document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		// document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		// document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		// document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		// document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

$(document).ready(function(){
    $('#enviar').click(function(){
        grecaptcha.ready(function(){
            grecaptcha.execute('6Le45n8pAAAAAAQAt-yKYQHFAwjD0guCPuJQUUEY',{
                action:"validarenvio"
                }).then(function(token){
                    $('#contacto').prepend('<input type="hidden" name="token" value= "'+ token +'">');
                    $('#contacto').prepend('<input type="hidden" name="action" value= "validarenvio">');
                    $('#contacto').submit();                    
                });
            });
        })
    })
