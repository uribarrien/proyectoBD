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

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}
//---------------------------Insert---------------------------
$qInsert = "INSERT INTO producto (nombre,precio,costo,sexo,stock,disponible,modelo,tela)
            VALUES('$name','$price','$cost','$sex','$stock','$aviable','$model','$cloth')";
mysqli_query($connection,$qInsert);

$qSelect = "SELECT * FROM producto WHERE nombre = '$name';";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Producto registrado";
}else{
  echo "No se pudo registrar producto";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
