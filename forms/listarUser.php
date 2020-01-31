<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usuarios</title>
</head>

<body>
				<table class="table" width="100%" height="20%" border="1" >
				<thead class="thead-dark">
					<tr>
                      <th scope="col">ID</th>
					  <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Accion</th>
					</tr>
				  </thead>

            <?php
    $conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");
    $consulta="SELECT usu_id,usu_nombre,usu_apellido,usu_correo,
    CASE usu_estado
        WHEN 1 THEN 'Habilitado'
        WHEN 0 THEN 'Deshabilitado'
        END 'Estado'
    FROM usuarios;";


    $resultado=mysqli_query($conexion,$consulta);
    while($fila = $resultado->fetch_assoc()){
    ?>
            <tr>
                <td>     <?php	 echo $fila['usu_id'];	  	       ?>       </td>
                <td>     <?php	 echo $fila['usu_nombre'];	  	   ?>       </td>
                <td>     <?php	 echo $fila['usu_apellido'];	   ?>       </td>
                <td>     <?php	 echo $fila['usu_correo'];	  	   ?>       </td>
                <td>     <?php	 echo $fila['Estado'];	           ?>       </td>
                <td>     <a href="modUsuario.php?id=<?php echo $fila['usu_id']; ?>&estado=<?php echo $fila['Estado']; ?>">Cambiar Estado</a>         </td>
            </tr>
            <?php
	}
	?>
        </table>
</body>
</html>