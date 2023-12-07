<?php

  include("conexion.php");
  $id= $_REQUEST['id'];
  $query="DELETE FROM cliente
  WHERE id='$id'";


  $resultado=$conexion->query($query);
  if($resultado)
    {
        header("Location:consultas.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>