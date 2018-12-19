<?php
$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$name = $_POST['nombre'];
$price = $_POST['precio'];
$cost = $_POST['costo'];
$sex = $_POST['sexo'];
$stock = $_POST['cantidad'];
$talla = $_POST['talla'];
$color = $_POST['color'];
$aviable = $_POST['disponible'];
$model = $_POST['modelo'];
$cloth = $_POST['tela'];
$discount = $_POST['descuento'];
$id = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else{
//-------------ACTUALIZAR-----------
$qRefresh = "UPDATE producto SET nombre = '$name', precio = $price, costo = $cost,sexo = '$sex',
              stock = $stock, modelo = '$model', disponible = $aviable, tela = '$cloth', descuento_cod_descuento = $discount
              WHERE no_producto = '$id';";
mysqli_query($connection,$qRefresh);

$colorP = mysqli_query($connection,"SELECT a.nombre color,a.id_color idC, c.no_producto from producto c join color_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join color a on( b.color_id_color = a.id_color) order by idC");
$num = count($color);
while ($s = mysqli_fetch_array($colorP)) {
  $ban=false;
  for ($i=0; $i < $num; $i++) {
    $idC=$s['idC'];
    $noP=$s['no_producto'];
    $colorI=$color[$i];
    if ($noP==null) {$noP=0;}
    mysqli_query($connection,"CALL `insertarColor`($idC, $colorI, $noP, $id);");
    if (!in_array($s['idC'],$color) && $ban==false) {
      mysqli_query($connection,"CALL borrarColor($idC, $noP, $id)");
      $ban = true;
    }
  }
}
$tallaP = mysqli_query($connection,"SELECT a.talla talla,a.id_talla idT, c.no_producto from producto c join talla_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join talla a on( b.talla_id_talla = a.id_talla) order by idT");
$num2 = count($talla);
while ($s = mysqli_fetch_array($tallaP)) {
  $ban=false;
  for ($i=0; $i < $num2; $i++) {
      $idT=$s['idT'];
      $noP=$s['no_producto'];
      $tallaI=$talla[$i];
      if ($noP==null) {$noP=0;}
      mysqli_query($connection,"CALL insertarTalla($idT,$tallaI, $noP, $id)");
    if (!in_array($s['idT'],$talla)&& $ban==false) {
      mysqli_query($connection,"CALL borrarTalla($idT,$noP,$id)");
      $ban=true;
    }
  }
}
$qSelect = "SELECT * FROM producto WHERE no_producto = '$id'";
$result = mysqli_query($connection,$qSelect);
$datos = mysqli_fetch_array($result);
if ($datos['nombre'] = "$name" && $datos['precio'] = $price && $datos['costo'] = $cost && $datos['sexo'] = "$sex"
    && $datos['stock'] = $stock && $datos['modelo'] = "$model" && $datos['disponible'] = $aviable && $datos['tela'] = "$cloth"
    && $datos['descuento_cod_descuento'] = $discount) {
  $rows = mysqli_num_rows($result);
}else {
  $rows = 0;
}
if($rows > 0){
    header("location:../producto.php");
}else{
  header("location:../actualizarProducto.php");
}

mysqli_free_result($result);
mysqli_close($connection);
}
?>
