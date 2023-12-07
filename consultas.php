<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            
            <a class="nav-link active" aria-current="page" href="#">Crud Clientes</a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <!-- Otras opciones de menú aquí -->
            </ul>
        </div>
    </div>
</nav>
<br>
<br>

<br>

<br>

<br>



<div class="container">
    <table class="table">
        <thead>
            <a type="submit" class="btn btn-outline-danger" href="agregarclientes.html">
        Alta Nuevo cliente
    </a>

            <tr>
                <th>CLAVE</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conexion.php");
            $query = "SELECT * FROM cliente";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['tel']; ?></td>
                    <td><?php echo $row['edad']; ?></td>
                    <td>
                        <a type="submit" class="btn btn-outline-secondary" href="formulario_modificar.php?id=<?php echo $row['id'];?>">
                            <img src="https://cdn5.dibujos.net/dibujos/pintados/201125/f2db30b527a16bfea022e7c6e9dcb93f.png" width="50px" height="50px">
                        </a>
                    </td>
                    <td>
                        <a type="submit" class="btn btn-outline-danger" href="eliminar.php?id=<?php echo $row['id'];?>">
                            <img src="https://www.vippng.com/png/detail/480-4804163_utiles-escolares-animados-escolar-animado-goma-de-borrar.png" width="50px" height="50px">
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
</div>
<!-- Resto del contenido aquí -->

</body>
</html>
