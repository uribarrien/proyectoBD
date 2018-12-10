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

<link rel="stylesheet" href="css/css_administrador/reportes.css">
 </head>
<body>
    <header>

                <!-- BARRA DE NAVEGACIÓN-->
                <div>
                <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light" style="background-color: #B4C2E2 ;">
                    <a id="cont_nav" class="navbar-brand" href="index.html">Inicio</a>
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
             <div class="d-inline-block"><label for="firstName">Día</label><label id="mes" for="firstName">Mes</label><label id="mes" for="firstName">Anio</label></div>
            </div>
        </div>
        </div>
  <form class="" action="reporteVentasPorDia.php" method="post">
   <table class=auto-style30 border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse'>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b>
    <select name="dia">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      <option selected hidden>Dia</option>
    </select>
      </b></p>

  </td>
     <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b>
    <select name="mes">
      <option value="01">Enero</option>
      <option value="02">Febrero</option>
      <option value="03">Marzo</option>
      <option value="04">Abril</option>
      <option value="05">Mayo</option>
      <option value="06">Junio</option>
      <option value="07">Julio</option>
      <option value="08">Agosto</option>
      <option value="09">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
      <option selected hidden>Mes</option>
    </select>
      </b></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
height:7.95pt'>
<p class=MsoNormal style="width: 87px; height: 14px;"><b>
  <select  name="anio">
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option selected hidden>Anio</option>
  </select>
   </b></p>
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
      echo $date[0];
    ?></span></p>
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
      <th>No Pedido</th>
      <th>No Cliente</th>
      <th>Productos</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['reporte'])) {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $fecha = mysqli_query($connection,"SELECT concat('$anio','-','$mes','-','$dia')");
    $f = mysqli_fetch_array($fecha);
    $fecha = $f[0];
    $qCarrito = mysqli_query($connection,"SELECT * FROM carrito WHERE fecha = '$fecha' and status = 1;");
    $iva = 0;
    $i = 0; $cantdesc=0; $precio=0;
    while ($carrito = mysqli_fetch_array($qCarrito)) {
      $nCar = $carrito['no_pedido'];?>
      <tr>
        <th scope="row"><?php echo $carrito['no_pedido']; ?></th>
        <td><?php echo $carrito['cliente_no_cliente']; ?></td>
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
      $iva = $iva + $carrito['iva'];
    }
      ?>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
       <td></td>
    </tr>
      <tr>
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
          <td>Total descuento</td>
          <td>-<?php echo "$".$cantdesc;?></td>
      </tr>
         <tr>
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

        <td style='border-left:solid;border-top:solid;border-bottom:solid;border-color:red;'><b>TOTAL</b></td>
          <td style='border-right:solid;border-top:solid;border-bottom:solid;border-color:red;'><?php $total=$precio-$cantdesc+$iva; echo "$".$total;?></td>
          <?php } ?>
      </tr>

  </tbody>
</table>
        </div>
    </div>
    </body>
</html>
