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
$idP = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}
//---------------------------Insert---------------------------
//nombre,precio,costo,sexo,stock,disponible,modelo,tela
$qInsert = "INSERT INTO producto (nombre,precio,costo,sexo,stock,disponible,modelo,tela)
            VALUES('$name',$price,$cost,'$sex',$stock,$aviable,'$model','$cloth')";
mysqli_query($connection,$qInsert);

$qSelect = "SELECT * FROM producto WHERE nombre='$name' AND precio=$price AND costo=$cost AND sexo='$sex' AND stock='$stock' AND disponible=$aviable AND modelo='$model' AND tela='$cloth';";
$ins = mysqli_query($connection,$qSelect);
$qSel = mysqli_fetch_array($ins);
$id = $qSel['no_producto'];
echo $id." id producto";
mysqli_query($connection,"CALL insertaPP($id,$idP)");

$colorP = mysqli_query($connection,"SELECT a.nombre color,a.id_color idC, c.no_producto from producto c join color_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join color a on( b.color_id_color = a.id_color) order by idC");
$num = count($color);
while ($s = mysqli_fetch_array($colorP)) {
  $ban=false;
  for ($i=0; $i < $num; $i++) {
    $colorI = $color[$i];
    $idC = $s['idC'];
    $noP = $s['no_producto'];
      mysqli_query($connection,"CALL `insertarColor`($idC, $colorI, $noP, $id);");
  }
}
$tallaP = mysqli_query($connection,"SELECT a.talla talla,a.id_talla idT, c.no_producto from producto c join talla_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join talla a on( b.talla_id_talla = a.id_talla) order by idT");
$num2 = count($talla);
while ($s = mysqli_fetch_array($tallaP)) {
  for ($i=0; $i < $num2; $i++) {
    $idT = $s['idT'];
    $tallaI = $talla[$i];
    $noP = $s['no_producto'];
      mysqli_query($connection,"CALL insertarTalla($idT,$tallaI, $noP, $id)");
  }
}
$rows = mysqli_num_rows($ins);
if($rows > 0){
  header("location:../producto.php");
}else{
  header("location:../proveedores.php");
}

mysqli_free_result($result);
mysqli_close($connection);
?>
