<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

session_start();
$id_cliente = $_SESSION['no_cliente'];
$no_pedido = $_SESSION['no_pedido'];
$no_envio = $_SESSION['no_envio'];
$_SESSION['no_cliente'] = $id_cliente;
$_SESSION['no_pedido'] = $no_pedido;
$_SESSION['no_envio'] = $no_envio;

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else {
$query = mysqli_query($connection,"SELECT * from cliente where no_cliente=$id_cliente");
$datos_cliente = mysqli_fetch_array($query);
$tar = mysqli_query($connection,"SELECT tarjeta_id_tarjeta from cliente where no_cliente=$id_cliente");
$row = mysqli_num_rows($tar);
$t = mysqli_fetch_array($tar);
$id_tarjeta = $t[0];
if ($row > 0 || $id_tarjeta!=NULL) {
  $tarjeta = mysqli_query($connection,"SELECT * from tarjeta where id_tarjeta = $id_tarjeta");
  #$datos_tarjeta = mysqli_fetch_array($tarjeta);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro Tarjeta</title>
        <link rel="stylesheet" href="css/css_directorio_Direcciones/directorioDirecciones.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta>
    </head>

    <body id="todo" class="bg">
    <header>
           <div>
              <h1>QUETZAL</h1>
           </div>
                                           <!-- BARRA DE NAVEGACIÓN-->
           <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
              <a id="cont_nav" class="navbar-brand" href="index.html">Inicio</a>
              <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="administrador.html">Mi cuenta</a>
                  </li>
                  <li class="nav-item  ">
                    <a class="nav-link" href="usuarios.php">Usuarios
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="proveedores.php">Proveedores
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registroProveedor.php">Registro proveedor
                    </a>
                  </li>

                    <li class="nav-item">
                    <a class="nav-link" href="producto.php">Productos
                    </a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar sesión
                    </a>
                  </li>
                </ul>
              </div>
            </nav>

       </header>
                   <!-- FIN BARRA DE NAVEGACIÓN-->
                   <!-- FORMULARIOS-->
    <div id="contenedor_forms" class="container">
      <div id="cont_titulo" class="py-1 text-center">
      </div>

      <form class="row" action="php/registroTarjeta.php?>" method="post">
        <div class="col-md order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Información del propietario</span>
          </h4>
          <br>
            <div class="row">
                  <div class="col-md-6 mb-3">
                <label for="nombre_th">Nombre</label>
                <input type="text" name="nombre_th" value=<?php echo $datos_cliente['nombre'];?> class="form-control" id="nombre_th" placeholder="">
              </div>
                 </div>
            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="apellidopat_th">Apellido paterno</label>
              <input type="text" name="apellidpat_th" value=<?php echo $datos_cliente['apellido_paterno'];?> class="form-control" id="apellidopat_th" placeholder="" >
            </div>
              <div class="col-md-6 mb-3">
                <label for="apellidomat_th">Apellido materno</label>
                <input type="text" name="apellidomat_th" value=<?php echo $datos_cliente['apellido_materno'];?> class="form-control" id="apellidomat_th" placeholder="" >
              </div>
            </div>


            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
        </div>
        <div class="col-md order-md-1">
          <h4 id="text_izq" class="mb-3 text-muted">Información de la tarjeta</h4>
          <br>
          <div class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="tarjeta">No. de tarjeta<span class="text-muted"></span></label>
                <input type="text" name="tarjeta" class="form-control" id="tarjeta" placeholder="">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="mes_exp">Mes de expiración</label>
                <select name="mes_exp" class="form-control" id="mes_exp">
                  <option value="01">Enero</option>
                  <option value="02">Febrero</option>
                  <option value="03">Marzo</option>
                  <option value="04">Abril</option>
                  <option value="05">Mayo</option>
                  <option value="06">Junio</option>
                  <option value="07">Julio</option>
                  <option value="08">Agosto</option>
                  <option value="09">Septiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                  <option selected hidden>Mes</option>
                </select>


              </div><br>
                <div class="col-md-6 mb-3">
                    <label for="ano_exp">Año de expiración</label>
                        <select name="ano_exp" class="form-control" id="ano_exp">
                          <option value="18">2018</option>
                          <option value="19">2019</option>
                          <option value="20">2020</option>
                          <option value="21">2021</option>
                          <option value="22">2022</option>
                          <option value="23">2023</option>
                          <option value="24">2024</option>
                          <option value="25">2025</option>
                          <option value="26">2026</option>
                          <option value="27">2027</option>
                          <option value="28">2028</option>
                          <option value="29">2029</option>
                          <option value="30">2030</option>
                          <option selected hidden>Anio</option>
                        </select>

                </div><br>

            </div>
                <div class="row">

              <div class="col-md-6 mb-3">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" class="form-control" id="cvv" placeholder="" value="" >
              </div>
                    <div class="col-md-6 mb-3">
                        <label for="tipo">Tipo de tarjeta</label>
                        <select name="tipo" class="form-control" id="tipo">
                            <option value="visa">Visa</option>
                            <option value="mastercard" >Mastercard</option>
                            <option selected hidden >Tipo</option>
                        </select>
              </div>
              </div>
              <div class="row">

            <div class="col-md-6 mb-3">
              <label for="banco">Banco</label>
              <input type="text" name="banco" class="form-control" id="banco" placeholder="" value="" >
            </div>
            </div>

            <hr class="mb-4">

            </div>
        </div>

      </form>
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
  </body>
</html>

<?php } ?>
