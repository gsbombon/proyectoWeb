<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script src="../js/validaciones.js"></script>
</head>

<body>
	<?php 

function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}
	
function decrypt($string, $key) {
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}
	$key = "byron";
	$nombre = $_POST["nombre"];
	$apellido= $_POST["apellido"];
	$correo = $_POST["correo"];
	$contraseña = $_POST["contraseña"];
require("../Data/UsuarioDB.php");
	$obj_funcionBD = new UsuarioDB();
	if($obj_funcionBD->guardarU(strtoupper($nombre),strtoupper($apellido),$correo,encrypt($contraseña,$key))){
			 ?>
<script> registrarseOk();//header('Location: ../forms/registro.html');</script>
<?php
	}else{
		 ?>
<script> registrarse();//header('Location: ../forms/registro.html');</script>
<?php	
		}
	?>
</body>
</html>