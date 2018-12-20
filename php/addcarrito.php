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
$session_email = $_SESSION['correo'];
$query = mysqli_query($connection,"SELECT no_cliente FROM cliente WHERE correo='$session_email'");
$cliente = mysqli_fetch_array($query);
$no_cliente = $cliente['no_cliente'];

$query = mysqli_query($connection,"SELECT no_pedido as id from carrito where cliente_no_cliente=$no_cliente and status='0' ");
$array = mysqli_fetch_array($query);
$no_pedido = $array[0];

$precio = $_SESSION['precio'];
$cantidad = $_POST['cantidad'];
$no_producto = $_SESSION['no_producto'];

if ($no_pedido == null || $no_pedido == ""){
	$insert = "INSERT INTO carrito (subtotal,iva,total,fecha,cliente_no_cliente,status) values (0,0,0,null,$no_cliente,'0');";
	$resultC = mysqli_query($connection,$insert);
	$query = mysqli_query($connection,"SELECT no_pedido as id from carrito where cliente_no_cliente=$no_cliente and status='0' ");
	$carrito = mysqli_fetch_array($query);
	$no_pedido = $carrito['id'];
}

$query2 = mysqli_query($connection,"SELECT * FROM detalle_carrito where carrito_no_pedido = $no_pedido and producto_no_producto=$no_producto");
$array2 = mysqli_fetch_array($query2);
$newcantidad = $array2['cantidad'] + $cantidad;
if ($array2 == null){
	$query = mysqli_query($connection,"INSERT INTO detalle_carrito (carrito_no_pedido,producto_no_producto,precio,cantidad) values ($no_pedido,$no_producto,$precio,$cantidad);");
}else{
	$qUpdate = mysqli_query($connection,"UPDATE detalle_carrito set cantidad=$newcantidad");
}


$_SESSION['id_carrito'] = $no_pedido;
$_SESSION['no_cliente'] = $no_cliente;

header("location: ../carrito.php");

 ?>
