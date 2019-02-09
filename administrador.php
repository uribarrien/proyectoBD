<?php
session_start();
$session_email=$_SESSION['correo'];
if($session_email==null || $session_email==''){
    echo "Usted no puede entrar a esta página, necesita iniciar una sesión";
    header("location:index.php");
    die();
}
 ?>
<!DOCTYPE html>
<html id="full">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/util.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="css/css_playerasH/playerasH.css">

    </head>
    <body id="todo">
        <header>
		<!-- Header desktop -->
            <div class="container-menu-desktop">
                <!-- Topbar -->
                <div>
                        <h1>Quetzal</h1>
                </div>

                <div>
                    <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
                        <a id="cont_nav" class="navbar-brand" href="index.php">Inicio</a>

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
                  <li class="nav-item">
                    <a class="nav-link" href="registroProveedor.php">Registro proveedor
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
                        </div>
                    </nav>
                    </div>
            </div>
	    </header>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-2 h-full m-t-30">
                    <div id="menu_izq" class="container-fluid">
                        <div class="row m-b-25 p-l-0">
                            <p id="activo" class="cl3 ltext-106 hov-cl2 trans-08">REPORTES</p>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteProveedor.php">Proveedores</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteEnviosFecha.php">Envíos por fecha</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteEnvioStatus.php">Envíos por status</a>
                        </div>
                      
                         <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteVentasPorCantidad.php">Ventas por cantidad</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteVentasPorDia.php">Ventas por día</a>
                        </div>
                          <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteVentasPorMes.php">Ventas por mes</a>
                        </div>
                          <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteProducto.php">Productos</a>
                        </div>
                         <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-108 hov-cl2 trans-08" href="reporteCliente.php">Clientes</a>
                        </div>

                    </div>
                </div>

                <div id="contenedor_imagenes" class="col-md-8 m-t-30 m-l-60">
                    <h1  class="cl3 ltext-106 hov-cl2 trans-08">Bienvenido!</h1>
                   <!-- ************************RENGLON************************************************-->
                    <div class="row m-t-30 m-b-30">
                       <!--******************** 1 IMAGEN ****************************-->
                        <div class="" >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img/admin.jpg" alt="IMG-PRODUCT">


                                </div>


                            </div>
                        </div>


                    <!-- ******************************termina un renglon **********************************-->
                </div>


            </div>

        </div>
        <footer class="footer">

            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Acerca de nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">Copyright @2017 | <a href="index.php">QUETZAL</a></p>

                <ul class="social_footer_ul">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>

            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
</html>
