<?php
     session_start();
    $servidor='localhost';
    $cuenta='root';
    $password='';
    $bd='demo';
     
    //conexion a la base de datos
    $conexion = new mysqli($servidor,$cuenta,$password,$bd);

    if ($conexion->connect_errno){
         die('Error en la conexion');
    }

    else{
         //conexion exitosa

         /*revisar si traemos datos a insertar en la bd  dependiendo
         de que el boton de enviar del formulario se le dio clic*/

         if(isset($_POST['submit'])&& !empty($_POST['id'])){
                //obtenemos datos del formulario
                $id = $_POST['id'];
                $nom =$_POST['nombre'];
                $des =$_POST['descripcion'];
                $exis =$_POST['existencia'];
                $prec =$_POST['precio'];
                $categ =$_POST['categoria'];
                $Imagen = file_get_contents($_POST['imagen']);
                
                //hacemos cadena con la sentencia mysql para insertar datos
                $sql = "INSERT INTO items (id, nombre, descripcion , existencia, precio, categoria, imagen) 
                VALUES('$id','$nom','$des ',' $exis','$prec','$categ','$Imagen')";
                $conexion->query($sql);//aplicamos sentencia que inserta datos en la tabla items de la base de datos
                if ($conexion->affected_rows >= 1){ //revisamos que se inserto un registro
                    echo '<script> alert("registro insertado") </script>';
                }//fin
             
              //continaumos con la consulta de datos a la tabla items
         //vemos datos en un tabla de html
         $sql = 'select * from items';//hacemos cadena con la sentencia mysql que consulta todo el contenido de la tabla
         $resultado = $conexion -> query($sql); //aplicamos sentencia

         if ($resultado -> num_rows){ //si la consulta genera registros
              echo '<div style="margin-left: 20px;">';
              echo '<table class="table table-hover" style="width:50%;">';
              
                echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>nombre</th>'; 
                    echo '<th>descripcion </th>';
                    echo '<th>existencia</th>';
                    echo '<th>precio</th>';
                    echo '<th>categoria</th>';
                    echo '<th>imagen</th>';
                echo '</tr>';
                while( $fila = $resultado -> fetch_assoc()){ //recorremos los registros obtenidos de la tabla
                    echo '<tr>';
                        echo '<td>'. $fila['id'] . '</td>';
                        echo '<td>'. $fila['nombre'] . '</td>';
                        echo '<td>'. $fila['descripcion'] . '</td>'; 
                        echo '<td>'. $fila['existencia'] . '</td>';   
                        echo '<td>'. $fila['precio'] . '</td>'; 
                        echo '<td>'. $fila['categoria'] . '</td>';
                        echo '<td>'. $fila['imagen'] . '</td>';
                    echo '</tr>';
                }   
                echo '</table">';
             echo '</div>';
         }
         else{
             echo "no hay datos";
         }
        
         }//fin 

        
         
    }


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a href="Eliminar.php"></a>
<a href="Modificar.php"></a>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        
    </style>
    <title>Document</title>
    <style>
        td,th {
            padding: 10px;
        }
        body { color: black; background-color: #fdcae1;
            font-family: 'Josefin Sans', sans-serif;
        }
        .form-row >button { background: #ffa0bd; color: white; border: 0;}
        a{color: white;}
    </style>
</head>

<body >
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype="multipart/form-data">
                    <h2>Productos...</h2>
                   <div class="form-group">
                        <label for="id">ID_Producto</label>
                        <input type="number" name="id" class="form-control" id="id" placeholder="">
                    </div> 
                    <div class="form-group">
                        <label for="nombre">Nombre </label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" type="text" id="descripcion" rows="5" cols="40"></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="existencia">Existencia</label>
                        <input type="number" id="existencia" name="existencia" class="form-control" placeholder=" ">
                    </div> 
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" name="precio" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder=" ">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="varchar" id="imagen" name="imagen" class="form-control" placeholder=" ">
                    </div>
                    <li class="form-row">
                    <button class="btn btn-success" type="submit" name="submit" >Agregar</button>
                    <button  type="submit" name="submit"><a href="Modificar.php">Modificar</a></button>
                    <button  type="submit" name="submit" ><a href="Eliminar.php">Eliminar</a></button>
                    <button   type="submit" name="submit" ><a href="index.php">Menu</a></button>
                    </li>
                </form>
            </div> <!-- fin col -->
        </div> <!-- fin row -->
    </div> <!-- fin container -->
    <br><br>
</body>

</html>