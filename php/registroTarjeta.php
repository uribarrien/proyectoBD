<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$nCard = $_POST['tarjeta'];
$monthExp = $_POST['mes_exp'];
$yearExp = $_POST['ano_exp'];
$sNum = $_POST['cvv'];
$type = $_POST['tipo'];
$nameO = $_POST['nombre_th'];
$lastNameF = $_POST['apellidopat_th'];
$lastNameM = $_POST['apellidomat_th'];
$nameBanc = $_POST['banco'];

session_start();
$id_cliente = $_SESSION['no_cliente'];
$no_pedido = $_SESSION['no_pedido'];
$no_envio = $_SESSION['no_envio'];
$_SESSION['no_cliente'] = $id_cliente;
$_SESSION['no_pedido'] = $no_pedido;
$_SESSION['no_envio'] = $no_envio;

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

$fecha = mysqli_query($connection,"SELECT curdate();");
$date = mysqli_fetch_array($fecha);
$fechaCompra = $date[0];

$result = mysqli_query($connection,$qSelect);
$tar=mysqli_fetch_array($result);
$rows = mysqli_num_rows($result);
$id_tar = $tar['id_tarjeta'];
$actualizaCliente = mysqli_query($connection,"UPDATE cliente set tarjeta_id_tarjeta=$id_tar WHERE no_cliente=$id_cliente");
$actualizaCarrito = mysqli_query($connection,"UPDATE carrito set status='1',fecha='$fechaCompra' where no_pedido=$no_pedido");
$actualizaEnvio = mysqli_query($connection,"UPDATE envio set estatus='En camino' where no_envio=$no_envio");
if($rows > 0){
  echo "Tarjeta registrada";
  header("location:../historialDeCompra.php");
}else{
  echo "No se pudo registrar tarjeta";
  header("location:../registroTarjeta.php");
}

mysqli_free_result($result);
mysqli_close($connection);

?>
