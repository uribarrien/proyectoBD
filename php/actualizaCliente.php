<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$apP = $_POST['apellido_paterno'];
$apM = $_POST['apellido_materno'];
$sex = $_POST['sexo'];
$fecha = $_POST['fecha_nac'];
$calle = $_POST['calle'];
$no_e = $_POST['no_exterior'];
$colonia = $_POST['colonia'];
$cp = $_POST['codigo_postal'];
$tel = $_POST['telefono'];
$email = $_POST['correo'];
$cd = $_POST['ciudad'];
$id = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
  echo "error";
    exit;
}else{
//-------------ACTUALIZAR-----------
$qRefresh = "UPDATE `cliente` SET `nombre` = '$name', `apellido_paterno` = '$apP', `apellido_materno` = '$apM', `sexo` = '$sex', `fecha_nac` = '$fecha', `calle` = '$calle', `no_exterior` = '$no_e', `colonia` = '$colonia',
`codigo_postal` = '$cp', `telefono` = '$tel', `correo` = '$email', ciudad_id_ciudad = $cd WHERE `cliente`.`no_cliente` = $id;";

$resulta = mysqli_query($connection,$qRefresh);
$qSelect = "SELECT * FROM cliente WHERE no_cliente = $id";
$result = mysqli_query($connection,$qSelect);
$datos = mysqli_fetch_array($result);
if ($datos['nombre'] == "$name" && $datos['apellido_paterno'] == "$apP" && $datos['apellido_materno'] == "$apM" && $datos['sexo'] == "$sex"
            && $datos['fecha_nac'] == "$fecha" && $datos['calle'] == "$calle" && $datos['no_exterior'] == "$no_e" && $datos['colonia'] == "$colonia"
          && $datos['codigo_postal'] == "$cp" && $datos['telefono'] == "$tel" && $datos['correo'] == "$email") {
  $rows = mysqli_num_rows($result);
}else {
  $rows=0;
}

if($rows > 0){
  header("location:../usuarios.php");
}else{
  header("location:../registroUsuario.php?id=$id");
}

mysqli_free_result($result);
mysqli_close($connection);
}
?>
