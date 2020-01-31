<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	require('../php/conexionPocho.php');
	$queryCam = "SELECT ARE_ID, ARE_NOMBRE FROM area;";
	$resultadoCam = $mysqli->query($queryCam);
	?>
	<?php
	$id=$_REQUEST['id'];
	$conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");
    $consulta="SELECT * FROM area WHERE ARE_ID = '$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila = $resultado->fetch_assoc();
	?>
	<div id="container">
		<h1>Modificar Area</h1>
		<form id="formulario" class="formulario" method="post" action="../php/areaModificar.php?id=<?php echo $fila['ARE_ID']; ?>">
			<label for="">Nombre</label>
                    <input type="text" name="nomArea" id="nomArea" value="<?php echo $fila['ARE_NOMBRE'] ?>" placeholder="Nombre del area">
			<br>
			<input type="submit" name="Crear">Actualizar</input>
		</form>
	</div>
</body>
</html>