<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTp.php";
require_once "PHPMailer/src/Exception.php";

$mail=new PHPMailer(true);
//$mail->$SMTPDebug=0;
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->SMTPOptions=array(
    'ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>true
    )
    );
    $mail->Username="imishbhardwaj@gmail.com";
    $mail->Password="cgpelriscmcaaowg";
    $mail->SMTPSecure="tls";
    $mail->Port=587;
    $mail->setFrom('imishbhardwaj@gmail.com','imish');
    $mail->addAddress('nishabhardwaj690@gmail.com');
    $mail->isHTML(true);
    $mail->Subject="Contact Form Email";
    $message="<table>
    <tr><td>Name:</td><td>".$_POST["name"]."</td></tr>
    <tr><td>Email:</td><td>".$_POST["email"]."</td></tr>
    <tr><td>Phone:</td><td>".$_POST["phone"]."</td></tr>
    <tr><td>Message:</td><td>".$_POST["message"]."</td></tr>
</table>
    ";

    $mail->Body=$message;

    try{
        $mail->send();
        echo "<h2>Message sent Successfully</h2>";
    }catch(Exception $e){
        echo "Mailer error:" .$mail->Errorinfo;    }
?>