<?php

$post = $_POST;
$get = $_GET;
$data = array_merge($post, $get);
$response = array(
    'status' => false,
    'msg' => array(),
    'data' => array()
);

if (isset($data['correo']) && $data['correo'] != '') {
    if (Validaciones_Helper::isValidRegex($data['correo'], '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/')) {


        //preparamos el envio del correo
        require 'vendor/autoload.php';
        //use PHPMailer\PHPMailer\PHPMailer;

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        //$mail->SMTPDebug = 1;//comentar para cuando sea en produccion o pruebas 1. error, 2. mensajes
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        //configurar smtp server
        $mail->Host = 'smtp.hostinger.com';
        $mail->Username = 'contacto@enriquecr-mx.info';
        $mail->Password = 'Pa$$word1234';
        //configuracion del email
        $mail->setFrom('contacto@enriquecr-mx.info', 'Enrique Corona Developer');
        $mail->Subject = 'Mi app EnriqueCR UNIR-MX Compartir Ubicación GPS programada';
        $mail->addAddress($data['correo'], $data['correo']);
        $url_mapa = 'https://www.google.com/maps/place/' . $data['lat'] . ',' . $data['lon'];
        $html_msg = '
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Enrique Corona - UNIR MEX - IoT</title>
            
            </head>
            <body style="background-color: whitesmoke">
                <h5>Mi APP Móvil</h5>
                <h4>Alumno: Enrique Corona Ricaño</h4>
                <h4>Docente: Israel Sandoval Grajeda</h4>
                <H4>Materia: Desarrollo del Internet de las Cosas</H4>
                <p>
                    Mi app móvil para compartir la ubicación GPS programado a una cierta hora definida por el usuario y compartida a un correo en específico
                </p>
                <a href="' . $url_mapa . '">' . $url_mapa . '</a>
                <p><strong>La ubicación es aproximada</strong></p>
            </body>
            </html>';
        $mail->isHTML(true);
        $mail->msgHTML($html_msg);
        $mail->CharSet = 'UTF-8';
        //enviar el correo
        if (!$mail->send()) {
            http_response_code(500);
            $response['msg'] = 'Hubo un error al tratar de enviar el correo de la ubicación';
        } else {
            http_response_code(200);
            $response['status'] = true;
            $response['msg'] = 'Se mando la ubicación con exíto';
        }

    } else {
        http_response_code(400);
        $response['msg'] = 'El correo electrónico no es válido';
    }
} else {
    http_response_code(400);
    $response['msg'] = 'Se necesita el correo para continuar';
}

echo json_encode($response);
exit;

class Validaciones_Helper
{
    public static function isValidRegex($campo, $regla)
    {
        $validacion = true;
        if (!preg_match($regla, $campo)) {
            $validacion = false;
        }
        return $validacion;
    }
}