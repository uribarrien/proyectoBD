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

$cd = mysqli_query($connection, "SELECT * FROM ciudad;");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro Proveedor</title>
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
              <a id="cont_nav" class="navbar-brand" href="index.php">Inicio</a>
              <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="administrador.php">Mi cuenta</a>
                  </li>
                  <li class="nav-item  ">
                    <a class="nav-link" href="usuarios.php">Usuarios
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="proveedores.php">Proveedores
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Registro proveedor
                    </a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="producto.php">Productos
                    </a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cerrar_sesion.php">Cerrar sesión
                    </a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
              </div>
            </nav>

       </header>
                   <!-- FIN BARRA DE NAVEGACIÓN-->
                   <!-- FORMULARIOS-->
       <!--  <div id="contenedor_form" class="container col-md-6">
            <div class="col-ld-10 order-md-3 ">-->
    <div id="contenedor_forms" class="container col-md-6">
      <div id="cont_titulo" class="py-1 text-center">
      </div>

      <form class="row" action="php/registroProveedor.php" method="post">
        <div class="col-md order-md-2 mb-4">
            <h4 id="text_izq" class="mb-3 text-muted">Proveedor</h4>
            <div class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="razonsocial">Razón social<span class="text-muted"></span></label>
                <input type="text" name="nombre" class="form-control" id="razonsocial" placeholder="">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" class="form-control" id="rfc" placeholder="" value="" >

              </div><br>

            </div>

          </div>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Dirección</span>
          </h4>
          <br>
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="calle">Calle</label>
                <input type="text" class="form-control"  id="calle" name="calle" placeholder="" value="" >
              </div>
                <div class="col-md mb-3">
                <label for="no_exterior">No. exterior <span class="text-muted"></span></label>
                <input type="text" name="no_exterior" class="form-control" id="no_exterior" placeholder="">
            </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="colonia">Colonia</label>
                <input type="text" name="colonia" class="form-control" id="colonia" placeholder="" value="" >
              </div>

            </div>
            <div class="row">
                  <div class="col-md-6 mb-3">
                <label for="ciudad">Ciudad</label>
                <select name="ciudad" class="form-control" id="firstName">
                    <option selected hidden>Ciudad</option>
                    <?php while ($res = mysqli_fetch_array($cd)) { ?>
                    <option value="<?php echo $res['id_ciudad'];?>"><?php echo $res['nombre']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="codigo_postal">Código postal</label>
                <input type="text" name="codigo_postal" class="form-control" id="codigo_postal" placeholder="" value="" >
              </div>
            </div>


            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
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
