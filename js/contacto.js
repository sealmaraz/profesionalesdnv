document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('Your_Recaptcha_Site_Key', {action: 'submit'}).then(function(token) {
                document.getElementById("recaptchaResponse").value = token;
                document.getElementById("contactForm").submit();
            });
        });
    });
});