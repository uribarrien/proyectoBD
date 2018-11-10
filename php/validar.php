<?php

$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$client = $_POST['correo'];
$pass = $_POST["password"];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
else{
    echo "Conexion exitosa<br>".PHP_EOL;
}


//--------------------SESIONES------------------------
$qClient = "SELECT * FROM cliente WHERE correo = '$client' AND contrasena = '$pass'";

$resultC = mysqli_query($connection,$qClient);
$rowsC = mysqli_num_rows($resultC);

session_start();
$_SESSION['correo'] = $client;
$_SESSION['password'] = $pass;

if($rowsC > 0){
    echo "Cliente existe <br>".PHP_EOL;
}else{
    echo "REQUIERE INICIAR SESION";
}

mysqli_free_result($resultC);
mysqli_close($connection);

?>