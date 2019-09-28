<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'insightfuls');

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
$email = mysqli_real_escape_string($mysqli,$_POST['email']);
$message = mysqli_real_escape_string($mysqli,$_POST['message']);

$email2 = "atifhere@gmail.com";
$subject="Text Message";

if(strlen($fname)>50){
    echo 'fname_long';
}

elseif(strlen($fname)<2){
    echo 'fname_short';
}

elseif(strlen($email)>50){
    echo 'email_long';
}

elseif(strlen($email)<2){
    echo 'email_short';
}

elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    echo 'eformat';
}

elseif(strlen($message)>100){
    echo 'message_long';
}

elseif(strlen($message)<3){
    echo 'message_short';
}

else{
    require 'PHPMailer/PHPMailerAutoLoad.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->HOST='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='atifhere@gmail.com';
$mail->Password='';
$mail->SMTPSecure='tls';
$mail->PORT=507;

$mail->AddReplyTo($email);
$mail->From=@email2;
$mail->FromName=$fname;
$mail->addAddress('atifhere@gmail.com','Admin');

$mail->isHMTL(true);

$mail->Subject=$subject;
$mail->Body=$message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()){
    echo 'Message could not be sent';
    echo 'Mail Error'.$mail->ErrorInfo;
}
else{
    echo 'true';
}
}

?>













