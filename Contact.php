<?php
session_start();
$to = 'davood3@hotmail.com';
$subject = 'This is how we do';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = $email;
if($_POST){
if($name == '' || $email == '' || $message == ''){
    $feedback = 'fyll ut alle feltene';
}else{
    mail($to, $subject, $message, $header);
    $feedback = 'Takk for meldingen';
}
}
?>



