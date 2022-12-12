<?php
  header('Content-Type: application/json');

  $servidor = 'localhost';
  $cuenta = 'root';
  $password = '';
  $bd = 'demo';

  $conexion  = new mysqli($servidor,$cuenta,$password,$bd);

  if($conexion->connect_error){
    die('Error en la conexion');
  }else{
    $sql = "SELECT nombre, existencia FROM items";
    $result = $conexion->query($sql);
    $data = array();
    foreach($result as $row){
      $data[] = $row;
    }
    $result->close();
    mysqli_close($conexion);
    echo json_encode($data);
  }
?>
