<?php

$servidor='localhost:3305';
    $cuenta='root';
    $password='';
    $bd='tienda';

//conexion a la base de datos
$conexion = new mysqli($servidor,$cuenta,$password,$bd);

if ($conexion->connect_errno){
     die('Error en la conexion');
}

else{
    //conexion existosa 

    if(isset($_POST['submit'])){
        //obtenemos datos del formulario
        $eliminar = $_POST['eliminar'];

        //hacemos cadena con la sentencia mysql
        $sql = "DELETE FROM items WHERE id ='$eliminar'";
        $conexion->query($sql);
        if ($conexion->affected_rows >= 1){ //revisamos que se elimino
            echo '<br> registro borrado <br>';
        } //fin

    }//fin

    //continuamos con la consulta de datos a la tabla items
    //vemos datos en una tabla html 
    $sql = 'select * from items';//hacemos cadena con la sentencia msql que consulta todo el contenido de la tabla
    $resultado = $conexion -> query($sql);//aplicamos sentencia 
    if ($resultado -> num_rows){ //si la consulta genera registros
     ?>

    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method='post'>
        <legend>ELIMINAR PRODUCTOS</legend>
        <br>
        <select class="browser-default custom-select" name='eliminar' >
        <?php
        while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos en la tabla 
            echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
        }
        ?>
        </select>
        <br><br>
        <li class="form-row" >
        <button type="submit" value="submit" name="submit">Eliminar </button>
        <button   type="submit" name="submit" ><a href="Form.php">Agregar Productos</a></button>
        <button  type="submit" name="submit"><a href="Modificar.php">Modificar</a></button>
        <button   type="submit" name="submit" ><a href="index.php">Menu</a></button>
        </li>
    </form>
    </div>
<?php
    }
    else{
        echo"no hay datos";
    }
}
?>

<!DOCTYPE html>	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        
    </style>
    <style>
    div{
   
   width:20%;
 }
 body{
     margin:50px;
     color: black; background-color: #fdcae1;
     font-family: 'Josefin Sans', sans-serif;
 }
.form-row >button { background: #ffa0bd; color: white; border: 0;}
 a{color: white;}
    </style>
</head>
<body>
</body>
</html>