<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    echo"testing<br>";
    $name=$_POST['fullName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    if($name!==null){
        echo $name."<br>";}else{
            echo"filed Name empty"."<br>";
                                }
                                
    if($email!==null){
        if($email!==null)
        echo $email."<br>";}else{
            echo"filed Email empty"."<br>";
                                }

    if($phone!==null){
        echo $phone."<br>";}else{
        echo"Filed Phone Empty"."<br>";
        }
    if($message!==null){
        echo $message."<br>";}else{
        echo"Filed Message Empty"."<br>";
        }
        
require 'lib/mailer-php/src/Exception.php';
require 'lib/mailer-php/src/PHPMailer.php';
require 'lib/mailer-php/src/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'lib/malier/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'blood00bank@gmail.com';                     //SMTP username
    $mail->Password   = 'rgekcnzwcvwqzdud';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email']);
    $mail->addAddress('blood00bank@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'message';
    $mail->Body    = $_POST['message'];
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
       
}


?>