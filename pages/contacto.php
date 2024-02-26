<?php
$title = "Contacto";
?>
<?php include("../pages/partials/header.php"); ?>
<!-- <script>
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
</script> -->
<section Class="comunicado container_Propio">
    <!-- <div class="formulario"> -->
    <form class="form" action="procesar.php" method="post" name="contacto" id="contacto">
        <div class="inputs">
            <label for="t_apellido" class="form-label">Nombre y Apellido </label>
            <input type="text" name="Apellidoc" id="t_apellido" class="form-input" placeholder="Ingrese su nombre" tabindex="1" size="50" maxlength="50" required>
            <!-- <input name="Apellidoc" class="form-input" type="text" id="t_apellido" tabindex="1" size="50" maxlength="50" />-->
            <label for="t_email" class="form-label">E-mail </label>
            <input type="text" name="Emailc" class="form-input" id="t_email" placeholder="Ingrese su E-mail" tabindex="12" size="50" maxlength="50" required>
            <!-- <input name="Emailc" type="text" id="t_email" tabindex="12" size="50" maxlength="50" />-->
            <label for="Funcion3" class="form-label">Asunto </label>
            <input type="text" name="asunto" id="Funcion3" class="form-input" placeholder="Asunto" tabindex="20" size="50" maxlength="30" required>
            <!--<input name="asunto" type="text" id="Funcion3" tabindex="20" size="50" maxlength="30" />-->
            <label for="Funcion2" class="form-label">Ingrese su consulta </label>
            <textarea name="consulta" id="Funcion2" class="form-textarea" placeholder="Consulta" cols="50" rows="4" tabindex="20" required></textarea>
            <!-- <textarea name="consulta" cols="50" rows="10" id="Funcion2" tabindex="20"></textarea>-->
        </div>
        <!-- <div id="gw-recaptcha">
            <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LeeFbEZAAAAABydLd1cm_-u8drqAF_zDcbLumDq" style="display: inline-block;"></div>
        </div> -->
        <div class="buttons">
            <input type="reset" class="btn-submit" name="Submit2" tabindex="23" value="Restablecer" />
            <input name="Enviar" type="button" class="btn-submit" tabindex="24" id="enviar" value="Enviar" />

        </div>
        <br>      
        <div class="alert alert-success" role="alert">
            El mensaje fue recibido exitosamente, contestaremos su consulta a la brevedad.
        </div>
        <div class="alert alert-danger" role="alert">
            Hubo un error en el envío, por favor verifique los datos ingresados.
        </div>
    </form>
    <!-- </div> -->
</section>
<br>
<br>
<?php include("../pages/partials/footer.php"); ?>