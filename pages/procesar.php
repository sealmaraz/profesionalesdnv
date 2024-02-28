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
 