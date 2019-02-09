<?php
$server= 'localhost';
$user = 'proyecto';
$password ='123456789';
$bd = 'proyectobd';

session_start();
$session_email=$_SESSION['correo'];
$connection=mysqli_connect($server,$user,$password,$bd);
if(!$connection){

   echo "Error: No se pudo conectar a la base de datos de MySQL!!".PHP_EOL;
   echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
   echo "error de depuracion".mysqli_connect_error().PHP_EOL;
   exit;
}
$q = intval($_GET['q']);
//$id=$_POST['id'];
$select = mysqli_query($connection,"SELECT * from ciudad where estado_id_estado=$q");
while($ciudades = mysqli_fetch_array($select)){
echo "<option value=".$ciudades['id_ciudad'].">".$ciudades['nombre']."</option>";
}
 ?>
