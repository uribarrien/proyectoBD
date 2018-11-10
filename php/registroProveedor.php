<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$rfc = $_POST['rfc'];
$street = $_POST['calle'];
$num = $_POST['no_exterior'];
$col = $_POST['colonia'];
$cp = $_POST['cp'];
$city = $_POST['ciudad'];
$state = $_POST['estado'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>".PHP_EOL;
}
//---------------------------Insert---------------------------
//echo "$name<br/>";
$qInsert = "INSERT INTO proveedor (nombre_proveedor,rfc,calle,no_exterior,colonia,codigo_postal)
//            VALUES('$name','$rfc','$street','$num','$col','$cp')";
mysqli_query($connection,$qInsert);

//-------------ACTUALIZAR-----------
//mysqli_query($connection,"UPDATE proveedor SET nombre_proveedor = '$name' WHERE rfc = '$rfc'");

$qSelect = "SELECT * FROM proveedor WHERE rfc = '$rfc';";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Proveedor registrado".PHP_EOL;
}else{
  echo "No se pudo registrar proveedor".PHP_EOL;
}

mysqli_free_result($result);
mysqli_close($connection);
?>
