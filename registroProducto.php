<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$id = $_GET['id'];
$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}
$i = 1;
$talla = mysqli_query($connection,"SELECT * FROM talla;");
$color = mysqli_query($connection,"SELECT * FROM color;");
$descuento = mysqli_query($connection,"SELECT * FROM descuento;");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro Producto</title>
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
                    <a class="nav-link" href="registroProveedor.html">Registro proveedor
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

      <form class="row" action="php/registroProducto.php?id=<?php echo $id; ?>" method="post">
        <div class="col-md order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Características del producto</span>
          </h4>
          <br>
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="sexo">Sexo</label>
                <input type="text" class="form-control"  id="sexo" name="sexo" placeholder="" value="" >
              </div>
                <div class="col-md mb-3">
                <label for="color">Color <span class="text-muted"></span></label>
                <!--<input type="text" name="color" class="form-control" id="color" placeholder="">-->
                <select name="color" class="form-control" id="firstName">
                    <option selected hidden>Color</option>
                    <?php while ($cl = mysqli_fetch_array($color)) { ?>
                    <option value="<?php echo $cl['id_color'];?>"><?php echo $cl['nombre']; ?></option>
                  <?php } ?>
                </select>
            </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="talla">Talla</label>
                <!--<input type="text" name="talla" class="form-control" id="talla" placeholder="" value="" >-->
                <select name="talla" class="form-control" id="firstName">
                    <option selected hidden>Talla</option>
                    <?php while ($size = mysqli_fetch_array($talla)) { ?>
                    <option value="<?php echo $size['id_talla'];?>"><?php echo $size['talla']; ?></option>
                  <?php } ?>
                </select>
              </div>

<!-- CCCEEEEECCCCYYY             AGREGA ESTO POR FAVORRRR, SI LO AGREGO YO SE DESACOMODA TODO, ARREGLALO PLEACE
             <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="descuento">Descuento</label>
                  <input type="text" name="talla" class="form-control" id="talla" placeholder="" value="" >
                  <select name="descuento" class="form-control" id="firstName">
                      <option selected hidden>Descuento</option>
                      <?php while ($des = mysqli_fetch_array($descuento)) { ?>
                      <option value="<?php echo $des['cod_descuento'];?>"><?php echo $des['cantidad_desc']; ?></option>
                    <?php } ?>
                  </select>
                </div>-->

            </div>
            <div class="row">
                  <div class="col-md-6 mb-3">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" placeholder="" value="" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="tela">Tipo de material</label>
                <input type="text" name="tela" class="form-control" id="tela" placeholder="" value="" >
              </div>
            </div>


            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
        </div>
        <div class="col-md order-md-1">
          <h4 id="text_izq" class="mb-3 text-muted">Producto</h4>
          <br>
          <div class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre">Nombre<span class="text-muted"></span></label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" id="precio" placeholder="" value="" >

              </div><br>

            </div>
                <div class="row">

              <div class="col-md-6 mb-3">
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" id="cantidad" placeholder="" value="" >
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
