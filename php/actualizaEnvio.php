<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$no_envio = $_POST['no_envio'];
$peso = $_POST['peso'];
$calle = $_POST['calle'];
$no_exterior = $_POST['no_exterior'];
$colonia = $_POST['colonia'];
$cp = $_POST['codigo_postal'];

$connection = mysqli_connect($server,$user,$password,$db);
session_start();
$id_cliente = $_SESSION['no_cliente'];
$no_pedido = $_SESSION['no_pedido'];
$no_envio = $_SESSION['no_envio'];
$_SESSION['no_cliente'] = $id_cliente;
$_SESSION['no_pedido'] = $no_pedido;
$_SESSION['no_envio'] = $no_envio;

if(!$connection){
    exit;
}else{
  $update = mysqli_query($connection,"UPDATE envio set peso='$peso', calle='$calle',no_exterior='$no_exterior',colonia='$colonia',codigo_postal='$cp' where no_envio=$no_envio");
  $insert = mysqli_query($connection,"SELECT * from envio where no_envio=$no_envio");
  $envio = mysqli_fetch_array($insert);
  if ($envio['calle'] == $calle) {
    $rows = mysqli_num_rows($insert);
  }else {
    $rows = 0;
  }
  if($rows > 0){
      header("location:../registroTarjeta.php");
  }else{
    header("location:../carrito.php");
  }
}
?>
