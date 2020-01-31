<?php

$conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");

$id=$_REQUEST['id'];
 $area_nombre=$_POST['nomArea'];

echo "ID= ".$id;
echo "NOMBRE NUEVO = ".$area_nombre;

 $consulta="UPDATE area SET ARE_NOMBRE='$area_nombre' WHERE ARE_ID=$id;";
 $resultado=mysqli_query($conexion,$consulta);

    if($resultado)
    {
      header("Location: ../forms/inicio.html");
    }
    else
    {
      echo "<center><h1>ERROR</h1></center>"; 	  
    } 
?>