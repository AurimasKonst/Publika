<?php
if (isset($_POST['submit'])){
   $to = "aurimas@electrocom.lt"; // this is your Email address
$name = $_POST['name'];
$email = $_POST['e-mail']; // this is the sender's Email address
$phone = $_POST['phone'];

$subject2 = "Copy of your form submission";

$message = "Client Name' " . $name . "\n"
   . "Phone Number: " . $phone . "\n\n"
   . "Client Messege: " . $_POST['message'];

$message2 = "Mail Sent. Thank you " . $name . "\n"
   . "We will contact you shortly!" .  "\n\n"
   . "You submitted the following messege: " .  "\n" . $_POST['message'] . "\n\n"
   . "Regerds, " .  "\n" . "- AK studio";

$headers = "From: " . $email;
$headers2 = "From: " . $to;

$result1 = mail($to, $subject, $messege, $headers);
$result2 = mail($email, $subject2, $messege2, $headers2);

if($result1 && $result2){
   $success = "You Messege was sent Sucessfully!";
}else{
   $failed = "Sorry! Messege was not sent, Try again Later";
}
}
