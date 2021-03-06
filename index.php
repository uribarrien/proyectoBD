
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <!--===============================================================================================-->
    </head>
    <body id="fondo" class="">

        <!-- Header -->
        <header>
            <!-- Header desktop -->
            <div class="container-menu-desktop">
                <!-- Topbar -->
                <div>
                    <h1 id="marca">Quetzal</h1>
                </div>

                <div>
                    <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">


                        <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" id="txt-menu" href="index.php">Inicio </a>
                                </li>
                                <li class="nav-item ">
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
        <!-- Slider -->
        <section class="section-slide">
            <div class="wrap-slick1">
                <div class="slick1">
                    <div class="item-slick1" style="background-image: url(img/banner_chava_2.png);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                    <span id="txt-banner-ch" class="ltext-101 cl2 respon2">
                                        Coleccion para ellas
                                    </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        Nueva temporada
                                    </h2>
                                </div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="mujeres.php" id="txt-champagne" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Compra ahora
								</a>
							</div>
						</div>
					</div>
				</div>

                    <div class="item-slick1" style="background-image: url(img/banner_chavo_2.png);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                    <span id="txt-banner-ch" class=" cl2 respon2">
                                        Nueva temporada para caballero
                                    </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        Chamarras & Abrigos
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                    <a href="hombres.php" id="txt-champagne" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Compra ahora
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Banner -->
        <div id="sec_fondo" class="sec-banner bg0 p-t-80 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/fotito_chava.png" alt="IMG-BANNER">

						<a href="mujeres.php" class="block1-txt-sepia ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Mujer
								</span>

                                    <span class="block1-info stext-102 trans-04">
                                        Invierno 2018
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

                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="img/fotito_chavo.png" alt="IMG-BANNER">

                            <a href="hombres.php" class="block1-txt-sepia ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        Caballero
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Invierno 2018
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


        <!-- Product -->
        <section id="ter_fondo" class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="p-b-10">
                    <h3 id="txt-champagne-bold" class="ltext-103 cl5">
                        Productos mas populares
                    </h3>
                </div>
                <div class="row isotope-grid">
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/v_chamarra_m.png" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=1" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=1" class="txt-champagne cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Chamarra Acolchada capucha
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/v_abrigo_m.png" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=2" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=2" class="txt-champagne cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Abrigo cruzado espiga
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/v_abrigo2.png" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=3" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=3" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Abrigo cruzado con cinturón
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/v_abrigo3.png" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=4" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=4" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Abrigo largo con cuadros
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/m9_2.jpg" alt="IMG-PRODUCT">
                                <a href="detalle_producto.php?id=5" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=5" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Abrigo Negro
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/m11_2.jpg" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=6" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=6" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Chamarra verde militar
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/m14_2.jpg" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=7" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=7" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Abrigo Caqui
                                    </a>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="img/m10_4.jpg" alt="IMG-PRODUCT">

                                <a href="detalle_producto.php?id=8" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Ver producto
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="detalle_producto.php?id=8" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        Chamarra  Bombacha Verde
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load more -->
            </div>
        </section>


        <!-- Footer -->
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

        <!-- Modal1 -->
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
        <!--=======
========================================================================================-->
        <!--===============================================================================================-->
        <script src="vendor/slick/slick.min.js"></script>
        <script src="js/slick-custom.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
        <script>
            $('.gallery-lb').each(function() { //contenedor para las galerias
                $(this).magnificPopup({
                    delegate: 'a', // escoger galeria
                    type: 'image',
                    gallery: {
                        enabled:true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
        <!--===============================================================================================-->
        <script src="vendor/isotope/isotope.pkgd.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>
