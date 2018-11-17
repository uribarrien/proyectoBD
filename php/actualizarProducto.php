<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$price = $_POST['precio'];
//$cost = $_POST['costo'];
$sex = $_POST['sexo'];
$stock = $_POST['cantidad'];
$talla = $_POST['talla'];
$color = $_POST['color'];
//$aviable = $_POST['disponible'];
$model = $_POST['modelo'];
$cloth = $_POST['tela'];
$id = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}
//-------------ACTUALIZAR-----------
//nombre,precio,costo,sexo,stock,disponible,modelo,tela
$qRefresh = "UPDATE producto SET nombre = '$name', precio = '$price', sexo = '$sex',
              stock = '$stock', modelo = '$model', tela = '$cloth'
              WHERE no_producto = '$id';";
mysqli_query($connection,$qRefresh);
$qInsC = "INSERT into color_producto(color_id_color,producto_no_producto) values($color,$id);";
mysqli_query($connection,$qInsC);
$qInsT = "INSERT into talla_producto(talla_id_talla,producto_no_producto) values($talla,$id);";
mysqli_query($connection,$qInsT);

$qSelect = "SELECT * FROM producto WHERE no_producto = '$id'";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  //header("location:producto.php");
  echo "producto.php";
}else{
  //header("location:actualizarProducto.php");
  echo "actualizarProducto.php";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
