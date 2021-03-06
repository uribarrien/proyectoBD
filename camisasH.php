<!DOCTYPE html>
<html id="full">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Camisas para hombre</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="css/css_playerasH/playerasH.css">
        <link rel="stylesheet" type="text/css" href="css/css_index/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


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


                        <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" id="txt-menu" href="index.php">Inicio </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" id="txt-menu" href="hombres.php">Ropa para hombre </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="txt-menu" href="mujeres.php">Ropa para mujer</a>
                                </li>
                                <?php
                                session_start();
                                  $session_email=$_SESSION['correo'];
                                  if($session_email==null || $session_email==''){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="txt-menu" href="loginUsuario.html">Iniciar Sesión</a>
                                    </li>

                                <?php
                              }else{
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="txt-menu" href="informacionPersonal.php">Mi cuenta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="txt-menu" href="cerrar_sesion.php">Cerrar Sesión</a>
                                    </li>

                                <?php
                              }
                                ?>
        												<li >
        														<a href="carrito.php" style="font-size: 40px; color: gray ;"><i class="fas fa-shopping-cart  m-l-370 p-l-370"></i></a>
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
                            <a class="cl3 ltext-106 hov-cl2 trans-08" href="playerasH.php">PLAYERAS</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a id="activo" class="cl3 ltext-106 hov-cl2 trans-08" href="camisasH.php">CAMISAS</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-106 hov-cl2 trans-08" href="chamarrasH.php">CHAMARRAS</a>
                        </div>
                        <div class="row m-b-25 p-l-0">
                            <a class="cl3 ltext-106 hov-cl2 trans-08" href="pantalonesH.php">PANTALONES</a>
                        </div>

                    </div>
                </div>
                <div id="contenedor_imagenes" class="col-md-8 m-t-30 m-l-60">

                    <!-- ************************RENGLON************************************************-->
                    <div class="row m-t-30 m-b-30">
                        <!--******************** 1 IMAGEN ****************************-->
                        <div class="col-md-4 " >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img_tienda/camisas/1_r.png" alt="IMG-PRODUCT">

                                    <a href="detalle_producto.php?id=18" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver camisa
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-5 txt-center">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="detalle_producto.php?id=18" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Camisa estampada
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--****************************TERMINA 1 IMAGEN (3 MAX) **************************-->
                        <div class="col-md-4 " >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img_tienda/camisas/2_r.png" alt="IMG-PRODUCT">

                                    <a href="detalle_producto.php?id=19" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver camisa
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-5">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="detalle_producto.php?id=19" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Camisa blanca punteada
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-md-4 " >
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img_tienda/camisas/3_r.png" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=20" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    Ver camisa
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-5">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=20" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Camisa blanca
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>


                    </div>

                    <!-- ******************************termina un renglon **********************************-->
                    <!-- ************************RENGLON************************************************-->
                    <div class="row m-b-50">
                        <!--******************** 1 IMAGEN ****************************-->
                        <div class="col-md-4 " >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img_tienda/camisas/4_r.png" alt="IMG-PRODUCT">

                                    <a href="detalle_producto.php?id=21" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver camisa
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-5">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="detalle_producto.php?id=21" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Camisa azul punteada
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--****************************TERMINA 1 IMAGEN (3 MAX) **************************-->
                        <div class="col-md-4 " >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img_tienda/camisas/5_r.png" alt="IMG-PRODUCT">

                                    <a href="detalle_producto.php?id=22" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver camisa
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-5">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="detalle_producto.php?id=22" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Camisa estampada floreal
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 " >
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="img_tienda/camisas/6_r.png" alt="IMG-PRODUCT">

                                    <a href="detalle_producto.php?id=23" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                        Ver camisa
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-5">
                                    <div id="" class="block2-txt-child1 flex-col-l">
                                        <a href="detalle_producto.php?id=23" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Camisa negra lisa
                                        </a>
                                    </div>
                                </div>
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
                <p class="text-center">Copyright @2018 | <a href="index.php">QUETZAL</a></p>

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
