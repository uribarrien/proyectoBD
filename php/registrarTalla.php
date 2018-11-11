<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$size = $_POST['talla'];
$id = $_POST['id_talla'];

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
$qInsert = "INSERT INTO talla (talla) VALUES('$size')";
mysqli_query($connection,$qInsert);

$qSelect = "SELECT * FROM talla WHERE talla = '$size';";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Talla registrada";
}else{
  echo "No se pudo registrar talla";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
