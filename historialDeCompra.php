<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Directorio de Direcciones</title>
        <link rel="stylesheet" href="css/css_historialDeCompra/historialDeCompra.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta>
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
                  <li class="nav-item">
                    <a class="nav-link" href="directorioDeDirecciones.php">Directorio de direcciones
                    </a>
                  </li>
                  <li class="nav-item active">
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
        <div><h1 id="title" >Historial de compra</h1></div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numero de pedido</th>
                        <th>Fecha del pedido</th>
                        <th>Estatus</th>
                        <th>Precio total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">445512</th>
                        <td>10 de noviembre del 2018</td>
                        <td>Pedido entregado</td>
                        <td>$4000.00</td>
                    </tr>
                    <tr>
                        <th scope="row">445513</th>
                        <td>13 de noviembre del 2018</td>
                        <td>Pedido enviado</td>
                        <td>$2800.00</td>
                    </tr>
                     <tr>
                        <th scope="row">445514</th>
                        <td>15 de noviembre del 2018</td>
                        <td>Pedido recibido</td>
                        <td>$1500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

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
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
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
