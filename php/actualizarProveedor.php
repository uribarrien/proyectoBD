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
echo "$city\n";
$id = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else{
  //-------------ACTUALIZAR-----------
  //nombre_proveedor,rfc,calle,no_exterior,colonia,codigo_postal
  $qRefresh = "UPDATE proveedor SET nombre_proveedor = '$name', rfc = '$rfc', calle = '$street', no_exterior = '$num', colonia = '$col',
              codigo_postal = '$cp', ciudad_id_ciudad = $city
                WHERE no_proveedor = '$id'";
  mysqli_query($connection,$qRefresh);
  $qSelect = "SELECT * FROM proveedor WHERE no_proveedor = '$id';";
  $result = mysqli_query($connection,$qSelect);
  $datos = mysqli_fetch_array($result);
  if ($datos['nombre_proveedor'] = "$name" && $datos['rfc'] = "$rfc" && $datos['calle'] = "$street" && $datos['no_exterior'] = "$num"
      && $datos['colonia'] = "$col" && $datos['codigo_postal'] = "$cp" && $datos['ciudad_id_ciudad'] = $city) {
    $rows = mysqli_num_rows($result);
  }else {
    $rows = 0;
  }
  if($rows > 0){
    header("location:../proveedores.php");
  }else{
    header("location:../actualizaProveedor.php?id=$id");
  }
  mysqli_free_result($result);
  mysqli_close($connection);
}
?>
