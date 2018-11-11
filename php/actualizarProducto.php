<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$price = $_POST['precio'];
$cost = $_POST['costo'];
$sex = $_POST['sexo'];
$stock = $_POST['stock'];
$aviable = $_POST['disponible'];
$model = $_POST['modelo'];
$cloth = $_POST['tela'];
$id = $_POST['no_poducto'];

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
$qRefresh = "UPDATE producto SET nombre = '$name', precio = '$price', costo = '$cost', sexo = '$sex',
              stock = '$stock', disponible = '$aviable', modelo = '$model', tela = '$cloth'
              WHERE no_producto = '$id'";
mysqli_query($connection,$Refresh);

$qSelect = "SELECT * FROM producto WHERE no_producto = '$id'";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Producto actualizado";
}else{
  echo "No se pudo actualizar producto";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
