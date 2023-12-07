<?php
  include("conexion.php");
  $id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $tel= $_POST['tel'];
  $edad= $_POST['edad'];
 

  
echo $nombre;
  $query="UPDATE cliente
              SET nombre='$nombre',
              tel='$tel',
			  edad='$edad'
                              
              WHERE id= '$id'";

  $resultado=$conexion->query($query);
  if($resultado)
  	{
      header("Location:consultas.php");
}
else
    { echo "No fue posible actualizar este dato";
}
?>