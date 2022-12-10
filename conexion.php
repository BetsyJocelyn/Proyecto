<?php
function conectar(){
  $servidor = 'localhost';
  $usuario = 'id19701917_usuario';
  $contra = '?AO\feH^Y$3zIHl^';
  $base = 'id19701917_pasteleria';

  $conexion = new mysqli($servidor,$usuario,$contra,$base);

  if($conexion->connect_error){
    die('Error en la conexion.');
  }else{
    return $conexion;
  }
}
?>