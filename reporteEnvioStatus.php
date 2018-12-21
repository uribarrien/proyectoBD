<?php
$server = "localhost";
$db = "proyectobd";
$user = "proyecto";
$password = "123456789";

$connection = mysqli_connect($server,$user,$password,$db);
if(!$connection){
    exit;
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
                                <a class="nav-link active " href="administrador.html">Regresar </a>
                            </li>

                        </ul>

                    </div>
                </nav>
                </div>
            </header>
    <h1>Reporte de envíos</h1>
  <div id="contenedorr" class="containerr">
            <div class="col-ld-10 order-md-3 ">
             <div class="columna">
             <div class="d-inline-block">   <label for="firstName">Status</label></div>
            </div>
        </div>
        </div>
        <form class="" action="reporteEnvioStatus.php" method="post">
   <table class=auto-style30 border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse'>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><input type="text" name="estatus"></b></p>
  </td>
  <td >
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
      <th>No. Envio</th>
      <th>Peso</th>
      <th>Fecha de envío</th>
      <th>Fecha de llegada</th>
      <th>Calle</th>
      <th>No exterior</th>
      <th>Colonia</th>
      <th>Código postal</th>
      <th>Paqueteria</th>
      <th>Ciudad</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['reporte'])) {
      $estatus = $_POST['estatus'];
      $env = mysqli_query($connection,"SELECT a.*,b.nombre ciudad FROM envio a JOIN ciudad b ON a.ciudad_id_ciudad = b.id_ciudad AND a.estatus = '$estatus';");
      $i=0;
      while ($envio = mysqli_fetch_array($env)) {
        $i = $i + 1;
      ?>
        <tr>
          <td><?php echo $envio['no_envio']; ?></td>
          <td><?php echo $envio['peso']; ?></td>
          <td><?php echo $envio['fecha_envio']; ?></td>
          <td><?php echo $envio['fecha_llegada']; ?></td>
          <td><?php echo $envio['calle']; ?></td>
          <td><?php echo $envio['no_exterior']; ?></td>
          <td><?php echo $envio['colonia']; ?></td>
          <td><?php echo $envio['codigo_postal']; ?></td>
          <td><?php echo $envio['paquteria']; ?></td>
          <td><?php echo $envio['ciudad']; ?></td>
        </tr>
      <?php
      }
     ?>
   <tr >
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td ><b>Total de envíos</b></td>
          <td><?php echo $i; }?></td>
      </tr>


  </tbody>
</table>
        </div>
    </div>
    </body>
</html>
