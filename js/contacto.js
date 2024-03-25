document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le45n8pAAAAAAQAt-yKYQHFAwjD0guCPuJQUUEY', {action: 'submit'}).then(function(token) {
                document.getElementById("recaptchaResponse").value = token;
                document.getElementById("contactForm").submit();
            });
        });
    });
});