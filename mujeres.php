<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ropa para Mujer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/css_Hombres/hombres.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/css_index/index.css">

    </head>
    <body id="todo">
        <header>
            <div>
                <h1 id="marca">Quetzal</h1>
            </div>
            <!-- BARRA DE NAVEGACIÓN-->
            <div>
                    <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">


                        <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" id="txt-menu" href="index.php">Inicio </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" id="txt-menu" href="hombres.php">Ropa para hombre </a>
                                </li>
                                <li class="nav-item active">
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

        </header>
        <!-- TERMINA BARRA DE NAVEGACIÓN-->
        <!-- CARRUSEL-->
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/banner_m1.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner_m3.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/banner_m2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- ACABA CARRUSEL-->
        <!-- TEXTO DEBAJO DE CARRUSEL -->
        <div id="pre_combis" class="container mb-0">
            <div class="row">
                <div class="col-lg-11 text-center mt-0 ">
                    <h1 id="post_banner_text" class="lead"> Conoce nuestra nueva colección</h1>
                </div>
            </div>
        </div>
        <!--ACABA TEXTO CARRUSEL -->
        <!--COMBINACIONES DE TIENDA -->

        <div id="cont_combis" class="container-fluid">
            <div id="cont_combis_in" class="container">
                <div class="row">
                    <div class="col-md">
                        <img class="img-thumbnail" src="img/mm_4.jpg" alt="Thumbnail image">
                    </div>
                    <div class="col-md">
                        <img class="img-thumbnail" src="img/mm_2.jpg" alt="Thumbnail image">
                    </div>
                    <div class="col-md">
                        <img class="img-thumbnail" src="img/mm_3.jpg" alt="Thumbnail image">
                    </div>
                </div>
            </div>
        </div>

        <!--FIN COMBINACIONES DE TIENDA -->
        <!-- texto pre selecciones-->
        <div id="pre_sel_text" class="container-fluid">
            <div id="sel_text" class="row">
                <div id="sel_text_in" class="col-lg-12 text-center">
                    <h1 id="post_banner_text" class="lead"> Lo más nuevo para ti </h1>
                </div>
            </div>

        </div>
        <!-- fin texto pre selecciones-->
        <!--PARTE DE SELECCIONES-->
        <div id="sec_fondo" class="sec-banner bg0 p-t-80 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/m8_1.jpg" alt="IMG-BANNER">

                            <a href="camisasM.php" class="block1-txt-mio ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Blusas
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Nueva temporada
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Compra ahora
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/m11_1.jpg" alt="IMG-BANNER">

                            <a href="faldasM.php" class="block1-txt-mio ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Faldas/Vestidos
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Nueva temporada
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Compra ahora
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/m4_1.jpg" alt="IMG-BANNER">

                            <a href="chamarrasM.php" class="block1-txt-mujeres ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Abrigos/Sudaderas
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Nueva temporada
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Compra ahora
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/m12_1.jpg" alt="IMG-BANNER">

                            <a href="pantalonesM.php" class="block1-txt-mio ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Jeans
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Nueva temporada
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Compra ahora
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN PARTE DE SELECCIONES-->
        <!--FOOTER-->

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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </body>
</html>
