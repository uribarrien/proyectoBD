<?php

 $server = "localhost";
 $db = "proyectobd";
 $user = "proyecto";
 $password = "123456789";
 $name = $_POST['nombre'];
 $apePat = $_POST['apellido_paterno'];
 $apeMat = $_POST['apellido_materno'];
 $email = $_POST['correo'];
 $passwd = $_POST['contrasena'];

 $connection = mysqli_connect($server,$user,$password,$db);
 if(!$connection){

    echo "Error: No se pudo conectar a la base de datos de MySQL!!".PHP_EOL;
    echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
    echo "error de depuracion".mysqli_connect_error().PHP_EOL;
    exit;

}

echo "Exito: Se realizo una conexion apropiada a la base de datos. Ahora la base de datos esta lista para usarse".PHP_EOL;
echo "Informacion del Host:".mysqli_get_host_info($connection).PHP_EOL;

$qInsert = "INSERT INTO cliente(nombre,apellido_paterno,apellido_materno,correo,contrasena) VALUES('$name','$apePat','$apeMat','$email',sha('$passwd'));";

mysqli_query($connection,$qInsert);

$qSelect = "SELECT * FROM cliente WHERE correo = '$email' and contrasena = sha('$passwd');";
$result = mysqli_query($connection,$qSelect);
$row = mysqli_num_rows($result);

if ($row > 0){
	header("location:../informacionPersonal.php");
} else{
	header("location:../registroCliente.html");
}
?>
