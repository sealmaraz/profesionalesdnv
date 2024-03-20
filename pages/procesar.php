<?php 
include("../config/config.php");
$token = $_POST['token'];
$action = $_POST['action'];
// $nombre = $_POST['Apellidoc'];
// $email = $_POST['Emailc'];
// $asunto = $_POST['asunto'];
// $consulta = $_POST['consulta'];
// echo $nombre;
// echo $email;
// echo $asunto;
// echo $consulta;
$cu = curl_init();
curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cu, CURLOPT_POST, 1);
curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cu);
curl_close($cu);

$datos = json_decode($response, true);

print_r($datos);

if($datos['success'] == 1 && $datos['score'] >= 0.7){
    if($datos['action'] == 'validarenvio'){
        
    }
    
    } else {
    echo "ERES UN ROBOT";
}
?>
 


 <?php
// Verifica si se ha enviado un token de reCAPTCHA
if (isset($_POST['recaptchaResponse'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = 'Your_Recaptcha_Secret_Key';
    $recaptcha_response = $_POST['recaptchaResponse'];

    // Hace una solicitud POST a la API de reCAPTCHA
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Verifica la respuesta de reCAPTCHA
    if ($recaptcha->success) {
        // Procesa el formulario
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Validación adicional de campos (puedes agregar más validaciones según tus necesidades)

        // Conexión a la base de datos
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=nombre_basedatos', 'usuario', 'contraseña');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Prepara la consulta para insertar datos en la base de datos
            $stmt = $dbh->prepare("INSERT INTO contact_form (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
            
            // Ejecuta la consulta con los valores proporcionados por el usuario
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            
            echo "¡Tu mensaje ha sido enviado correctamente!";
        } catch(PDOException $e) {
            echo "Error al enviar el mensaje: " . $e->getMessage();
        }
    } else {
        // Si reCAPTCHA no es válido
        echo "Por favor, complete el reCAPTCHA correctamente.";
    }
} else {
    // Si no se ha enviado el token de reCAPTCHA
    echo "Error: Falta el token de reCAPTCHA.";
}
?>
