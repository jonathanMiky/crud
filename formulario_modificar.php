

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection"/>

  <!-- QUERYMINE Page Center Css -->
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      background: #f5f5f5;
    }
    body {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    form {
      width: 400px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Cambié el estilo de fuente */
    body, input, label {
      font-family: 'Arial', sans-serif;
    }
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <!-- Form Section -->
  <?php
    include("conexion.php");
    $id=$_REQUEST['id'];
    $query="SELECT * FROM cliente WHERE id='$id'";
    $resultado=$conexion->query($query);
    $row=$resultado->fetch_assoc();
  ?>

  <form action="modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="row margin">
      <div class="col s12 m12 l12 center">
        <img src="bola.jfif" alt="" class="responsive-img circle" style="width:100px;">
        
      </div>
    </div>

    <div class="col m12 l12">
      <div class="input-field">
        <!-- Quité el ícono -->
        <input  type="text" name="nombre" value="<?php echo $row['nombre'];?>" />
        <label for="username"> Nombre</label>
      </div>
    </div>
    <div class="col m12 l12">
      <div class="input-field">
        <!-- Quité el ícono -->
        <input type="text" name="tel" value="<?php echo $row['tel'];?>" />
        <label for="username">Tel</label>
      </div>
    </div>
    <div class="col m12 l12">
      <div class="input-field">
        <!-- Quité el ícono -->
        <input type="text" name="edad" value="<?php echo $row['edad'];?>" />
        <label for="username">Edad</label>
      </div>
    </div>

    <br>

    <div class="center">
      <input type="submit" value="Guardar" class="btn waves-effect waves-light" /> 
    </div>
  </form>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
