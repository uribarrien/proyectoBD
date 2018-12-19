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

$select = mysqli_query($connection,"SELECT day(fecha_nac) dia,month(fecha_nac) mes, year(fecha_nac) anio, cliente.* from cliente where correo= '$session_email';");
while ($row=mysqli_fetch_array($select)){
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INFORMACIÓN PERSONAL</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/css_informacion_personal/informacionPersonal.css">

    </head>
    <body>
        <header>
            <h1>QUETZAL</h1>
            <!-- MENU SUPERIOR -->
            <nav id="cont_nav" class="navbar navbar-expand-lg navbar-light">
                <a id="cont_nav" class="navbar-brand" href="index.html">Inicio</a>
                <button id="cont_nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="cont_nav" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item  active">
                            <a class="nav-link" href="informacionPersonal.php">Información personal
                            </a>
                        </li>
                        <li class="nav-item">
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
            <!-- FINMENU SUPERIOR -->
        </header>
        <div>

        </div>
        <div id="contenedor_form" class="container col-md-6">
            <div class="col-ld-10 order-md-3 ">
                <h4 class="mb-3 text-center">DETALLES DE CUENTA</h4>
                <form  id="formu" name="formu" action="php/informacion.php" method="POST" onsubmit="return enviar();">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control"  name="nombre" id="firstName" placeholder="" value="<?php echo $row['nombre'];?>" >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Apellidos</label>
                            <input type="text" class="form-control" name="apellido" id="lastName" placeholder="" value="<?php echo $row['apellido_paterno'];?>" >

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Correo Electronico <span class="text-muted"></span></label>
                        <input type="email" class="form-control" name="correo" id="email" placeholder="" value="<?php echo $row['correo'];?>" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Cambiar contraseña (opcional)</label>
                            <input type="text" class="form-control" name="contrasena" placeholder="Contraseña " value="" >
        
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Reingresar contraseña</label>
                            <input type="text" class="form-control" name="newcontrasena" placeholder="Confirmar contraseña" value="" >
         
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="sel1">Sexo</label>
                                <select name="sexo" class="form-control" id="sel1">
                                    <option selected hidden><?php
                                         if (is_null($row['sexo'])){
                                             echo "sexo";
                                         }else{
                                             if ($row['sexo'] == 'F'){
                                                 echo "Femenino";
                                             }else{
                                                 echo "Masculino";
                                             }
                                         }
                                        ?></option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="sel1">Dia</label>
                                    <select name="dia" class="form-control" id="sel1">
                                        <option selected hidden><?php
                                         if (is_null($row['dia'])){
                                             echo "día";
                                         }else{
                                             echo $row['dia'];
                                         }
                                            ?></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
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
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="sel1">Mes</label>
                                    <select name="mes" class="form-control" id="sel1">
                                        <option selected hidden><?php
                                         if (is_null($row['mes'])){
                                             echo "mes";
                                         }else{
                                             echo $row['mes'];
                                         } ?></option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label for="sel1">Año</label>
                                    <select name="anio" class="form-control" id="sel1">
                                        <option selected hidden><?php
                                         if (is_null($row['anio'])){
                                             echo "anio";
                                         }else{
                                             echo $row['anio'];
                                         } ?></option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label >Télefono (10 digitos)</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" value="<?php echo $row['telefono']; ?>" >
                        </div>
                        <script>
                            function enviar(){
                                var tel = document.formu.telefono.value;
                                var pass1 = document.formu.contrasena.value
                                var pass2 = document.formu.newcontrasena.value
                                var same_pass = false;
                                var valid_pass = false
                                var valid_tel = false;

                                if (pass1 == pass2){
                                    same_pass = true;

                                }else{
                                    alert("Las dos claves son distintas");
                                    same_pass = false;
                                }
                                
                                if(/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/.test(pass1)){
                                    valid_pass = true;
                                }else{
                                    alert("La contraseña debe contener : \n - Mayusculas \n - Minusculas \n - Almenos un digito \n - De 8 a 16 caraceteres");
                                    valid_pass = false;
                                }
                                
                                if(/^[0-9]{10}$/.test(tel)){
                                    valid_tel = true;
                                }else{
                                    valid_tel = false;
                                    alert("El telefono deben ser 10 digitos")
                                }   
                                
                                if(same_pass && valid_pass && valid_tel){
                                    formu.submit();
                                    return true;
                                }else{
                                    return false;
                                }


                            } 

                        </script>
                    </div>


                    <hr class="mb-4">
                    <button id="boton" class="btn btn-lg btn-secondary btn-block" type="submit">CONFIRMAR</button>
                    <br>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
</html>
<?php
                                        }
?>
