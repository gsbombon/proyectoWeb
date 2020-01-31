<?php

$conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");

$id=$_REQUEST["id"];
$estado=$_REQUEST["estado"];


echo "id = ".$id;
echo "estado = ".$estado;

$bandera = 0;
if($estado=="Habilitado"){
  $bandera = 0;
}else{
  $bandera = 1;
}
echo "bandera = ".$bandera;
 $consulta="UPDATE usuarios SET usu_estado=$bandera WHERE usu_ID=$id;";
 $resultado=mysqli_query($conexion,$consulta);

    if($resultado)
    {
      header("Location: inicio.html");
    }
    else
    {
      echo "<center><h1>ERROR</h1></center>"; 	  
    } 
?>