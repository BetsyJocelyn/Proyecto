<?php
function conectar(){
  $servidor = 'localhost';
  $usuario = 'root';
  $contra = '';
  $base = 'demo';

  $conexion = new mysqli($servidor,$usuario,$contra,$base);

  if($conexion->connect_error){
    die('Error en la conexion.');
  }else{
    return $conexion;
  }
}
?>