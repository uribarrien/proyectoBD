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

<head>
<meta name=Generator content="Microsoft Word 15 (filtered)">
<meta charset="UTF-8">
<title>Factura</title>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:"Century Gothic";
	panose-1:2 11 5 2 2 2 2 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Encabezado Car";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Pie de página Car";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:#954F72;
	text-decoration:underline;}
span.EncabezadoCar
	{mso-style-name:"Encabezado Car";
	mso-style-link:Encabezado;}
span.PiedepginaCar
	{mso-style-name:"Pie de página Car";
	mso-style-link:"Pie de página";}
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	margin:0cm;
	margin-bottom:.0001pt;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	color:black;}
p.msochpdefault, li.msochpdefault, div.msochpdefault
	{mso-style-name:msochpdefault;
	margin-right:0cm;
	margin-left:0cm;
	font-size:10.0pt;
	font-family:"Times New Roman",serif;}
p.auto-style1, li.auto-style1, div.auto-style1
	{mso-style-name:auto-style1;
	margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;}
.MsoChpDefault
	{font-size:10.0pt;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:1.0cm 3.0cm 28.4pt 42.55pt;}
div.WordSection1
	{page:WordSection1;}
.auto-style1 {
	border: 2px solid #FFFFFF;
	border-collapse: collapse;
	font-size: 10.0pt;
	font-family: "Times New Roman", serif;
	margin-top: 0px;
}
.auto-style6 {
	border-top: 2px solid #17365D;
	border-left: 2px solid #17365D;
border-right-color: #17365D;
	border-right-width: 2px;
	border-bottom: 2px solid #17365D;
}
.auto-style7 {
	border: 2px solid #FFFFFF;
	font-weight: bold;
	}
