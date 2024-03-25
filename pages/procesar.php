
  <?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'vendor/autoload.php'; // Ruta al archivo autoload.php de PHPMailer
 include("../config/config.php");
// Verifica si se ha enviado un token de reCAPTCHA
if (isset($_POST['recaptchaResponse'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret ='6Le45n8pAAAAAKjGhYHxB59AWGzjp9GD8QFsHk1T';
    $recaptcha_response = $_POST['recaptchaResponse'];

    // Hace una solicitud POST a la API de reCAPTCHA
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Verifica la respuesta de reCAPTCHA
    if ($recaptcha->success) {
        // Procesa el formulario
        $mail = new PHPMailer(true);
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $subject = $_POST['asunto'];
        $message = $_POST['consulta'];

        // Validación adicional de campos (puedes agregar más validaciones según tus necesidades)
        //Envío de correo electrónico
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'lince.avnam.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'tu_usuario';
            $mail->Password = 'tu_contraseña';
            $mail->SMTPSecure = 'tls'; // TLS o SSL
            $mail->Port = 587; // Puerto SMTP
        
            // Detalles del correo electrónico
            $mail->setFrom('tu@correo.com', 'Tu Nombre');
            $mail->addAddress('destinatario@correo.com', 'Destinatario');
            $mail->Subject = 'Asunto del Correo';
            $mail->Body = 'Contenido del Correo';
        
            // Enviar correo electrónico
            $mail->send();
            echo 'El correo se envió correctamente.';
        } catch (Exception $e) {
            echo 'Error al enviar el correo: ', $mail->ErrorInfo;
        }
        // Conexión a la base de datos
        try {
            // $dbh = new PDO('mysql:host=localhost;dbname=nombre_basedatos', 'usuario', 'contraseña');
            // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // // Prepara la consulta para insertar datos en la base de datos
            // $stmt = $dbh->prepare("INSERT INTO contact_form (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
            
            // // Ejecuta la consulta con los valores proporcionados por el usuario
            // $stmt->bindParam(':name', $name);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':subject', $subject);
            // $stmt->bindParam(':message', $message);
            // $stmt->execute();
            
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
