

<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$subject ='Bienvenido a Pasteleria';
$msg =  $_POST['Bienvenido a Pasteleria, a partir de hoy recibira descuentos exclusivos, por el momento le dejamos un 20% en cualquier compra con el cupon "BIENVENIDO22"'];
$from = $_POST['from'];


$headers = "From: marquezuaa@gmail.com\r\n"; 
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
if(mail($from,$subject,$msg,$headers)){
	include ('index.html');
    
	}else{
	$errorMessage = error_get_last()['msg'];
	echo $errorMessage;
} 
?>