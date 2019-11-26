<?php
if(isset($_POST['submit'])){
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mailTo = "hola@davidajfilms.com"
$headers = "From: ".$fiel_email;
$txt = "You have recieved an email from ".$name.".\n\n".$field_message;

mail($mail_to, $txt, $headers);
header("Location: index.html?mailsent");
}
