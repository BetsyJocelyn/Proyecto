<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$subject ='Bienvenido a Salud Digna';
$msg =  $_POST['msg'];
$from1=$_POST['marquezuaa@gmail.com'];
$from = $_POST['from'];



$headers = "From: marquezuaa@gmail.com\r\n"; 
$headers .= "Reply-To: $from1\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
if(mail($from1,$subject,$msg,$from,$headers)){
	include ('index.html');
    
	}else{
	$errorMessage = error_get_last()['msg'];
	echo $errorMessage;
} 
?>

