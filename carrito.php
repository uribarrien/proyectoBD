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
$session_email=$_SESSION['correo'];
if($session_email==null || $session_email==''){
    echo "Usted no puede entrar a esta página, necesita iniciar una sesión";
		$_SESSION['bandera']=1;
    header("location:loginUsuario.html");
    die();

}
 ?>
<!DOCTYPE html>
<html id="full">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Carrito</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="css/css_playerasH/playerasH.css">
        <link rel="stylesheet" type="text/css" href="css/css_index/index.css">

    </head>
    <body>
        <div>
            <h1 id="marca">Quetzal</h1>
        </div>
        <div>
            <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
                <a id="txt-menu" class="navbar-brand" href="index.php">Inicio</a>
                <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" id="txt-menu" href="hombres.php">Ropa para hombre </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="txt-menu" href="mujeres.php">Ropa para mujer</a>
                        </li>
												<?php
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
        <form class="bg0 p-t-75 p-b-85" action="envios.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head ">
                                        <th class="column-1">Producto</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Precio</th>
                                        <th class="column-4">Cantidad</th>
                                        <th class="column-5">Remover</th>
                                    </tr>
                                    <!-- EMPIEZA UNA FILA PARA UN ELEMENTO-->
                                    <?php
																		$no_cliente = $_SESSION['no_cliente'];

																		$_SESSION['no_cliente'] = $no_cliente;
																		$query = mysqli_query($connection,"SELECT * FROM carrito where cliente_no_cliente = $no_cliente and status='0' ");
																		$array = mysqli_fetch_array($query);
																		$subtotal = $array['subtotal'];
																		if ($subtotal == null){
																			$subtotal = 0;
																		}
																		$total = $array['total'];
																		if ($total == null){
																			$total = 0;
																		}
																		$no_pedido = $array['no_pedido'];
																		if ($no_pedido != null ){
																		$query2 = mysqli_query($connection,"SELECT * FROM detalle_carrito where carrito_no_pedido = $no_pedido");

                                    while ($row = mysqli_fetch_array($query2)){
																			$no_producto = $row['producto_no_producto'];
																			
																			$query3 = mysqli_query($connection,"SELECT a.nombre as name from producto a, detalle_carrito b where a.no_producto = b.producto_no_producto and carrito_no_pedido=$no_pedido and producto_no_producto = $no_producto");
																			$array3 = mysqli_fetch_array($query3);
																			$imagenes = getFiles('productos/'.$no_producto.'/');

																			$_SESSION['no_pedido'] = $no_pedido;
                                     ?>
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="how-itemcart1">

																								<?php
																								echo '<img src="productos/'.$no_producto.'/'.$imagenes[0].'" alt="IMG">';
																								 ?>

                                            </div>
                                        </td>
                                        <td class="column-2"><span id="txt-desc"><?php echo $array3['name'];?> </span></td>
                                        <td class="column-3">$ <?php echo $row['precio']; ?></td>
                                        <td class="column-4"><?php echo $row['cantidad']; ?></td>
                                        <td class="column-5">
                                          <a href="php/eliminarcarrito.php?id=<?php echo $no_producto; ?>">  <button type="button" class="btn btn-outline-dark btn-sm">Remover </button></a>
                                        </td>
                                    </tr>
                                    <!-- TERMINA UNA FILA PARA UN ELEMENTO-->
                                  <?php } }?>
                                </table>
                            </div>


                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Total del carrito
                            </h4>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Subtotal:
                                    </span>
                                </div>

                                <div class="size-209">
                                    <span class="mtext-110 cl2">
                                        <?php echo $subtotal; ?>
                                    </span>
                                </div>
                            </div>


                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        <?php echo $total; ?>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-lg">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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

        <!--===============================================================================================-->
        <script src="vendor/isotope/isotope.pkgd.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>
