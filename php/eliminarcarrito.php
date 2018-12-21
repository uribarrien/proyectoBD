<?php

$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
		echo "Error. Sin conexion a la base de datos";
		echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
		echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
		exit;
}
session_start();
$no_pedido = $_SESSION['no_pedido'];
$no_producto = $_GET['id'];
echo "pedido ".$no_pedido;
echo "producto ".$no_producto;
$query = mysqli_query($connection,"DELETE FROM detalle_carrito where producto_no_producto = $no_producto and carrito_no_pedido = $no_pedido");

$query = mysqli_query($connection,"SELECT * FROM detalle_carrito where carrito_no_pedido = $no_pedido");
$array = mysqli_fetch_array($query);

if ($array == null){
  $query = mysqli_query($connection,"DELETE FROM carrito where no_pedido = $no_pedido");
  echo "entre";
}else{
  echo $array[0];
}
header("location:../carrito.php");
 ?>
