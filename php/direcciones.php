<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

session_start();
$session_email=$_SESSION['correo'];
echo $session_email."<br>";
$calle = $_POST['calle'];
echo "calle ".$calle."<br>";
$no_exterior = $_POST['num_ext'];
echo "numero ".$no_exterior."<br>";
$colonia = $_POST['colonia'];
echo "colonia ".$colonia."<br>";
$codigo_postal = $_POST['cp'];
echo "codigo ".$codigo_postal."<br>";
$estado = $_POST['estado'];
echo "estado ".$estado."<br>";
$ciudad = $_POST['ciudad'];
echo "ciudad ".$ciudad."<br>";
$connection = mysqli_connect($server,$user,$password,$db);

if(!$connection){

   echo "Error: No se pudo conectar a la base de datos de MySQL!!".PHP_EOL."<br>";
   echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
   echo "error de depuracion".mysqli_connect_error().PHP_EOL;
   exit;

}

echo "Exito: Se realizo una conexion apropiada a la base de datos. Ahora la base de datos esta lista para usarse".PHP_EOL."<br>";
echo "Informacion del Host:".mysqli_get_host_info($connection).PHP_EOL;

$update = "UPDATE cliente SET calle = '$calle', no_exterior = '$no_exterior', colonia = '$colonia', codigo_postal ='$codigo_postal', ciudad_id_ciudad = '$ciudad' WHERE correo = '$session_email';";
mysqli_query($connection,$update);

$select = "SELECT * FROM cliente WHERE correo = '$session_email';";

$result = mysqli_query($connection,$select);
$row = mysqli_num_rows($result);

if ($row > 0){
 echo "Exito en la insersión ";
 header("location:../directorioDeDirecciones.php ");
} else{
header("location:../directorioDeDirecciones.php ");
}


?>
