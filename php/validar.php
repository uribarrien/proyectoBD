<?php

$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$client = $_POST['correo'];
$pass = $_POST["password"];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
else{
    echo "Conexion exitosa<br>";
}


//--------------------SESIONES------------------------
$qClient = "SELECT * FROM cliente WHERE correo = '$client' AND contrasena = '$pass'";

$resultC = mysqli_query($connection,$qClient);
$rowsC = mysqli_num_rows($resultC);

if($rowsC > 0){
    echo "Cliente existe <br>";
}else{
    echo "REQUIERE INICIAR SESION";
}

mysqli_free_result($resultC);
mysqli_close($connection);

?>
