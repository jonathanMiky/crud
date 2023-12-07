<!DOCTYPE html>
<html lang="en">
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
 </head>
 <body >
 <div>

<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">

  <ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"><img src="R.png" width="50" height="50"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.google.com/maps/dir//Plaza+Sendero,+Blvd.+Miguel+Alem%C3%A1n+55,+Parque+Industrial+Lerma+Toluca,+52120+Lerma+de+Villada,+M%C3%A9x./data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x85cd8ac8ecc4b265:0x139d3f6e5bd49bd6?sa=X&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIDxAA&ved=2ahUKEwjE0uKhwqCAAxUjIEQIHRuRBjoQ48ADegQIFBAO"><font color="white">Ubicacion</font></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/oron/principal.html"><font color="white">Inicio</font></a>
  </li>
  <li class="nav-item">
     <div class="container">
<div class="btn-group">
  <button type="button" class="btn btn-danger">Consultas</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/oron/consultacontacto.php">Contacto</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultadireccion.php">Direcciones</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultaremitente.php">Remitentes</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaserv.php">Servicios</a></li>
    <li><a class="dropdown-item" href="http://localhost/oron/consultasuscrip.php">Suscripciones</a></li>
        <li><a class="dropdown-item" href="http://localhost/oron/consultacliente.php">Clientes</a></li>
     <li><a class="dropdown-item" href="http://localhost/oron/consultaprecios.php">Tarifas</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultasu.php">Sucursal</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaprov.php">Provedores</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultacat.php">Categoria</a></li>
       <li><a class="dropdown-item" href="http://localhost/oron/consultaproducto.php">Productos</a></li>
  </ul>
</div>
  </div>
  </li>
  <li>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
  </div>
</div>
  </li>
</ul>
</nav>
   <div class="container" >
    <center>
    <h1><font color="#40c4f">Contacto</font></h1>
    <?php
include("conexion.php");
$nombre=$_POST['nombre'];
$tel=$_POST['tel'];
$edad=$_POST['edad'];


$query =("INSERT INTO cliente VALUES ('','$nombre','$tel','$edad')");
$resultado=$conexion->query($query);
 if ($resultado) {
   header("Location:consultas.php");
}
else {
  echo "no se pudo guardar";
}

?>
<br>

    </center>
  </div>



     <style>
footer {
width: 100%;
text-align: center;
font-size: 20px;
font-weight: bold;
color: #ffffff;
padding: 30px;

}
</style>
<footer class="bg-black">
  <font>Farmacias Jhon DE GUADALAJARA</font>
</footer>
   <!--JavaScript at end of body for optimized loading-->

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
  </html>