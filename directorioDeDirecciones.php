<?php
$server= 'localhost';
$user = 'proyecto';
$password ='123456789';
$bd = 'proyectobd';

session_start();
$session_email=$_SESSION['correo'];
$connection=mysqli_connect($server,$user,$password,$bd);
if(!$connection){

   echo "Error: No se pudo conectar a la base de datos de MySQL!!".PHP_EOL;
   echo "errno de depuracion".mysqli_connect_errno().PHP_EOL;
   echo "error de depuracion".mysqli_connect_error().PHP_EOL;
   exit;
}
$estados =mysqli_query($connection,"SELECT * FROM estado");
$select = mysqli_query($connection,"SELECT * from cliente where correo= '$session_email';");
while ($row=mysqli_fetch_array($select)){
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Directorio de Direcciones</title>
        <link rel="stylesheet" href="css/css_directorio_Direcciones/directorioDirecciones.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta>

<!--        <script type="text/javascript">
          $(document).ready(function(){
            $(".prueba").change(function(){
              id_Estado = $(".prueba").val();

              $.ajax({
                type: "POST",
                url: "prueba.php",
                data: {id:id_Estado},
                dataType: "html",
                beforeSend: function(){
                  alert("se envio")
                },
                error: function(){
                  alert("Error en la petición AJAX");
                },
                success: function(data){
                  alert("data");
                }
              });
            });
          });
        </script>-->
        <script>
          function showUser(str) {
            if (str == "") {
              document.getElementById("txtHint").innerHTML = "";
              return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                  } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                  };
                  xmlhttp.open("GET","prueba.php?q="+str,true);
                  xmlhttp.send();
                }
              }
        </script>

    </head>
    <body id="todo" class="bg">
    <header>
           <div>
              <h1>Quetzal</h1>
           </div>
                                           <!-- BARRA DE NAVEGACIÓN-->
           <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
              <a id="cont_nav" class="navbar-brand" href="index.html">Inicio</a>
              <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item  ">
                    <a class="nav-link" href="informacionPersonal.php">Información personal
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="directorioDeDirecciones.php">Directorio de direcciones
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="historialDeCompra.php">Historial de compra
                    </a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
              </div>
            </nav>

       </header>
                   <!-- FIN BARRA DE NAVEGACIÓN-->
                   <!-- FORMULARIOS-->
    <div id="contenedor_forms" class="container">
      <div id="cont_titulo" class="py-1 text-center">
      </div>

      <form class="row" action="php/direcciones.php" id="form" name="form" method="post" onsubmit="return enviar();">
        <div class="col-md order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Domicilio de entrega</span>
          </h4>
          <br>
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Codigo Postal</label>
                <input type="text" class="form-control"  id="cp" name="cp" placeholder=""
                value="<?php
                if (is_null($row['codigo_postal'])){
                  echo "Código postal";
                }else{
                  echo $row['codigo_postal'];
                }
                ?>" >
                
              </div>
              
            </div>
            <div class="mb-3">
                <label for="">Calle <span class="text-muted"></span></label>
                <input type="text" name="calle" class="form-control" id="calle" placeholder=""
                value="<?php
                if (is_null($row['calle'])){
                  echo "Calle";
                }else{
                  echo $row['calle'];
                }
                ?>" >
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="">Número de exterior</label>
                <input type="text" name="num_ext" class="form-control" id="num_ext" placeholder=""
                value="<?php
                if (is_null($row['no_exterior'])){
                  echo "Número exterior";
                }else{
                  echo $row['no_exterior'];
                }
                ?>" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="">Número de interior</label>
                <input type="text" name="num_int" class="form-control" id="num_int" placeholder=""
                value="<?php
                if (is_null($row['no_exterior'])){
                  echo "Número exterior";
                }else{
                  echo $row['no_exterior'];
                }
                ?>" >
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="">Colonia</label>
                <input type="text" name="colonia" class="form-control" id="colonia" placeholder=""
                value="<?php
                if (is_null($row['colonia'])){
                  echo "Colonia";
                }else{
                  echo $row['colonia'];
                }
                ?>" >
    
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="">Estado / Provincia</label>
                <select name="estado" class="form-control " id="estado" onchange="showUser(this.value)">
                    <option selected hidden>
                      <?php
                        if (is_null($row['ciudad_id_ciudad'])){
                          echo "Estado";
                        }else{
                          $num=$row['ciudad_id_ciudad'];
                          $query=mysqli_query($connection,"SELECT nombre as estado from estado where id_estado=$num;");
                          $res = mysqli_fetch_array($query);
                          echo $res['estado'];
                        }
                       ?>
                    </option>
                    <?php while ($res = mysqli_fetch_array($estados)) { ?>
                    <option value="<?php echo $res['id_estado'];?>"><?php echo $res['nombre']; ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="">Ciudad</label>
                <select name="ciudad" class="form-control" id="txtHint">
                  <option selected hidden>
                    <?php
                      if (is_null($row['ciudad_id_ciudad'])){
                        echo "Ciudad";
                      }else{
                        $query=mysqli_query($connection,"SELECT a.nombre as ciudad from ciudad a, cliente b where b.ciudad_id_ciudad=a.id_ciudad and b.correo='$session_email';");
                        $res = mysqli_fetch_array($query);
                        echo $res['ciudad'];
                      }
                     ?>
                  </option>
                </select>

              </div>
            </div>
            <script>
                function enviar(){
                    var cp = document.form.cp.value;
                    var n_e = document.form.num_ext.value;
                    var n_i = document.form.num_int.value;
                    var valid_num = false;
                    var valid_cp = false;
                    if(/^\d*$/.test(n_e) && /^\d*$/.test(n_i)){
                        valid_num = true;
                    }else{
                        valid_num=false;
                        alert("Solo digitos en Número exterior o interior");
                    }
                    
                    
                    if(/^\D*\d{4,5}$/.test(cp)){
                        valid_cp = true;
                    }else{
                        alert("El codigo postal es de cuatro a cinco digitos")
                        valid_cp = false;
                    }
                    
                    if(valid_num && valid_cp){
                        form.submit();
                        return true;  
                    }else{
                        return false;
                    }


                } 

            </script>
            <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
        </div>
        <div class="col-md order-md-1">
          <h4 id="text_izq" class="mb-3 text-muted">Datos de cuenta</h4>
          <br>
          <div class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="email">Usuario (Correo electronico) <span class="text-muted"></span></label>
                <input type="email" name="correo" class="form-control" id="correo" placeholder="" value="<?php echo $row['correo'];?>" disabled>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="">Numero télefonico</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="" value="<?php echo $row['telefono'];?>" disabled>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" value="<?php echo $row['nombre'];?>" disabled>

              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="" value="<?php echo $row['apellido_paterno'];?>" disabled>

              </div>
            </div>


            <hr class="mb-4">

          </div>
        </div>
      </form>
        <!-- FIN FORMULARIOS-->
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 Quetzal</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidad</a></li>
          <li class="list-inline-item"><a href="#">Terminos</a></li>
          <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!--<script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>-->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
<?php } ?>
