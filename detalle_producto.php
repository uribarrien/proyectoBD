<?php
$server = "localhost";
$password = "123456789";
$user = "proyecto";
$db = "proyectobd";

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    echo "Error. Sin conexion a la base de datos";
    echo "Errno de depuracion ".mysqli_connect_errno().PHP_EOL;
    echo "Error de depuracion ".mysqli_connect_error().PHP_EOL;
    exit;
}


function getFiles($dir){
    $fatmp = false;
    $fa = array();
    if(file_exists($dir)){
        @$fatmp = scandir($dir);  //file array vector de imagenes
        //$fatmp = true;//
    }

    if($fatmp != false){
        $count = 0;
        for($i = 0;$i<count($fatmp);$i++){
            if($fatmp[$i] != "." && $fatmp[$i] != ".."){
                $fa[$count] = $fatmp[$i];
                $count = $count+1;
            }
        }
    }else{
        $fa = false;
    }

    return $fa;
}
session_start();
$id = $_GET['id'];
$_SESSION['no_producto']=$id;
$query = mysqli_query($connection, "SELECT * FROM producto where no_producto=$id;");
$datos = mysqli_fetch_array($query);
$imagenes = getFiles('productos/'.$id.'/');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ver producto</title>
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
        <link rel="stylesheet" type="text/css" href="css/css_producto/producto.css">
        <!--===============================================================================================-->
    </head>
    <body id="fondo" class="animsition">

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
        	<a id="txt-menu" class="navbar-brand" href="index.html">Inicio</a>
          <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          	<span class="navbar-toggler-icon"></span>
          </button>

                    <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" id="txt-menu" href="hombres.html">Ropa para hombre </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="txt-menu" href="mujeres.html">Ropa para mujer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="txt-menu" href="loginUsuario.html">Iniciar Sesión</a>
                            </li>
														<li class="nav-item">
																<a class="nav-link" id="txt-menu" href="cerrar_sesion.html">Cerrar Sesión</a>
														</li>
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
	<section class="sec-product-detail p-t-65 p-b-60">
		<div class="container">
			<div  id="contenedor" class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

                    <div class="row">
                        <div class="col-md-6 col-lg-7 p-b-30">
                            <div class="p-l-25 p-r-30 p-lr-0-lg">
                                <div class="wrap-slick3 flex-sb flex-w">
                                    <div class="wrap-slick3-dots"></div>
                                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                    <div class="slick3 gallery-lb">
                                        <?php
                                        echo '<div class="item-slick3" data-thumb="productos/'.$id.'/'.$imagenes[0].'">';
                                        echo '	<div class="wrap-pic-w pos-relative">';
                                        echo '<img src="productos/'.$id.'/'.$imagenes[0].'" alt="IMG-PRODUCT">';
                                        ?>
                                    </div>
                                </div>

                                <?php
                                echo '<div class="item-slick3" data-thumb="productos/'.$id.'/'.$imagenes[1].'">';
                                echo '	<div class="wrap-pic-w pos-relative">';
                                echo '<img src="productos/'.$id.'/'.$imagenes[1].'" alt="IMG-PRODUCT">';
                                ?>
                            </div>
                        </div>
                        <?php
                        echo '<div class="item-slick3" data-thumb="productos/'.$id.'/'.$imagenes[2].'">';
                        echo '	<div class="wrap-pic-w pos-relative">';
                        echo '<img src="productos/'.$id.'/'.$imagenes[2].'" alt="IMG-PRODUCT">';
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

<div class="col-md-6 col-lg-5 p-b-30">
    <div class="p-r-50 p-t-5 p-lr-0-lg">
        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
            <?php
            echo $datos['nombre'];
            ?>
        </h4>

        <span class="mtext-106 cl2">
            <?php
            $_SESSION['precio'] = $datos['precio'];
            echo "$".$datos['precio'];
            ?>
        </span>

        <p class="stext-102 cl3 p-t-23">
            <?php
            echo $datos['nombre'].".";
            ?>
        </p>

        <!--  -->
        <form class="p-t-33" id="form" name="form" action="php/addcarrito.php ?>" method="POST" onsubmit="return enviar();">
            <div class="flex-w flex-r-m p-b-10">
                <div class="size-203 flex-c-m respon6">
                    Tamaño
                </div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="form-control" name="tamano">
												<option value="">Escoja un tamaño</option>
												<?php
												$p = "SELECT a.talla talla,a.id_talla idT, c.no_producto from producto c join talla_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join talla a on( b.talla_id_talla = a.id_talla) order by idT";
												$tallas=mysqli_query($connection,$p);
												while ($x=mysqli_fetch_array($tallas)) {
													if ($x['no_producto']!=null) {
														if ($x['talla'] == "S"){
															echo "<option value=1>Chico</option>";
														}else if ($x['talla'] == "M"){
															echo "<option value=2>Mediano</option>";
														}else if ($x['talla'] == "L"){
															echo "<option value=3>Grande</option>";
														}else if ($x['talla'] == "XL"){
															echo "<option value=4>Extra Grande</option>";
														}
													}
												}

                            ?>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
                
            </div>

            <div class="flex-w flex-r-m p-b-10">
                <div class="size-203 flex-c-m respon6">
                    Color
                </div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="form-control" name="color">
												<option value="">Escoja un color</option>
												<?php
												$q = "SELECT a.nombre color,a.id_color idC, c.no_producto from producto c join color_producto b on(b.producto_no_producto = c.no_producto and c.no_producto=$id) right join color a on( b.color_id_color = a.id_color) order by idC";
												$colores=mysqli_query($connection,$q);
												while ($s=mysqli_fetch_array($colores)) {
													if ($s['no_producto']!=null) {
														?>
														<option value="<?php $s['idC'] ?>"><?php echo $s['color']; ?></option>
														<?php
													}
												}

                            ?>

                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <script>
                    function enviar(){
                        var tamano = document.form.sizes.value;
                        var sel_colores = document.form.sel_color.value;
                        var val_tam = false;
                        var val_color = false;
                        if( tamano == "" ) {
                            alert("Debe seleccionar un tamaño");
                            val_tam = false;
                        }else{
                            val_tam = true;
                        }
                        
                        if(sel_colores == ""){
                            alert("Debes seleccionar un color");
                            val_color = false;
                        }else{
                            val_color = true;
                        }
                        
                        if(val_tam && val_color){
                            form.submit();
                            return true;
                        }else{
                            return false;
                        }
                    }
                </script>
            <div class="flex-w flex-r-m p-b-10">
                <div class="size-203 flex-c-m respon6">
                    Cantidad
                </div>

                <div class="size-204">
                    <select class="form-control" id="sel1" name="cantidad" >
                        <?php
                        $stock = mysqli_query($connection,"select stock from producto where no_producto=$id");
                        $z = mysqli_fetch_array($stock);
                        for ($i=1; $i <= $z['stock']; $i++) {
                        ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
            </div>
            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">Añadir al carrito</button>
        </form>

        <!--  -->

    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="footer">

    <div class="container">
        <ul class="foote_bottom_ul_amrc">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Acerca de nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center">Copyright @2017 | <a href="index.html">QUETZAL</a></p>

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
<!--===============================================================================================-->
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
