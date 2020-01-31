<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

	<?php
			$id = $_POST['idArea'];
			$nombre = $_POST['nombreArea'];
	$servername = "localhost";
	$database = "proyecto_tecnicas";
	$username = "admin";
	$password = "admin";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
	}
	 
	$sql = "INSERT INTO area (ARE_ID,ARE_NOMBRE) VALUES ($id, '$nombre');";
	if (mysqli_query($conn, $sql)) {
		?>
		<script> alert("Dato ingresado Correcatamente");
		</script>
		<?php  
		
	} else {
		?>
		<script> alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($conn);?>");
		</script>
		<?php 
		  
	}
	mysqli_close($conn);
	?>
</body>
</html>