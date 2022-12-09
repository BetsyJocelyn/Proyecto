<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="shortcut icon" href="imagenes/logo.jpg.webp">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">



<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$subject ='Bienvenido a Pasteleria';
$msg = 'Bienvenido a Pasteleria, a partir de hoy recibira descuentos exclusivos, por el momento le dejamos un 20% en cualquier compra con el cupon "BIENVENIDO22"';
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