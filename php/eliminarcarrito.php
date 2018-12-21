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

//lo que se va a borrar
$query = mysqli_query($connection,"SELECT * from detalle_carrito where producto_no_producto = $no_producto and carrito_no_pedido = $no_pedido");
$array = mysqli_fetch_array($query);
$cantdc = $array['cantidad'];
$preciodc = $array['precio'];
$subtotaldc = $cantdc * $preciodc;
$ivadc = $subtotaldc * 0.16;
$totaldc = $ivadc + $subtotaldc;


//para actualizar el Subtotal, iva y total
$query = mysqli_query($connection,"SELECT * FROM carrito WHERE no_pedido = $no_pedido");
$array = mysqli_fetch_array($query);
$subtotalc = $array['subtotal'];
$ivac = $array['iva'];
$totalc = $array['total'];

$subtotal = $subtotalc - $subtotaldc;
$iva = $ivac - $ivadc;
$total = $totalc - $totaldc;

$query = mysqli_query($connection,"UPDATE carrito set subtotal = $subtotal, iva = $iva, total = $total where no_pedido = $no_pedido ");

// eliminar del carrito
$query = mysqli_query($connection,"DELETE FROM detalle_carrito where producto_no_producto = $no_producto and carrito_no_pedido = $no_pedido");


$query = mysqli_query($connection,"SELECT * FROM detalle_carrito where carrito_no_pedido = $no_pedido");
$array = mysqli_fetch_array($query);
if ($array == null){
  $query = mysqli_query($connection,"DELETE FROM carrito where no_pedido = $no_pedido");
  echo "entre";
}
header("location:../carrito.php");
 ?>
