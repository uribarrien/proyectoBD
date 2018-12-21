<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

session_start();
$id_cliente = $_SESSION['no_cliente'];
$no_pedido = $_SESSION['no_pedido'];
$_SESSION['no_cliente'] =$id_cliente;
$_SESSION['no_pedido'] = $no_pedido;

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else{
  $fech = mysqli_query($connection,"SELECT curdate();");
  $arr = mysqli_fetch_array($fech);
  $fecha = $arr[0];
  $query6 = mysqli_query($connection,"SELECT adddate(curdate(),interval 3 day)");
  $arr2 = mysqli_fetch_array($query6);
  $fecha_llegada = $arr2[0];
$query5 = "INSERT INTO envio(fecha_envio,fecha_llegada,paquteria,estatus) values('$fecha','$fecha_llegada','DHL','No enviado')";
mysqli_query($connection,$query5);
$envio = mysqli_query($connection,"SELECT last_insert_id()");
$env = mysqli_fetch_array($envio);
$no_envio = $env[0];
$actualizaCarrito = mysqli_query($connection,"UPDATE carrito set envio_no_envio=$no_envio, fecha='$fecha' where no_pedido=$no_pedido");
$_SESSION['no_envio'] = $no_envio;
$arr4 = mysqli_query($connection,"SELECT * from envio where no_envio = $no_envio");
$envio = mysqli_fetch_array($arr4);
$arr3 = mysqli_query($connection,"SELECT * from cliente where no_cliente = $id_cliente");
$cliente = mysqli_fetch_array($arr3);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ENVIOS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/css_envios/envios.css">

    </head>
    <body class="bg-light">
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
                  <li class="nav-item active">
                    <a class="nav-link" href="hombres.php">Ropa para hombre <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ropaMujer.html">Ropa para mujer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="loginUsuario.html">Iniciar Sesion</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
              </div>
            </nav>

       </header>
    <div class="container">
      <div id="cont_titulo" class="py-1 text-center">
        <h2>ENVIOS</h2>
        <p class="lead">A CONTINUACIÓN SE MUESTRA TODA LA INFORMACIÓN DEL ENVIO</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Estatus del envio</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ESTATUS : </h6>
              </div>
              <strong class="text-muted"><?php echo $envio['estatus']; ?></strong>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Ciudad destino</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted"><?php
              $idCd = $cliente['ciudad_id_ciudad'];
              $cd = mysqli_query($connection, "SELECT * FROM ciudad WHERE id_ciudad=$idCd;");
              $res = mysqli_fetch_array($cd);
              echo $res['nombre'];
               ?></span>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">DETALLES DEL ENVIO</h4>
          <form class="needs-validation" method="post" novalidate action="php/actualizaEnvio.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">NUMERO DE ENVIO</label>
                <input type="text" class="form-control" id="firstName" placeholder="" name="no_envio" value=<?php echo $no_envio; ?> >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">PESO DE ENVIO</label>
                <?php
                $query = "SELECT * FROM detalle_carrito where carrito_no_pedido = $no_pedido";
                $array = mysqli_query($connection,$query);
                $cantidadTotal = 0;
                while ($s=mysqli_fetch_array($array)) {
                  $cantidad = $s['cantidad'];
                  $cantidadTotal = $cantidadTotal + $cantidad;
                  $no_producto = $s['producto_no_producto'];
                  $query2 = "SELECT stock from producto where no_producto=$no_producto";
                  $query3 = mysqli_query($connection,$query2);
                  $stock = mysqli_fetch_array($query3);
                  $nuevo_stock = $stock[0]-$cantidad;
                  if ($nuevo_stock>0) {
                    $query4 = "UPDATE producto set stock = $nuevo_stock where no_producto = $no_producto";
                    mysqli_query($connection,$query4);
                  }else {
                    $query4 = "UPDATE producto set stock = 0 where no_producto = $no_producto";
                    mysqli_query($connection,$query4);
                  }
                }
                $peso = $cantidadTotal*100;
                 ?>
                <input type="text" class="form-control" id="lastName" name="peso" placeholder="" value="<?php echo $peso?>gr." >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">FECHA DE ENVIO</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value=<?php echo $envio['fecha_envio']; ?> >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">FECHA DE LLEGADA</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value=<?php echo $envio['fecha_llegada']; ?>  >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="firstName">CALLE <span class="text-muted"></span></label>
                <input type="text" class="form-control" id="firstName" name="calle" placeholder="" value=<?php echo $cliente['calle']; ?> >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">NUMERO DE EXTERIOR</label>
                <input type="text" class="form-control" id="firstName" name="no_exterior" placeholder="" value=<?php echo $cliente['no_exterior']; ?> >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
                <label for="firstName">COLONIA <span class="text-muted"></span></label>
                <input type="text" class="form-control" id="firstName" name="colonia" placeholder="" value=<?php echo $cliente['colonia']; ?>>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">CODIGO POSTAL</label>
                <input type="text" class="form-control" id="firstName" name="codigo_postal" placeholder="" value=<?php echo $cliente['codigo_postal']; ?> >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
            <label for="ciudad">CIUDAD</label>
            <select name="ciudad" class="form-control" id="firstName" >
                <?php
                $cd=mysqli_query($connection,"SELECT * FROM ciudad");
                 while ($res = mysqli_fetch_array($cd)) { ?>
                <option value="<?php echo $res['id_ciudad'];?>"><?php echo $res['nombre']; ?></option>
              <?php } $idCd = $cliente['ciudad_id_ciudad'];
              $cd = mysqli_query($connection, "SELECT * FROM ciudad WHERE id_ciudad=$idCd;");
              $res = mysqli_fetch_array($cd);?>
              <option selected hidden value="<?php $res['id_ciudad']?>">
                <?php
              echo $res['nombre'];
               ?></option>
            </select>
          </div>
            </div>


            <hr class="mb-4">
            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
          </form>
        </div>
      </div>

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
<?php
} ?>
