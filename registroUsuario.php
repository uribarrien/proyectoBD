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
$datos = mysqli_query($connection, "SELECT * FROM cliente WHERE no_cliente = $id;");
$data = mysqli_fetch_array($datos);
$cd = mysqli_query($connection, "SELECT * FROM ciudad;");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro Usuario</title>
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

      <form class="row" action="php/actualizaCliente.php?id=<?php echo $id; ?>" method="post">
        <div class="col-md order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Dirección</span>
          </h4>
          <br>
            <div class="mb-3">
                <label for="calle">Calle<span class="text-muted"></span></label>
                <input type="text" name="calle" class="form-control" id="calle" placeholder="" value="<?php echo $data['calle']; ?>">
            </div>
               <div class="row">

              <div class="col-md-6 mb-3">
                <label for="no_exterior">No. exterior</label>
                <input type="text" name="no_exterior" class="form-control" id="no_exterior5" placeholder="" value="<?php echo $data['no_exterior']; ?>" >
            </div>
              <div class="col-md-6 mb-3">
                <label for="colonia">Colonia</label>
                <input type="text" name="colonia" class="form-control" id="colonia" placeholder="" value="<?php echo $data['colonia']; ?>" >
                    </div>
              </div>
                             <div class="row">

              <div class="col-md-6 mb-3">
                <label for="ciudad">Ciudad</label>
                <select name="ciudad" class="form-control" id="firstName" >
                    <?php while ($res = mysqli_fetch_array($cd)) { ?>
                    <option value="<?php echo $res['id_ciudad'];?>"><?php echo $res['nombre']; ?></option>
                  <?php }  $id=$data["no_cliente"];
                  $q = mysqli_query($connection, "SELECT a.nombre cd, a.id_ciudad FROM ciudad a JOIN cliente b ON b.ciudad_id_ciudad=a.id_ciudad AND b.no_cliente=$id;");
                        $k = mysqli_fetch_array($q);?>
                  <option selected hidden value="<?php echo $k['id_ciudad'];?>"><?php echo $k["cd"]; ?></option>
                </select>
            </div>
              <div class="col-md-6 mb-3">
                <label for="codigo_postal">Código postal</label>
                <input type="text" name="codigo_postal" class="form-control" id="codigo_postal" placeholder="" value="<?php echo $data['codigo_postal']; ?>" >
                    </div>
              </div>
          <br>
            <br>

            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit" >ACTUALIZAR</button>
        </div>
        <div class="col-md order-md-1">
          <h4 id="text_izq" class="mb-3 text-muted">Información del usuario</h4>
          <br>
          <div class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre">Nombre<span class="text-muted"></span></label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" value="<?php echo $data['nombre']; ?>">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="apellido_paterno">Apellido paterno</label>
                <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno" placeholder="" value="<?php echo $data['apellido_paterno']; ?>" >

              </div><br>
                <div class="col-md-6 mb-3">
                <label for="apellido_materno">Apellido materno</label>
                <input type="text" name="apellido_materno" class="form-control" id="apellido_materno" placeholder="" value="<?php echo $data['apellido_materno']; ?>" >

              </div><br>

            </div>
         <div class="row">
                  <div class="col-md-6 mb-3">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="" value="<?php echo $data['telefono']; ?>" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="correo">Email</label>
                <input type="text" name="correo" class="form-control" id="correo" placeholder="" value="<?php echo $data['correo']; ?>" >
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="sexo">Sexo</label>
                <input type="text" name="sexo" class="form-control" id="sexo" placeholder="" value="<?php echo $data['sexo']; ?>" >
              </div>
              <div class="col-md-6 mb-3">
            <label for="fecha_nac">Fecha de nacimiento</label>
            <input type="text" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="" value="<?php echo $data['fecha_nac']; ?>" >
          </div>
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
      <hr class="mb-4">
    </div>
  </body>
</html>
