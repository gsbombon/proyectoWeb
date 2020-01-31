<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
				<table class="table" width="100%" height="20%" border="1" >
				<thead class="thead-dark">
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Nombre Area</th>
					  <th scope="col">Accion</th>
					</tr>
				  </thead>

            <?php
    $conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");
    $consulta="SELECT * FROM area";
    $resultado=mysqli_query($conexion,$consulta);
    while($fila = $resultado->fetch_assoc()){
    ?>
            <tr>
                <td>
                    <?php	 echo $fila['ARE_ID'];	  	   ?>
                </td>
                <td>
                    <?php	 echo $fila['ARE_NOMBRE'];	   ?>
                </td>

                <td>
                    <a href="modificarArea.php?id=<?php echo $fila['ARE_ID']; ?>">Modificar</a>
                </td>
            </tr>
            <?php
	}
	?>
        </table>
</body>
</html>