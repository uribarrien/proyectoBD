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
$id = $_GET['id'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}
//-------------ACTUALIZAR-----------
//nombre,precio,costo,sexo,stock,disponible,modelo,tela
$qRefresh = "UPDATE producto SET nombre = '$name', precio = '$price', costo = '$cost',sexo = '$sex',
              stock = '$stock', modelo = '$model', disponible='$aviable', tela = '$cloth'
              WHERE no_producto = '$id';";
mysqli_query($connection,$qRefresh);

$colorP = mysqli_query($connection,"SELECT a.nombre color,a.id_color idC, c.no_producto from producto c join color_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join color a on( b.color_id_color = a.id_color) order by idC");
$num = count($color);
while ($s = mysqli_fetch_array($colorP)) {
  $ban=false;
  for ($i=0; $i < $num; $i++) {
    if ($s['idC'] == $color[$i] && $s['no_producto'] == null) {
      $qInsC = "INSERT into color_producto(color_id_color,producto_no_producto) values($color[$i],$id);";
      mysqli_query($connection,$qInsC);
      echo "insertar";
    }
    if (!in_array($s['idC'],$color) && $s['no_producto'] == $id && $ban==false) {
      $idcB =  $s['idC'];
      $np = $s['no_producto'];
      $qBorrC = "DELETE FROM color_producto where color_id_color = $idcB and producto_no_producto=$np;";
      mysqli_query($connection,$qBorrC);
      echo "El color ".$idcB." no esta relacionado con el producto ".$np." borrar";
      $ban=true;
    }
  }
}

$tallaP = mysqli_query($connection,"SELECT a.talla talla,a.id_talla idT, c.no_producto from producto c join talla_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join talla a on( b.talla_id_talla = a.id_talla) order by idT");
$num2 = count($talla);
while ($s = mysqli_fetch_array($tallaP)) {
  for ($i=0; $i < $num2; $i++) {
    if ($s['idT'] == $talla[$i] && $s['no_producto'] == null) {
      $qInsT = "INSERT into talla_producto(talla_id_talla,producto_no_producto) values($talla[$i],$id);";
      mysqli_query($connection,$qInsT);
      echo "insertar";
    }
    if (!in_array($s['idT'],$talla) && $s['no_producto'] == $id && $ban==false) {
      $idtB =  $s['idT'];
      $np = $s['no_producto'];
      $qBorrT = "DELETE FROM talla_producto where talla_id_talla = $idtB and producto_no_producto=$np;";
      mysqli_query($connection,$qBorrT);
      echo "La talla ".$idtB." no esta relacionado con el producto ".$np." borrar";
      $ban=true;
    }
  }
}

//$qInsC = "INSERT into color_producto(color_id_color,producto_no_producto) values($color,$id);";
//mysqli_query($connection,$qInsC);
//$qInsT = "INSERT into talla_producto(talla_id_talla,producto_no_producto) values($talla,$id);";
//mysqli_query($connection,$qInsT);

$qSelect = "SELECT * FROM producto WHERE no_producto = '$id'";

$result = mysqli_query($connection,$qSelect);
$rows = mysqli_num_rows($result);

if($rows > 0){
  //header("location:producto.php");
  echo "producto.php";
}else{
  //header("location:actualizarProducto.php");
  echo "actualizarProducto.php";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