.auto-style9 {
	border-collapse: collapse;
	font-size: 10.0pt;
	font-family: "Times New Roman", serif;
}
.auto-style19 {
	font-family: Calibri;
	font-size: xx-small;
}
.auto-style21 {
	font-family: Calibri, sans-serif;
	font-size: xx-small;
}
.auto-style22 {
	font-size: xx-small;
}
.auto-style23 {
	text-align: center;
	font-family: "Century Gothic", sans-serif;
	font-size: small;
	color: #FFFFFF;
}
.auto-style24 {
	text-align: center;
	font-family: Calibri, sans-serif;
	font-size: xx-small;
}
.auto-style27 {
	font-family: Calibri;
}
.auto-style28 {
	font-family: Calibri;
	font-size: x-small;
}
.auto-style29 {
	margin-top: 0px;
	margin-bottom: 0px;
}
.auto-style30 {
	margin-bottom: 0px;
}
.auto-style31 {
	text-align: right;
}
.auto-style32 {
	font-weight: bold;
	text-align: right;
}
.auto-style39 {
	font-family: Calibri;
	font-size: 9pt;
	margin-bottom: 0px;
	margin-top: 0px;
}
.auto-style40 {
	font-family: Calibri;
	font-size: 9pt;
	margin-top: 0px;
}
.auto-style41 {
	margin-top: 0px;
}
.auto-style43 {
	border: 2px solid #FFFFFF;
	text-align: justify;
	padding: 0cm 5.4pt;
}
.auto-style46 {
	border-bottom-style: solid;
	border-bottom-width: 1px;
	padding: 0cm 5.4pt;
}
.auto-style47 {
	text-align: center;
	font-family: Calibri;
	font-size: xx-small;
}
.auto-style48 {
	text-align: center;
}
.auto-style49 {
	text-align: right;
	font-family: Calibri, sans-serif;
	font-size: xx-small;
}
.auto-style54 {
	font-weight: bold;
	border-left: 2px solid #17365D;
	border-right-color: #17365D;
	border-right-width: 2px;
	border-top-color: #17365D;
	border-top-width: 2px;
	border-bottom: 2px solid #17365D;
}
.auto-style56 {
	text-align: right;
	font-size: 9.0pt;
	font-family: Calibri, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
.auto-style57 {
	font-weight: bold;
	border: 2px solid #17365D;
	background-color: #17365D;
}
.auto-style59 {
	font-size: 9.0pt;
	font-family: Calibri, sans-serif;
	color: #FFFFFF;
}
.auto-style61 {
	border: 2px solid #FFFFFF;
	background-color: #FFFFFF;
}
.auto-style62 {
	font-weight: bold;
	border: 2px solid #FFFFFF;
	background-color: #FFFFFF;
}
.auto-style63 {
	color: #FFFFFF;
}
.auto-style64 {
	font-size: xx-small;
	color: #FFFFFF;
}
.auto-style65 {
	font-family: Calibri;
	font-size: xx-small;
	color: #FFFFFF;
}
.auto-style66 {
	text-align: center;
	font-family: "Century Gothic", sans-serif;
	font-size: x-small;
	color: #FFFFFF;
}
.auto-style67 {
	border: 2px solid #FFFFFF;
}
.auto-style70 {
	text-align: right;
	color: #FFFFFF;
}
.auto-style71 {
	font-family: Calibri;
	font-size: 9pt;
	margin-bottom: 0px;
}
.auto-style72 {
	background-color: #A5A597;
}
.auto-style73 {
	margin-right: 0px;
}
-->
</style>

</head>

<body lang=ES-MX link=blue vlink="#954F72" style="height: 930px">

<div class=WordSection1>

<table class=auto-style73 border=0 cellspacing=0 cellpadding=0 width=0
 style='width:19.0cm;background:#0066B0;border-collapse:collapse'>
 <tr>

  <td width=369 valign=top style='width:297.65pt;background:#0C2D42;padding:0cm 5.4pt 0cm 5.4pt;height:4pt; border-right-style: solid; border-top-style: solid;' class="auto-style54">
  <p class=auto-style23 align=center>QUETZAL<br><font size="2">UIMQO1118RW9</font></p>
  <p class=auto-style66 align=center>Emiliano Zapata 562, San Francisco de Asis, <br>
  Guadalajara, Jalisco. C.P.47755, México</p>
  </td>
 </tr>
 <tr>
  <td width=369 valign=top style='width:297.65pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;' class="auto-style7">
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif'>Lugar
  de Expedición: 47755 </span></p>
  </td>
 </tr>
 <tr>
 <?php $fecha = mysqli_query($connection,"SELECT curdate();");
 $date = mysqli_fetch_array($fecha);
 $fecha=$date[0];
 $i=0000;?>
  <td width=369 valign=top style='width:297.65pt;background:#0C2D42;padding:0cm 5.4pt 0cm 5.4pt;border-right-style: solid; ' class="auto-style6">
  <p class=auto-style56 style="height: 28px">Folio: AGS<?php echo $i; ?><br>Fecha: <?php echo $fecha; ?> </p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<table class=auto-style30 border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse'>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Régimen Fiscal:</span></b></p>
  </td>
  <td style='width:180pt; padding:0cm 5.4pt 0cm 5.4pt;height:7.95pt'>
  <p class=MsoNormal style="width: 137px"><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Quetzal S.A de C.V</span></p>
  </td>
 </tr>
 <tr style='height:7.95pt'>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 87px; height: 14px;"><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Forma de Pago:</span></b></p>
  </td>
  <td style='width:180pt; padding:0cm 5.4pt 0cm 5.4pt;height:7.95pt'>
  <p class=MsoNormal style="width: 137px"><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Tarjeta de débito</span></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal style="width: 120px"><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Método de Pago:</span></b></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Pago en una sola exhibición</span></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Moneda:</span></b></p>
  </td>
  <td width=121 style='width:87.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.95pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>MXN-Peso Mexicano</span></p>
  </td>
 </tr>

   </table>

<p class=MsoNormal><span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<table class=auto-style29 border=0 cellspacing=0 cellpadding=0 width=0
 style='width:19.0cm;border-collapse:collapse'>
 <tr>
  <td width=718 colspan=4 valign=top style='background-position: 0% 0%; width:18.0cm; padding:0cm 5.4pt 0cm 5.4pt; background-repeat: repeat; background-attachment: scroll; height: 18; background-image: none;' class="auto-style57">
  <p class=auto-style59>Datos
  del cliente</p>
  </td>
 </tr>
 <tr>
  <td width=80 valign=top style='width:56.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><strong><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Cliente:</span></strong></p>
  </td>
  <td width=638 colspan=3 valign=top style='width:453.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[ReceptorNombre]</span></p>
  </td>
 </tr>
 <tr>
  <td width=80 valign=top style='width:56.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>R.F.C.:</span></b></p>
  </td>
  <td width=239 valign=top style='width:6.0cm;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[ReceptorRFC]</span></p>
  </td>
  <td width=80 valign=top style='width:2.0cm;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='text-align:right'><b><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Uso CFDI: </span></b></p>
  </td>
  <td width=319 valign=top style='width:226.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>G03-Gastos en general</span></p>
  </td>
 </tr>
 <tr>
  <td width=80 valign=top style='width:56.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 13px;'>
  <p class=MsoNormal><strong><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Domicilio:</span></strong></p>
  </td>
  <td width=638 colspan=3 valign=top style='width:453.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 13px;'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[ReceptorDomicilioCalle]
  [ReceptorDomicilioNoExterior], [ReceptorDomicilioNoInterior],
  <span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>
  [ReceptorDomicilioColonia],</span> [ReceptorDomicilioMunicipio],
  <span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>
  [ReceptorDomicilioEstado], </span>&nbsp;[ReceptorDomicilioCodigoPostal],
  [ReceptorDomicilioPais]</span></p>
  </td>
 </tr>
 <tr>
  <td width=80 valign=top style='width:56.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;' class="auto-style28">
  <strong>Teléfono:</strong></td>
  <td width=638 colspan=3 valign=top style='width:453.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;'>
  <strong>
  <span lang=ES style='font-size:9.0pt;color:#333333' class="auto-style27">[BusinessEntityPhone]</span></strong></td>
 </tr>
  <tr>
  <td width=80 valign=top style='width:56.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;'>
  <strong><span class="auto-style28"></span><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></strong></td>
  <td width=638 colspan=3 valign=top style='width:453.65pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;'>
  <span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>
  &nbsp;</span></td>
 </tr>
</table>

<p class=MsoNormal><span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<p class=MsoNormal>

<table class=auto-style1 cellspacing=0 cellpadding=0 width=718
 style='width:19.0cm;mso-yfti-tbllook:480;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td valign=top style='background-position: 0% 0%; width:35pt; padding:
  0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style62">
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-size:9.0pt;font-family:
  "Calibri",sans-serif;' class="auto-style63">Cantidad<o:p></o:p></span></b></p>
  </td>
  <td valign=top style='background-position: 0% 0%; width:12pt; padding:
  0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=auto-style48 style="width: 73px"><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-size:9.0pt;font-family:
  "Calibri",sans-serif;' class="auto-style63">Unidad<o:p></o:p></span></b></p>
  </td>
  <td valign=top style='background-position: 0% 0%; width:21pt; padding:
  0cm 5.4pt 0cm 5.4pt;background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal align=center style='text-align:center; width: 53px;'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-family:
  "Calibri",sans-serif;' class="auto-style64">Clave </span></b></p>
  <p class=MsoNormal align=center style='text-align:center; width: 55px;'>
  <b
  style='mso-bidi-font-weight:normal'>
  <span style='font-family:
  "Calibri",sans-serif;' class="auto-style64">Unidad SAT<o:p></o:p></span></b></p>
  </td>
  <td valign=top style='background-position: 0% 0%; width:41pt; padding:
  0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-family:
  "Calibri",sans-serif;' class="auto-style64">Clave</span></b></p>
  <p class=MsoNormal align=center style='text-align:center'>
  <b
  style='mso-bidi-font-weight:normal'>
  <span style='font-family:
  "Calibri",sans-serif;' class="auto-style22">&nbsp;<span class="auto-style63">Producto SAT</span></span></b></p>
  </td>

  <td width=91 valign=top style='background-position: 0% 0%; width:68.3pt; padding:0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-size:9.0pt;font-family:
  "Calibri",sans-serif;' class="auto-style63">Valor Unitario<o:p></o:p></span></b></p>
  </td>
  <td valign=top style='width:30; padding:0cm 5.4pt 0cm 5.4pt; background:#0C2D42; ' class="auto-style61">
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-size:9.0pt;font-family:
  "Calibri",sans-serif;' class="auto-style63">Descuentos<o:p></o:p></span></b></p>
  </td>
  <td width=126 valign=top style='background-position: 0% 0%; width:94.65pt; padding:
  0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal align=right style='text-align:right;tab-stops:54.75pt'><b
  style='mso-bidi-font-weight:normal'>
  <span style='font-size:9.0pt;font-family:
  "Calibri",sans-serif;' class="auto-style63">Importe<o:p></o:p></span></b></p>
  </td>
 </tr>
 <DETAIL>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td style='width:35pt; padding:0cm 5.4pt 0cm 5.4pt' class="auto-style22">
  <p class=auto-style47 align=center>[Cantidad]<o:p></o:p></p>
  </td>
  <td style='width:12pt; padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style47 align=center>H87-Pieza<o:p></o:p></p>
  </td>

  <td style='width:21pt; padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style24 align=center>E48 Unidad de servicio<o:p></o:p></p>
  </td>
  <td style='width:41pt; padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style21>73141700 Producción de telas y cuero
  <o:p></o:p></p>
  </td>

  <td width=91 style='width:68.3pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style31 align=center>
  <span lang=ES-MX
  style='font-family:"Calibri",sans-serif' class="auto-style22">
	[Format(ValorUnitario,$ #,##0.00)]<o:p></o:p></span></p>
  </td>
  <td style='width:30px; padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=Default align=center style='text-align:center'>
  <span lang=ES-MX
  style='font-family:"Calibri",sans-serif' class="auto-style22">[Format(Descuento,$ #,##0.00)]<o:p></o:p></span></p>
  </td>
  <td width=126 style='width:94.65pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style49 align=right>[Format(Importe,$ #,##0.00)]</p>
  </td>
 </tr>
 </DETAIL>
</table>
<span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<table class=auto-style30 border=0 cellspacing=0 cellpadding=0 width=0
 style='width:19.0cm;border-collapse:collapse'>
 <tr>
  <td width=340 style='width:334.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1pt'>
  <p class=MsoNormal><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></b></p>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'></span></p>
  </td>
  <td width=17 style='width:12.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:1pt'>
  <p class=MsoNormal><b><span style='font-size:9.0pt;font-family:"Calibri",sans-serif;
  color:#17365D'>&nbsp;</span></b></p>
  </td>
  <td width=114 valign=bottom style='width:100.05pt;background:#0C2D42;
  padding:0cm 5.4pt 0cm 5.4pt;height:1pt' class="auto-style32">
  <p class=auto-style63><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Subtotal</span></p>
  </td>
  <td width=246 valign=bottom style='width:91.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1pt' class="auto-style31">
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[Format(SubTotal,$ #,##0.00)]</span></p>
  </td>
 </tr>
 <tr>
  <td width=357 colspan=2 style='width:347.1pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1px'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=114 valign=bottom style='width:100.05pt;background:#0C2D42;
  padding:0cm 5.4pt 0cm 5.4pt;height:1px' class="auto-style32">
  <p class=auto-style63><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Descuentos</span></p>
  </td>
  <td width=246 valign=bottom style='width:91.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1px' class="auto-style31">
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[Format(DescuentoTotal,$ #,##0.00)]</span></p>
  </td>
 </tr>
 <tr>
  <td width=357 colspan=2 style='width:347.1pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>  </td>
  <td width=114 valign=bottom style='width:100.05pt;background:#0C2D42;
  padding:0cm 5.4pt 0cm 5.4pt; height: 1px;' class="auto-style32">
  <p class=auto-style70><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Impuestos
  Trasladados</span></p>
  </td>
  <td width=246 valign=bottom style='width:91.5pt;padding:0cm 5.4pt 0cm 5.4pt; height: 1px;' class="auto-style31">
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif'>[Format(TotalImpuestosTrasladados,$ #,##0.00)]</span></p>
  </td>
 </tr>
 <tr>
  <td width=357 colspan=2 style='width:347.1pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=114 valign=bottom style='width:100.05pt;background:#0C2D42;
  padding:0cm 5.4pt 0cm 5.4pt;' class="auto-style32">
  <p class=auto-style63><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>Total</span></p>
  </td>
  <td width=246 valign=bottom style='width:91.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  ' class="auto-style31">
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif'><strong>[Format(Total,$ #,##0.00)]</strong></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<table class=auto-style41 border=0 cellspacing=0 cellpadding=0 width=0
 style='width:19.0cm;border-collapse:collapse'>
  <tr>
  <td width=718 valign=top style='width:491.4pt;padding:0cm 5.4pt 0cm 5.4pt; height: 39px;'>
  </td>
 </tr>

</table>

<p class=MsoNormal><span lang=ES style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='width:19cm; border-collapse:collapse; height: 113px;'>
 <tr>
  <td width=207 rowspan=2 valign=top style='width:155.15pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES
  style='font-size:9.0pt;font-family:"Arial","sans-serif"'>
  <img border="0" src="img/sello.PNG" height="133" width="134"></span></p>
  </td>
  <td width=17 rowspan=2 valign=top style='width:12.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal><span style='font-size:9.0pt;font-family:"Calibri",sans-serif'>&nbsp;</span></p>
  </td>
  <td width=223 style='width:167.0pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  <p class=MsoNormal><b><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>Serie
  del Certificado del emisor</span></b></p>

  <p class=MsoNormal><strong><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>No.
  de Serie del Certificado del SAT</span></strong></p>
  <p class=MsoNormal><strong><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>Fecha
  y hora de certificación</span></strong></p>
  </td>
  <td width=271 style='width:203.65pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>0000100000040873060</span></p>
  <p class=MsoNormal><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>00001000000404486074</span></p>
  <p class=MsoNormal><span style='font-size:8.5pt;font-family:"Calibri",sans-serif'>[<?php $q=mysqli_query($connection,"select concat(curdate(),' ',curtime())"); $fecha=mysqli_fetch_array($q); echo $fecha[0];?>]</span></p>
  </td>
 </tr>
 <tr style='height:13.5pt'>
  <td width=494 colspan=2 style='width:370.65pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:8.5pt;font-family:"Calibri",sans-serif;color:#0C2D42'>Este
  documento es una representación impresa de un CFDI</span></b></p>
  </td>
 </tr>
 </table>

</div>

<table class=auto-style9 border=0 cellspacing=0 cellpadding=0 width=718
 style='width:19.0cm;mso-yfti-tbllook:480;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=718 valign=top style='background-position: 0% 0%; width:19.0cm; padding:0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'>
  <span class="auto-style65">Sello
  Digital del CFDi<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=718 valign=top style='width:19.0cm;padding:0cm 5.4pt 0cm 5.4pt; height: 13px;'>
  <p class=auto-style21 style="word-break: break-all">w5fqe6/gE12EdoNC2ZULH4XiJr+FW6y4f6sBpNRqmWze6lrsZhS4KOkUDvfeSWizoEAymgUJLZGZAz5CNHg1MI3/2M6DKh3v93LZeAa6v9g1D19SbLxE4O4m3WsCfH22Ka0T72mKjXSmuUrMn6v2HD+GrdqxeOzTOEut3ASqRrt9Z0 swT8ckKCXRwHo+Sf/ApC1xxPHGwpJsm8/esrrkPHUmfkftm2wlBseQu/6cKpPFhtCepfa5PXizStberU4pcdyfpgXaoKzGhDYAeYw4YnmguI8ANE9Jx3DLMSyCGU9xVL+RD7CgD0i+Z4AvVVchp70u4J9TyjEvBxlYUeVtQ==<o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=718 valign=top style='background-position: 0% 0%; width:19.0cm; padding:0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'>
  <span
  style='font-family:"Calibri",sans-serif;' class="auto-style64">Sello del</span><span class="auto-style19"> </span>
  <span
  style='font-family:"Calibri",sans-serif;' class="auto-style64">SAT<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=718 valign=top style='width:19.0cm;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=auto-style21 style="word-break: break-all">kYAPxZ/n5/L/twsC2gEfPh8JD++KlnVx/XAzWuERtWWEZOVXj0Hfy2LXOAyenaVTAZ0M0Q0qkuvhK5745tuyU9PbVllWaWP8dk+YYCGu/Wu8aq1XJ7o2n0QgPoI1DzAmqkL3JAioYEJfwDT2Y2WSRIzC6da9ppPKATTxvidlz9EGo TPIfvQgiLA7aSplRUSzRT32Z/46LAG3XgsxywJeLMPJ7hEMXG3vVmaHQR7mWebXMuAnhWbezkdG+xfYhbuDo4qkma5xU5qT3k/qoF5ieWy6DKXpY5h34InOdUu3Er4JHm83aEfdoNT+Y/CZNQJyj+rxXwPOdfGqaLBb5wjFig== <o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=718 valign=top style='background-position: 0% 0%; width:19.0cm; padding:0cm 5.4pt 0cm 5.4pt; background:#0C2D42; background-repeat: repeat; background-attachment: scroll;' class="auto-style61">
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'>
  <span class="auto-style65">Cadena
  original del complemento de certificación digital del SAT</span></b><span
  style='font-size:9.0pt;font-family:"Calibri",sans-serif;color:#0082B7'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes'>
  <td width=718 valign=top style='width:19.0cm;' class="auto-style46">
  <p class=auto-style21 style="word-break: break-all">||1.1|37C00368-4401-4D6A-9684-1016F89FED2F|2018-11-16T13:26:56|MAS0810247C0|Nw5fqe6/gE12EdoNC2ZULH4XiJr+FW6y4f6sBpNRqmWze6lrsZhS4KOkUDvfeSWizoEAymgUJLZGZAz5CNHg1MI3/2M6DKh3v93LZe Aa6v9g1D19SbLxE4O4m3WsCfH22Ka0T72mKjXSmuUrMn6v2HD+GrdqxeOzTOEut3ASqRrt9Z0swT8ckKCXRwHo+Sf/ApC1xxPHGwpJsm8/esrrkPHUmfkftm2wlBseQu/6cKpPFhtCepfa5PXizStberU4pcdyfpgXaoKzGhDYAeYw4Ynm guI8ANE9Jx3DLMSyCGU9xVL+RD7CgD0i+Z4AvVVchp70u4J9TyjEvBxlYUeVtQ==|00001000000404486074||<o:p></o:p></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes'>
  <td width=718 valign=top style='width:19.0cm;' class="auto-style43" bordercolorlight="#E7792B">
  &nbsp;</td>
 </tr>
</table>

</body>

</html>
