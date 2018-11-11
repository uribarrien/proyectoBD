<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$nCard = $_POST['numero_tarjeta'];
$monthExp = $_POST['mes_exp'];
$yearExp = $_POST['anio_exp'];
$sNum = $_POST['no_seguridad'];
$type = $_POST['tipo'];
$nameO = $_POST['nom_th'];
$lastNameF = $_POST['apPat'];
$lastNameM = $_POST['apMat'];
$nameBanc = $_POST['nom_banco'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}
//----------------------------Actualiar-------------------------------
$qRefresh = "UPDATE tarjeta SET no_tarjeta = '$nCard', mes_exp = '$monthExp', anio_exp = '$yearExp', no_seguridad = '$sNum', tipo = '$type',
              nombre_th = '$nameO', apPaterno_th = '$lastNameF', apMaterno_th = '$lastNameM', nom_banco = '$nameBanc'
              WHERE no_tarjeta = '$nCard'";
mysqli_query($connection,$Refresh);

$qSelect = "SELECT * FROM tarjeta WHERE no_tarjeta = '$nCard';";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Tarjeta actualizada";
}else{
  echo "No se pudo actualizar tarjeta";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
