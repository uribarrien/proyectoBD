<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos".PHP_EOL;
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}else{
    echo "Conexion exitosa<br>";
}

if (isset($_POST['enviar'])){
  $file = $_FILES['archivo']['name'];
  $copyF = $_FILES['archivo']['tmp_name'];
  $saveF = "copy_$file";
   echo "$copyF";
   if (copy($copyF,$saveF)) {
     echo "se copio correctamente";
   }else{
     echo "Error";
   }
//--------------Insertar desde archivo--------------------------
   if (file_exists($saveF)) {
     $fp = fopen($saveF,"r");
     while ($datos = fgetcsv($fp,0,";")) {
       //echo "$datos[0] $datos[1] <br/>";
       $qInsert = "INSERT INTO descuento (cod_descuento,cantidad_desc) VALUES($datos[0],'$datos[1]')";
       $result = mysqli_query($connection,$qInsert);
       if ($result) {
         echo "Se inserto correctamente";
       }else {
         echo "Fallo de insersion de archivo";
       }
     }
   }else {
     echo "<br/>no existe el archivo";
   }
}




mysqli_close($connection);
 ?>
