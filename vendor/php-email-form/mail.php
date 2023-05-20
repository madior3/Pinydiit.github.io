<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "dengjokdeng@gmail.com";
$subject = "From Pinydiit Foundation";

$header = "From: ".$name. "\r\n" .
"CC: penydiit@pinydiitfoundation.org";


$txt = "You have a new e-mail from ".$name ."\r\nEmail: " .$email ."\r\n
Message: ". $message;

if(email!=NULL){
    mail($to, $subject, $txt, $header );
}

