<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $proptypes = $_POST['proptypes'];
    $units = $_POST['units'];
    $purchaseOrRefi = $_POST['purchase'];
    $loans = $_POST['loans'];
    $income = $_POST['income'];
    $apt = $_POST['apartment'];
    $message = $_POST['message'];
    $body = "<b>[From]</b><br>$name<br><br> <b>[E-Mail]</b><br>$email<br><br> <b>[Phone #]</b><br>$phone<br><br> <b>[Address]</b><br>$address<br><br> <b>[Type of Property]</b><br>$proptypes<br><br> <b>[# of Units]</b><br>$units<br><br> <b>[Purchase or Refi?]</b><br>$purchaseOrRefi<br><br> <b>[Amnt of Loans Requested]</b><br>$loans<br><br> <b>[Total Income]</b><br>$income<br><br> <b>[Total Apt Expense]</b><br>$apt<br><br> <b>[Message]</b><br>$message<br><br>";


$mail->Subject = 'Someone wants to hear more about your mortgage programs!';
$mail->Body = $body;
$mail->From = 'noreply@nycmultifamilyloans.com';
$mail->FromName = 'NYC Multifamily Loans';
 // Add a recipient
$mail->addAddress('GTOCONNOR@NYCMULTIFAMILYLOANS.COM');  
$mail->addAddress('skysyrnyc@gmail.com');            

$mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name'], 'base64', $_FILES['attachment']['type']);         // Add attachments

$mail->isHTML(true);  

if(!$mail->send()) {
    echo 'Message could not be sent. Please try again.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Your message has been sent! We will get back to you soon!';
}

?>
