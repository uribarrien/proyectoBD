<?php

$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$client = $_POST['correo'];
$pass = $_POST["password"];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
else{
    echo "Conexion exitosa<br>";
}


//--------------------SESIONES------------------------
$qClient = "SELECT * FROM cliente WHERE correo = '$client' AND contrasena = sha('$pass')";

$resultC = mysqli_query($connection,$qClient);
$rowsC = mysqli_num_rows($resultC);

session_start();
$_SESSION['correo']=$client;
$bandera = $_SESSION['bandera'];
if($rowsC > 0){
  if ($client == "Admin@gmail.com"){
    header("location:../administrador.php");
  }else{
    if($bandera == 1){
      $array = mysqli_fetch_array($resultC);
      $_SESSION['no_cliente']=$array[0];
      $bandera=0;
      header("location:../carrito.php");
    }else{
      header("location:../informacionPersonal.php");
    }
  }

}else{
    echo "REQUIERE INICIAR SESION";
    header("location:../loginUsuario.html");
}

mysqli_free_result($resultC);
mysqli_close($connection);

?>
