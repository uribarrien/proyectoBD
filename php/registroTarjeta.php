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
//------------------Registro---------------------------
$qInsert = "INSERT INTO tarjeta (no_tarjeta,mes_exp,anio_exp,no_seguridad,tipo,nombre_th,apPaterno_th,apMaterno_th,nom_banco)
            VALUES('$nCard','$monthExp','$yearExp','$sNum','$type','$nameO','$lastNameF','$lastNameM','$nameBanc')";
mysqli_query($connection,$qInsert);

$qSelect = "SELECT * FROM tarjeta WHERE no_tarjeta = '$nCard';";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  echo "Tarjeta registrada";
}else{
  echo "No se pudo registrar tarjeta";
}

mysqli_free_result($result);
mysqli_close($connection);

?>
