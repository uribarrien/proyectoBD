<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$price = $_POST['precio'];
//$cost = $_POST['costo'];
$sex = $_POST['sexo'];
//$stock = $_POST['stock'];
$color = $_POST['color'];
//$aviable = $_POST['disponible'];
$size = $_POST['talla'];
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
//---------------------------Insert---------------------------
$qInsert = "INSERT INTO producto (nombre,precio,sexo,modelo,tela)
            VALUES('$name','$price','$sex','$model','$cloth')";
mysqli_query($connection,$qInsert);


$qSelect = "SELECT * FROM producto WHERE nombre = '$name';";
$qSel = mysqli_fetch_array($qSelect);

$qCP = "INSERT INTO color_producto (color_id_color,producto_no_producto) VALUES($color,$qSel['no_producto'])";

mysqli_query($connection,$qCP);

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
