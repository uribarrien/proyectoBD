<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";


$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
session_start();
$session_email=$_SESSION['correo'];
if($session_email==null || $session_email==''){
    echo "Usted no puede entrar a esta página, necesita iniciar una sesión";
    header("location:index.php");
    die();

}
$select = mysqli_query($connection,"SELECT * from cliente where correo= '$session_email';");
$array = mysqli_fetch_array($select);
$no_cliente = $array['no_cliente'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Directorio de Direcciones</title>
        <link rel="stylesheet" href="css/css_historialDeCompra/historialDeCompra.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <meta>
    </head>
    <body id="todo" class="bg">
    <header>
           <div>
              <h1>Quetzal</h1>
           </div>
                                           <!-- BARRA DE NAVEGACIÓN-->
           <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
              <a id="cont_nav" class="navbar-brand" href="index.php">Inicio</a>
              <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item  ">
                    <a class="nav-link" href="informacionPersonal.php">Información personal
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="directorioDeDirecciones.php">Directorio de direcciones
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="historialDeCompra.php">Historial de compra
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="txt-menu" href="cerrar_sesion.php">Cerrar Sesión</a>
                  </li>
                  <li >
                      <a href="carrito.php" style="font-size: 40px; color: gray ;"><i class="fas fa-shopping-cart  m-l-370 p-l-370"></i></a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
              </div>
            </nav>

       </header>
                   <!-- FIN BARRA DE NAVEGACIÓN-->
                   <!-- FORMULARIOS-->

    <div id="contenedor_forms" class="container">
        <div><h1 id="title" >Historial de compra</h1></div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numero de pedido</th>
                        <th>Fecha del pedido</th>
                        <th>Estatus</th>
                        <th>Precio total</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $query = mysqli_query($connection,"SELECT * FROM carrito where cliente_no_cliente = $no_cliente and status = '1'");
                  while($array = mysqli_fetch_array($query)){
                   ?>
                    <tr>
                        <th scope="row"><?php echo $array['no_pedido']; ?></th>
                        <td><?php echo $array['fecha']; ?></td>
                        <td>Pedido entregado</td>
                        <td><?php echo "$".$array['total']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- FIN FORMULARIOS-->
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2018 Quetzal</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidad</a></li>
                <li class="list-inline-item"><a href="#">Terminos</a></li>
                <li class="list-inline-item"><a href="#">Soporte</a></li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
