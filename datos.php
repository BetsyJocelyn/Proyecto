<?php
  $servidor = 'localhost';
  $cuenta = 'root';
  $password = '';
  $bd = 'ventas';

  $conexion  = new mysqli($servidor,$cuenta,$password,$bd);

  if($conexion->connect_error){
    die('Error en la conexion');
  }else{
    $sql = "SELECT ventas FROM ventas_por_mes";
    $result = $conexion->query($sql);
    $a = array();
    while($row = $result->fetch_assoc()){
      array_push($a , $row['ventas']);
    }
    echo json_encode($a);
  }
  mysqli_close($conexion);
?>
