<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correoelectronico = $_POST['correoelectronico'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];
$aporte= $_POST['aporte'];
$tarch= $_POST['tarch'];
$mensaje= $_POST['mensaje'];

header('Content-type: application/json');

if($nombre=='' || $apellido=='' || $dni=='' || $telefono=='' || $correoelectronico=='' || $localidad=='' || $provincia=='' || $pais=='' || $aporte=='' || $tarch=='' || $mensaje=='') {
    return print(json_encode('no'));
}else{
 
//INICIO DEL SCRIPT PHPMAILER PARA ENVÍO POR MAIL DE LOS CAMPOS DEL FORM
    require("PHPMailerAutoload.php");

$mail = new PHPMailer;        
    
$asunto = "Malvinas, Suma tu aporte";
$carta = "Malvinas, Suma tu aporte ";
$carta .= "De: $nombre ";
$carta .= "$apellido  \n";
$carta .= "DNI: $dni \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Correo electrónico: $correoelectronico \n";
$carta .= "Localidad: $localidad \n";
$carta .= "Provincia: $provincia \n";
$carta .= "Pais: $pais \n";
$carta .= "Aporte: $aporte \n";
$carta .= "tarch: $tarch \n";
$carta .= "Mensaje: $mensaje \n";

// Email para el afiliado.
$asunto1 = "Muchas Gracias por sumar tu aporte para Malvinas - IOSFA";
$carta1 .= "<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; border: 1px #555 solid; border-radius: 15px;'><tr><td style='color: #042791;border-radius: 15px 15px 0 0;background:#eee;'><img src='https://gin.iosfa.gob.ar/img/isologo_90.png' style='float:left;max-height:60px;'><p style='color:#042791 !important;text-decoration:none;font-size:25px; line-height:10px;float:right;'>Contacto Malvinas</p>";
$carta1 .= "</td></tr><tr><td style='font-size:13px;color:#042791'><strong><p>Hemos recibido su contacto para aportar al sitio Malvinas. Pronto nos estaremos comunicando con usted. </strong><br>";
$carta1 .= "A continuación le enviamos una copia de los datos que hemos recibido:</p> <hr><br>";
$carta1 .= "De: $nombre ";
$carta1 .= "$apellido  \n";
$carta1 .= "DNI: $dni \n";
$carta1 .= "Teléfono: $telefono \n";
$carta1 .= "Correo electrónico: $correoelectronico \n";
$carta1 .= "Localidad: $localidad \n";
$carta1 .= "Provincia: $provincia \n";
$carta1 .= "Pais: $pais \n";
$carta1 .= "Aporte: $aporte \n";
$carta1 .= "tarch: $tarch \n";
$carta1 .= "Mensaje: $mensaje \n";
$carta1 .= "<strong> Muchas gracias por contactarte con IOSFA </strong> <br></td></tr></table>";

    
$asunto2 = "Muchas Gracias por sumar tu aporte para Malvinas - IOSFA";

$carta2 .= "<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; border: 1px #555 solid; border-radius: 15px;'><tr><td style='color: #042791;border-radius: 15px 15px 0 0;background:#eee;'><img src='https://gin.iosfa.gob.ar/img/isologo_90.png' style='float:left;max-height:60px;'><p style='color:#042791 !important;text-decoration:none;font-size:25px; line-height:10px;float:right;'>Contacto para aportar al sitio Malvinas</p>";
$carta2 .= "</td></tr><tr><td style='font-size:13px;color:#042791'><strong><p>Hemos recibido un aporte para el sitio Malvinas de: $nombre $apellido </strong><br> <hr><br>";
$carta2 .= "Estos son los datos que hemos recibido: <br><br>";
$carta2 .= "De: $nombre ";
$carta2 .= "$apellido  \n";
$carta2 .= "DNI: $dni \n";
$carta2 .= "Teléfono: $telefono \n";
$carta2 .= "Correo electrónico: $correoelectronico \n";
$carta2 .= "Localidad: $localidad \n";
$carta2 .= "Provincia: $provincia \n";
$carta2 .= "Pais: $pais \n";
$carta2 .= "Aporte: $aporte \n";
$carta2 .= "tarch: $tarch \n";
$carta2 .= "Mensaje: $mensaje \n";
$carta2 .= "<strong> Muchas gracias por contactarte con IOSFA </strong> <br></td></tr></table>";
    
 
$correoele = "prensa@iosfa.gob.ar";  
$correoele1 = "malvinas.iosfa@gmail.com";  
$correoele2 = "malvinas.iosfa@gmail.com";  
    //Iniciar la validación por SMTP:
        
    //$mail->IsSMTP();
    $mail->Host = "mail.iosfa.gob.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
    $mail->Port = 465; // Puerto a utilizar
    $mail->SMTPAuth = true;
    $mail->Username = "malvinas@iosfa.gob.ar"; // Correo completo a utilizar
    $mail->Password = "mg5Kt6g3YJci"; // Contraseña
    
    
    //$mail->Host = "mail.iosfa.gob.ar";
    //$mail->ConfirmReadingTo= "$email";
    
        $mail->AddReplyTo($correoelectronico);
        $mail->FromName = $nombre;
        $mail->SMTPAuth = true;
        $mail->From = "prensa@iosfa.gob.ar";
        $mail->Sender = 'malvinas@iosfa.gob.ar';
        $mail->Subject = $asunto1; 
        $mail->CharSet = "UTF-8";
        $mail->addCustomHeader('MIME-Version: 1.0');
        $mail->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
        $mail->Body = $carta1;
        $mail->IsHTML(true);
        $mail->AltBody = "";
        $mail->Timeout=130;
            if(!$mail->Send()) {            
                $enviado=false;
            } else {            
                $enviado=true;
            }
        //$mail->ClearAddresses();
        //$mail->ClearBCCs();
        
        ///este va al afiliado //
        $mail_user = new PHPMailer;
        //$mail_user->IsSMTP();
        $mail_user->Host = "mail.iosfa.gob.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
        $mail_user->Port = 465; // Puerto a utilizar
        $mail_user->SMTPAuth = true;
        $mail_user->Username = "malvinas@iosfa.gob.ar"; // Correo completo a utilizar
        $mail_user->Password = "mg5Kt6g3YJci"; // Contraseña
        $mail_user->FromName = "IOSFA";
        $mail_user->AddReplyTo('malvinas@iosfa.gob.ar', 'IOSFA');
        $mail_user->From = "malvinas@iosfa.gob.ar";
        $mail_user->Subject = "Muchas Gracias por contactarte con IOSFA - Malvinas"; //"Gracias por comunicarse con IOSFA"; 
        $mail_user->CharSet = "UTF-8";
        $mail_user->AddAddress($correoelectronico);
        $mail_user->Body = $carta1; //$msjNoReply.$message
        $mail_user->IsHTML(true);
        $mail_user->AltBody = "";
        $mail_user->Timeout=130;
            if(!$mail_user->Send()) {            
                $enviado=false;
            } else {            
                $enviado=true;
            }
        $mail_user->ClearAddresses();
        $mail_user->ClearBCCs();
        
 

    $mail_user1 = new PHPMailer;
        //$mail_user1->IsSMTP();
        $mail_user1->Host = "mail.iosfa.gob.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
        $mail_user1->Port = 465; // Puerto a utilizar
        $mail_user1->SMTPAuth = true;
        $mail_user1->Username = "malvinas@iosfa.gob.ar"; // Correo completo a utilizar
        $mail_user1->Password = "mg5Kt6g3YJci"; // Contraseña
        $mail_user1->FromName = "IOSFA";
        $mail_user1->AddReplyTo('malvinas@iosfa.gob.ar', 'IOSFA');
        $mail_user1->From = "malvinas@iosfa.gob.ar";
        $mail_user1->Subject = "Malvinas, Suma tu aporte - $nombre $apellido"; //"Gracias por comunicarse con IOSFA"; 
        $mail_user1->CharSet = "UTF-8";
        $mail_user1->AddAddress($correoele);
        $mail_user1->Body = $carta2; //$msjNoReply.$message
        $mail_user1->IsHTML(true);
        $mail_user1->AltBody = "";
        $mail_user1->Timeout=130;
            if(!$mail_user1->Send()) {            
                $enviado=false;
            } else {            
                $enviado=true;
            }
        $mail_user1->ClearAddresses();
        $mail_user1->ClearBCCs();
    
    
        $mail_user2 = new PHPMailer;
        //$mail_user2->IsSMTP();
        $mail_user2->Host = "mail.iosfa.gob.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
        $mail_user2->Port = 465; // Puerto a utilizar
        $mail_user2->SMTPAuth = true;
        $mail_user2->Username = "malvinas@iosfa.gob.ar"; // Correo completo a utilizar
        $mail_user2->Password = "mg5Kt6g3YJci"; // Contraseña
        $mail_user2->FromName = "IOSFA";
        $mail_user2->From = "malvinas@iosfa.gob.ar";
        $mail_user2->Subject = "Malvinas, Suma tu aporte - $nombre $apellido"; //"Gracias por comunicarse con IOSFA"; 
        $mail_user2->CharSet = "UTF-8";
        $mail_user2->AddAddress($correoele1);
        $mail_user2->Body = $carta2; //$msjNoReply.$message
        $mail_user2->IsHTML(true);
        $mail_user2->AltBody = "";
        $mail_user2->Timeout=130;
            if(!$mail_user2->Send()) {            
                $enviado=false;
            } else {            
                $enviado=true;
            }
        $mail_user2->ClearAddresses();
        $mail_user2->ClearBCCs();
    
    
        $db = mysqli_connect('localhost', 'iosfa_admin', 'LwSmL6is2u', 'iosfa_iosfa');

        mysqli_set_charset($db, 'utf8');
       
        $query = "INSERT INTO malvinas_aporte (nombre, apellido, dni, telefono, email, localidad, provincia, pais, tipo_aporte, tiene_aporte, mensaje) VALUES ('$nombre', '$apellido', '$dni', '$telefono', '$correoelectronico', '$localidad', '$provincia', '$pais', '$aporte', '$tarch', '$mensaje')";
        
        mysqli_query($db, $query);

// Enviando Mensaje
//mail($correoele2, $asunto, $carta);
// Email para el afiliado.
//mail($correoelectronico, $asunto1, $carta1);
return print(json_encode('ok'));
}
?>