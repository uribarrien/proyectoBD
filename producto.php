<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";
session_start();
$session_email=$_SESSION['correo'];
if($session_email==null || $session_email==''){
    echo "Usted no puede entrar a esta página, necesita iniciar una sesión";
    header("location:index.php");
    die();
}
$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
$i = 0;
$datos = mysqli_query($connection, "SELECT * FROM producto;");
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>Productos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


     <link rel="stylesheet" href="css/css_administrador/tablasProv_Us.css"></head>
<body id="todo">
    <header>
                <div>
                    <h1>QUETZAL</h1>
                </div>
                <!-- BARRA DE NAVEGACIÓN-->
                <div>
                <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
                    <a id="cont_nav" class="navbar-brand" href="index.php">Inicio</a>
                    <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="administrador.php">Mi cuenta </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="usuarios.php">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proveedores.php">Proveedores</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link active" href="producto.php">Productos</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="cerrar_sesion.php">Cerrar sesión</a>
                            </li>
                        </ul>

                    </div>
                </nav>
                </div>
            </header>
    <div>
        <table class="table">
  <thead class="barra">
    <tr>
      <th>No. Producto</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Costo</th>
      <th>Sexo</th>
      <th>Stock</th>
      <th>Disponible</th>
      <th>Modelo</th>
      <th>Tela</th>
      <th>Descuento</th>
      <th>Actualizar</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($dt = mysqli_fetch_array($datos)) { ?>
    <tr>
      <th scope="row"><?php echo $dt["no_producto"]; ?></th>
      <td><?php echo $dt["nombre"]; ?></td>
      <td><?php echo $dt["precio"]; ?></td>
      <td><?php echo $dt["costo"]; ?></td>
      <td><?php echo $dt["sexo"]; ?></td>
      <td><?php echo $dt["stock"]; ?></td>
      <td><?php echo $dt["disponible"]; ?></td>
      <td><?php echo $dt["modelo"]; ?></td>
      <td><?php echo $dt["tela"]; ?></td>
      <td><?php $id = $dt["no_producto"]; $q = mysqli_query($connection, "SELECT a.cantidad_desc descuento FROM descuento a join producto b where b.descuento_cod_descuento = a.cod_descuento and b.no_producto=$id;;");
            $k = mysqli_fetch_array($q);
            echo $k["descuento"]."%"; ?></td>
      <td><a href="actualizaProducto.php?id=<?php echo $dt['no_producto']; ?>"><img src="img/actualizarUsuario.png"></a>
    </tr>
    <?php $i = $i + 1; } ?>
  </tbody>
</table>

    </div>

    </body>
</html>
