<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

session_start();
$id_cliente = $_SESSION['no_cliente'];
$no_pedido = $_SESSION['no_pedido'];
$no_envio = $_SESSION['no_envio'];

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}
$query = mysqli_query($connection,"SELECT * from cliente where no_cliente=$id_cliente");
$datos_cliente = mysqli_fetch_array($query);
$tar = mysqli_query($connection,"SELECT tarjeta_id_tarjeta from cliente where no_cliente=$id_cliente");
$tar = mysqli_num_rows($tar);
$t = mysqli_fetch_array($tar);
$id_tarjeta = $t[0];
if ($tar > 0 || $id_tarjeta!=NULL) {
  $tarjeta = mysqli_query($connection,"SELECT * tarjete where id_tarjeta = $id_tarjeta");
  $datos_tarjeta = mysqli_fetch_array($tarjeta);
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
        <link rel="stylesheet" href="css/css_seleccion_pago/css_pago.css">
    </head>

    <body id="todo" class="bg">
    <header>
      <h1>QUETZAL</h1>
                  <!-- MENU SUPERIOR -->
      <div>
          <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
              <a id="cont_nav" class="navbar-brand" href="index.html">Inicio</a>
              <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item ">
                          <a class="nav-link" href="hombres.html">Ropa para hombre </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="ropaMujer.html">Ropa para mujer</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="loginUsuario.html">Iniciar Sesion</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>

       </header>
                   <!-- FIN BARRA DE NAVEGACIÓN-->
                   <!-- FORMULARIOS-->
    <div id="contenedor_forms" class="container">
      <div id="cont_titulo" class="py-1 text-center">
      </div>

      <form class="row" action="php/?id=<?php echo $id; ?>" method="post">
        <div class="col-md order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Información del propietario</span>
          </h4>
          <br>
            <div class="row">
                  <div class="col-md-6 mb-3">
                <label for="nombre_th">Nombre</label>
                <input type="text" name="nombre_th" class="form-control" id="nombre_th" placeholder="" value=
                <?php
                if ($tar > 0 || $id_tarjeta!=NULL) {
                  echo $datos_tarjeta['nombre_th'];
                }
                else{
                  echo $datos_cliente['nombre'];
                }
                ?> >
              </div>
                 </div>
            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="apellidopat_th">Apellido paterno</label>
              <input type="text" name="apellidpat_th" class="form-control" id="apellidopat_th" placeholder="" value=
              <?php
              if ($tar > 0 || $id_tarjeta!=NULL) {
                echo $datos_tarjeta['apPaterno_th'];
              }
              else{
                echo $datos_cliente['apellido_paterno'];
              }
              ?>>
            </div>
              <div class="col-md-6 mb-3">
                <label for="apellidomat_th">Apellido materno</label>
                <input type="text" name="apellidomat_th" class="form-control" id="apellidomat_th" placeholder="" value=<?php
                if ($tar > 0 || $id_tarjeta!=NULL) {
                  echo $datos_tarjeta['apMaterno_th'];
                }
                else{
                  echo $datos_cliente['apellido_materno'];
                }
                ?> >
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
                <input type="text" name="tarjeta" class="form-control" id="tarjeta" placeholder="" value="">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="mes_exp">Mes de expiración</label>
                <select name="mes_exp" class="form-control" id="mes_exp" name="mes">
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
                    <?php
                    if ($tar > 0 || $id_tarjeta!=NULL) {?>
                      <option selected hidden><?php $datos_tarjeta['mes_exp'] ?></option>
                    <?php
                    }else{?>
                      <option selected hidden>Mes</option>
                    <?php}?>
                </select>


              </div><br>
                <div class="col-md-6 mb-3">
                    <label for="ano_exp">Año de expiración</label>
                        <select name="ano_exp" class="form-control" id="ano_exp" name="anio">
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                          <?php
                          if ($tar > 0 || $id_tarjeta!=NULL) {?>
                            <option selected hidden><?php $datos_tarjeta['anio_exp'] ?></option>
                          <?php }else{?>
                            <option selected hidden>Anio</option>
                          <?php}?>
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
                            <option selected>Visa</option>
                            <option selected >Mastercard</option>
                        </select>
              </div>
              </div>
              <div class="row">

            <div class="col-md-6 mb-3">
              <label for="cvv">Banco</label>
              <input type="text" name="banco" class="form-control" id="banco" placeholder="" value="" >
            </div>
            </div>
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
