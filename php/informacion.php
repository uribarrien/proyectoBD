<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

session_start();
$session_email=$_SESSION['correo'];
error_reporting(0);
if (isset($_POST["submit"])) {
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contrasena = $_POST['contrasena'];
$confirmacion =$_POST['newcontrasena'];
$telefono = $_POST['telefono'];
}

 $nombre = $_POST['nombre'];

echo $nombre;
$connection = mysqli_connect($server,$user,$password,$db);

if(!$connection){

   echo "Error: No se pudo conectar a la base de datos de MySQL!!".PHP_EOL;
   echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
   echo "error de depuracion".mysqli_connect_error().PHP_EOL;
   exit;

}

echo "Exito: Se realizo una conexion apropiada a la base de datos. Ahora la base de datos esta lista para usarse".PHP_EOL;
echo "Informacion del Host:".mysqli_get_host_info($connection).PHP_EOL;

$update = "UPDATE cliente SET nombre = '$nombre', apellido_paterno = '$apellido', telefono ='$telefono' WHERE correo = '$session_email'";
mysqli_query($connection,$update);

 if ($contrasena == $confirmacion){
   $update = "UPDATE cliente SET contrasena = '$contrasena' WHERE correo = '$session_email'";
   mysqli_query($connection,$update);
 }

$select = "SELECT * FROM cliente WHERE correo = '$session_email';";

$result = mysqli_query($connection,$select);
$row = mysqli_num_rows($result);

if ($row > 0){
 echo "Exito en la insersión ";
 header("location:../informacionPersonal.html");
} else{
 echo "Error en la insersión";
}


?>
