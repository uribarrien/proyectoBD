<?php

$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
}else{
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
<link rel="stylesheet" href="css/css_administrador/reportes.css">
 </head>
<body>
    <header>

                <!-- BARRA DE NAVEGACIÓN-->
                <div>
                <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light" style="background-color: #B4C2E2 ;">
                    <a id="cont_nav" class="navbar-brand" href="index.php">Inicio</a>
                    <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active " href="administrador.html">Regresar</a>
                            </li>

                        </ul>

                    </div>
                </nav>
                </div>
            </header>
    <h1>Reporte de ventas</h1>
  <div id="contenedorr" class="containerr">
            <div class="col-ld-10 order-md-3 ">
             <div class="columna">
             <div class="d-inline-block">   <label for="firstName">Cantidad </label></div>
            </div>
        </div>
        </div>
  <form class="" action="reporteVentasPorCantidad.php" method="post">
   <table class=auto-style30 border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse'>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><input type="text" name="cantidad"></b></p>
  </td>
  <td style='width:180pt; padding:0cm 5.4pt 0cm 5.4pt;height:7.95pt'>
  <p class=MsoNormal style="width: 137px"><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit" name="reporte">GENERAR REPORTE</button></td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>
 </span></td>

 </tr>  <br>
   </table>
   </form>
    <div class="reporte">
        <br><br>
    <table class=auto-style30 border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse'>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'></span></b></p>
  </td>
  <td style='width:180pt; padding:0cm 5.4pt 0cm 5.4pt;height:7.95pt'>
  <p class=MsoNormal style="width: 137px"><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'></span></p>
  </td>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></b></td>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <span style='font-size:25.0pt;font-family:"Arial Narrow",sans-serif'><b>"Quetzal"</b>
  </span></td>
  <td rowspan=2 width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 120px"><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></b></p>
  </td>

 </tr>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'>Fecha:</span></b></p>
  </td>
  <td style='width:180pt; padding:0cm 5.4pt 0cm 5.4pt;height:7.95pt'>
  <p class=MsoNormal style="width: 137px"><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'>
  <?php
  $fecha = mysqli_query($connection,"SELECT curdate();");
  $date = mysqli_fetch_array($fecha);
  echo $date[0]; ?></span></p>
  </td>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 120px"><b><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'>RFC:</span></b></p>
  </td>
  <td width=121 style='width:87.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal><span style='font-size:13.0pt;font-family:"Calibri",sans-serif'>UIMQO1118RW9</span></p>
  </td>

 </tr>

   </table>
    <div>
        <table WIDTH="1000" id="tabla">
  <thead class="barra">
    <tr>
      <!--`no_pedido`, `subtotal`, `iva`, `total`, `fecha`, `cliente_no_cliente`, `envio_no_envio`, `status`
            `id_detalle`, `carrito_no_pedido`, `producto_no_producto`, `precio`, `cantidad`-->
    <th>No Pedido</th>
      <th>No Cliente</th>
      <th>Fecha</th>
      <th>Productos</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
<?php
if (isset($_POST['reporte'])) {
$cantidad = $_POST['cantidad'];
$qCarrito = mysqli_query($connection,"SELECT * FROM carrito WHERE total >= $cantidad and status = 1;");
//`no_pedido`, `subtotal`, `iva`, `total`, `fecha`, `cliente_no_cliente`, `envio_no_envio`, `status`
$iva = 0;
$i = 0; $cantdesc=0; $precio=0;
while ($carrito = mysqli_fetch_array($qCarrito)) {
  $nCar = $carrito['no_pedido'];
  ?><tr>
    <th scope="row"><?php echo $carrito['no_pedido']; ?></th>
    <td><?php echo $carrito['cliente_no_cliente']; ?></td>
    <td><?php echo $carrito['fecha']; ?></td>
    <td><?php
    $q = "SELECT c.nombre, b.cantidad, b.precio, d.cantidad_desc from producto c JOIN detalle_carrito b ON (c.no_producto = b.producto_no_producto) JOIN carrito a ON (a.no_pedido = b.carrito_no_pedido AND a.no_pedido = $nCar) JOIN descuento d ON (c.descuento_cod_descuento = d.cod_descuento)";
    $prods = mysqli_query($connection,$q);
    while ($producto = mysqli_fetch_array($prods)) {
      echo $producto['nombre'];?><br><?php
    } ?></td>
     <td><?php $prods = mysqli_query($connection,$q);
     while ($producto = mysqli_fetch_array($prods)) {
       echo $producto['cantidad'];?><br><?php
     } ?></td>
     <td><?php $prods = mysqli_query($connection,$q);
     while ($producto = mysqli_fetch_array($prods)) {
       echo "$".$producto['precio'];?><br><?php
       $desc = $producto['cantidad_desc']*.01;
       $cantdesc = $cantdesc + (($producto['precio'] * $desc)*$producto['cantidad']);
       $precio = $precio + ($producto['precio']*$producto['cantidad']);
     } ?></td>
     <td><?php echo "$".$carrito['total']; ?></td>
  </tr>


<?php
$iva = $iva + $carrito['iva'];}
?>

      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Subtotal</td>
          <td><?php echo "$".$precio; ?></td>

      </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Total descuento</td>
          <td>-<?php echo "$".$cantdesc;?></td>

      </tr>
         <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Iva</td>
          <td><?php echo "$".$iva; ?></td>
      </tr>
   <tr >
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td style='border-left:solid;border-top:solid;border-bottom:solid;border-color:red;'><b>TOTAL</b></td>
          <td style='border-right:solid;border-top:solid;border-bottom:solid;border-color:red;'><?php $total=$precio-$cantdesc+$iva; echo "$".$total; ?></td>
          <?php } ?>
      </tr>

  </tbody>
</table>
        </div>
    </div>
    </body>
</html>
