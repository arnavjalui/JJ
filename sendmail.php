<?php
if(isset($_POST['submit_contact_me'])){

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$name=$_POST['customer_name'];
$organization=$_POST['customer_organization'];
$email=$_POST['customer_email'];
$phone=$_POST['customer_mobile'];
$message=$_POST['customer_message'];
$messageBody='<h1>Contact the following person : <br></h1>';
$messageBody .= 'Name: '.$name.'<br>Organization: '.$organization.'<br>Email: '.$email.'<br>';
$messageBody .= 'Phone: '.$phone.'<br>Message: '.$message.'<br>';



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'arnavjalui@gmail.com';                 // SMTP username
$mail->Password = 'Arnav@1997';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->isHTML(true);
$mail->setFrom('arnavjalui@gmail.com', 'Arnav Jalui');
$mail->addAddress('arnavjalui@gmail.com', 'Arnav Jalui');     
$mail->Subject = 'Someone has filled the query form';

$mail->Body = $messageBody;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}else{
	
}
