<?php
session_start();
error_reporting(0);
$session_email=$_SESSION['correo'];
if($session_email==null || $session_email==''){
    echo "Usted no puede entrar a esta página, necesita iniciar una sesión";
    header("location:index.php");
    die();

}
session_destroy();
session_start();
$_SESSION['correo']=null;
header("location:index.php");
 ?>
