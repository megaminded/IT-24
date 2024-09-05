<?php
header("Access-Control-Allow-Origin: *");
require_once('library/PHPMailer/src/PHPMailer.php');
require_once('library/PHPMailer/src/SMTP.php');
require_once('library/PHPMailer/src/Exception.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function validated($email, $code)
{
    return !empty($email) && !empty($code);
}

$email = $_POST['email'];
$code = $_POST['code'];
// echo json_encode($_POST);
// return;
if (validated($email, $code)) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();

    define("MAIL_HOST", "mail0.serv00.com");
    define("MAIL_PORT", 25);
    define("MAIL_USERNAME", "ict@ict.serv00.net");
    define("MAIL_PASSWORD", "bCE#oM3RmU8k+KKfQ-Jt6+253,lYBO");

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
        $mail->Username   = MAIL_USERNAME;                     //SMTP username
        $mail->Password   = MAIL_PASSWORD;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = MAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(MAIL_USERNAME, "Activation Team");
        $mail->addAddress($email);               //Name is optional
        $mail->addReplyTo(MAIL_USERNAME, "Activation Team");


        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Activation code';
        $mail->Body    = "This is your activation code <b>{$code}</b>";
        $mail->AltBody = "This is your activation code {$code}";
        $mail->send();
        echo json_encode([
            'success' => true,
            'message' => 'Message has been sent'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => "Email address and code is required"
    ]);
}
