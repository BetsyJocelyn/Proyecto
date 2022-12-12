<?php
   session_start();
     
   $servidor='localhost';
   $cuenta='root';
   $password='';
   $bd='demo';
    
     
    $_SESSION['id'] = '';
    $_SESSION['nombre'] = '';
    $_SESSION['descripcion'] = '';
    $_SESSION['existencia'] = '';
    $_SESSION['precio'] = '';
    $_SESSION['categoria'] = '';
    $_SESSION['imagen'] = '';
   
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

   if(isset($_POST['submit'])){
    $modificar = $_POST['modificar'];
    $_SESSION['modificar2'] = $modificar;
    $sql2 = "SELECT * 
    FROM items
    WHERE id='$modificar'";
    $resultado = $conexion -> query($sql2);
    while($fila = $resultado -> fetch_assoc()){
        $_SESSION['id'] = $fila['id'];
        $_SESSION['nombre'] = $fila['nombre']; 
        $_SESSION['descripcion'] = $fila['descripcion']; 
        $_SESSION['existencia'] = $fila['existencia'];
        $_SESSION['precio'] = $fila['precio'];
        $_SESSION['categoria'] = $fila['categoria'];
        $_SESSION['imagen'] = $fila['imagen'];
        

    }
   }
 if(isset($_POST['mod'])){
    $uno = $_POST['id2'];
    $dos = $_POST['nombre2'];
    $tres = $_POST['descripcion2'];
    $cuatro = $_POST['existencia2'];
    $cinco = $_POST['precio2'];
    $seis = $_POST['categoria2'];
    $siete = $_POST['imagen2'];
    $modificar1 = $_SESSION['modificar2'];

    $ne ="UPDATE items
    SET id='$uno', nombre='$dos', descripcion='$tres', existencia='$cuatro' ,precio='$cinco',categoria='$seis',imagen='$siete'
    WHERE id='$modificar1'";
    $fin = $conexion -> query($ne);
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
    <link rel="stylesheet" href="Modificar.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        
    </style>
</head>
<body>
 
    <div class="contenedor1">
        <div class="contenedor2">
            <div class="izquierdaAlta">

            <?php        
         //continuamos con la consulta de datos a la tabla items
         //vemos datos en un tabla de html
         $sql = 'select * from items';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia
         
         if ($resultado -> num_rows){ //si la consulta genera registros
         ?>
 
                
          <div class="izqAlta">      
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>  
            
           <legend>MODIFICAR PRODUCTOS</legend>
                <br>
                <select   class="custom-select" name='modificar' >
                   
            
                <?php
                $salida='<table>';
                while( $fila = $resultado -> fetch_assoc() ){ //recorremos los registros obtenidos de la tabla
                    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
                    //proceso de concatenacion de datos
                    $salida.= '<tr>';
                    $salida.= '<td>'. $fila['id'] . '</td>';
                    $salida.= '<td>'. $fila['nombre'] . '</td>';
                    $salida.= '<td>'. $fila['descripcion'] . '</td>';
                    $salida.= '<td>'. $fila['existencia'] . '</td>';
                    $salida.= '<td>'. $fila['precio'] . '</td>';
                    $salida.= '<td>'. $fila['categoria'] . '</td>';
                    $salida.= '<td>'. $fila['imagen'] . '</td>';
                    $salida.= '</tr>';
                    }//fin while   
                    $salida.= '</table>';
                ?>
                </select>
                <br><br>
                <button type="submit" value="submit" name="submit">Modificar</button>               
            </form>
            </div> 
         <?php
        
         }
         else{
             echo "no hay datos";
         }
        
?>
        </div>
            <div class="izquierdaBaja">
                 <?php echo $salida ?>
            </div>
        </div>
        <div class="derecha">
        
            <form class="estiloformulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
            <ul class="wrapper">
                <li class="form-row">
                <label for="id">ID</label>
                <input type="number" name="id2" id="id" value="<?php echo $_SESSION["id"]; ?>" >
                </li>
                <li class="form-row">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre2" value="<?php echo $_SESSION["nombre"]; ?>">
                </li>
               
                <li class="form-row">
                <label for="contra">DESCRIPCION</label>
                <input type="text" id="descripcion" name="descripcion2" value="<?php echo $_SESSION['descripcion']; ?>">
                </li>
                <li class="form-row">
                <label for="contra">EXISTENCIA</label>
                <input type="number" id="existencia" name="existencia2" value="<?php echo $_SESSION['existencia']; ?>">
                </li>
                <li class="form-row">
                <label for="contra">PRECIO</label>
                <input type="number" id="precio" name="precio2" value="<?php echo $_SESSION['precio']; ?>">
                </li> 
                <li class="form-row">
                <label for="cuenta">CATEGORIA</label>
                <input type="text" id="categoria" name="categoria2" value="<?php echo $_SESSION["categoria"]; ?>">
                </li>
                <li class="form-row">
                <label for="contra">Imagen</label>
                <input type="varchar" id="imagen" name="imagen2" value="<?php echo $_SESSION['imagen']; ?>">
                </li>
                <li class="form-row">
                <button type="submit" name="mod">Modificar</button>
                <button  type="submit" name="submit"><a href="Eliminar.php">Eliminar</a></button>
                <button  type="submit" name="submit" ><a href="Form.php">Agregar Productos</a></button>
                <button   type="submit" name="submit" ><a href="index.php">Menu</a></button>
                </li>
            </ul>
            </form>       
        </div>
    </div>
</body>
</html>