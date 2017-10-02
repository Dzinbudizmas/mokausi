<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

echo "<br> Kliento vardas: " . $name;
echo "<br> Kliento pastas: " . $visitor_email;
echo "<br> Kliento telefonas: " . $phone;
echo "<br> Zinute: " . $message;

//Load composer's autoloader
require './lib/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'pastas@gmail.com';    //testascoding             // SMTP username
    $mail->Password = 'xxxxx';    //slaptazodis                // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($visitor_email, $name);
    $mail->addAddress('pastas@gmail.com', 'Me');     // Add a recipient
    $mail->addAddress($visitor_email, $name);               // Name is optional
     $mail->addReplyTo($visitor_email, 'Svečias');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Naujas laiskas"; //'Here is the subject';
    $mail->Body    = $message; //'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $message; //'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
