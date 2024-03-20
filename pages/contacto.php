<script src="https://www.google.com/recaptcha/api.js?render=6Le45n8pAAAAAAQAt-yKYQHFAwjD0guCPuJQUUEY"></script>
<?php
$title = "Formulario de Contacto";
?>
<script src="../js/contacto.js" defer></script>
<?php include("../pages/partials/header.php"); ?>
<?php include("../config/config.php"); ?>
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
    <form class="form" action="procesar.php" method="post" name="contacto" id="contactForm">
        <div class="inputs">
            <label for="nombre" class="form__label">Nombre y Apellido </label>
            <input type="text" name="nombre" id="nombre" class="form__input" placeholder="Ingrese su nombre" tabindex="1" size="50" maxlength="50" required>
            <!-- <input name="Apellidoc" class="form-input" type="text" id="t_apellido" tabindex="1" size="50" maxlength="50" />-->
            <label for="email" class="form__label">Correo </label>
            <input type="email" name="email" class="form__input" id="email" placeholder="Ingrese su E-mail" tabindex="12" size="50" maxlength="50" required>
            <!-- <input name="Emailc" type="text" id="t_email" tabindex="12" size="50" maxlength="50" />-->
            <label for="asunto" class="form__label">Asunto </label>
            <input type="text" name="asunto" id="asunto" class="form__input" placeholder="Asunto" tabindex="20" size="50" maxlength="30" required>
            <!--<input name="asunto" type="text" id="Funcion3" tabindex="20" size="50" maxlength="30" />-->
            <label for="consulta" class="form__label">Ingrese su consulta </label>
            <textarea name="consulta" id="consulta" class="form__textarea" placeholder="Consulta" cols="50" rows="4" tabindex="20" required></textarea>
            <!-- <textarea name="consulta" cols="50" rows="10" id="Funcion2" tabindex="20"></textarea>-->
        </div>
        <!-- <div id="gw-recaptcha">
            <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LeeFbEZAAAAABydLd1cm_-u8drqAF_zDcbLumDq" style="display: inline-block;"></div>
        </div> -->
        <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
        <br>
        <div class="buttons">
            <input type="reset" class="btn-submit" name="Submit2" tabindex="23" value="Restablecer" />
            <!-- <input name="Enviar" type="button" class="btn-submit" tabindex="24" id="enviar" value="Enviar"/> -->

            <button class="btn-submit" type="submit" id="submitBtn">Enviar</button>
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

<!-- 

<form id="contactForm" action="process.php" method="post">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Correo:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="subject">Asunto:</label>
    <input type="text" id="subject" name="subject" required>
    <br>
    <label for="message">Comentario:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <input type="hidden" id="recaptchaResponse" name="recaptchaResponse">
    <button type="submit" id="submitBtn">Enviar</button>
</form> -->