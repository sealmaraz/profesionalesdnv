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