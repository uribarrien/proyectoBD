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

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else{
  //---------------------------Insert---------------------------
  $qInsert = "INSERT INTO proveedor (nombre_proveedor,rfc,calle,no_exterior,colonia,codigo_postal,ciudad_id_ciudad)
              VALUES('$name','$rfc','$street','$num','$col','$cp',$city)";
  mysqli_query($connection,$qInsert);
  $qSelect = "SELECT * FROM proveedor WHERE rfc = '$rfc';";
  $result = mysqli_query($connection,$qSelect);
  $rows = mysqli_num_rows($result);
  if($rows > 0){
    header("location:../proveedores.php");
  }else{
    header("location:../registroProveedor.php");
  }
  mysqli_free_result($result);
  mysqli_close($connection);
}
?>
