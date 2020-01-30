<script src="../js/validaciones.js"></script>

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

function validarCaptcha(){
		if(isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

		var_dump($_POST);
		$secret = "6LcKiswUAAAAACYHBgbUUsNMFqJiWP2dECJRVdBU";
		$ip = $_SERVER["REMOTE_ADDR"];
		$captcha = $_POST["g-recaptcha-response"];
		$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		echo("<br>");
		echo("<br>");
		var_dump($result);
		$array = json_decode($result,TRUE);
		echo("<br>");
		echo("<br>");
		if($array["success"]){
			echo("ERES HUMANO");
		}else{
			header('Location: ../forms/inicio.html');
		}
		
	}else{
		?>
<script> alert ("Complete el captcha");</script>
<?php
		header('Location: ../forms/login.html');
	}
}

function acceso(){
	date_default_timezone_set('America/Guayaquil');
	$hora = date('h:i:s A');
	return( $hora);
}


 require ("../Data/UsuarioDB.php");  
 	$key = "byron";
 $correo =$_POST["correo"];
 $contraseña= encrypt($_POST["contraseña"],$key);

$Obj_UsuarioBD=new UsuarioDB();

   
 if ($result=$Obj_UsuarioBD->entrar($correo,$contraseña))
    {
	  	if ($result->num_rows > 0) {
	?>	<script> alert("Usuario Correcto")</script> <?php
    echo '<script languaje="Javascript">location.href="../forms/inicio.html"</script>';
  }else{
	?>	<script> alert("Usuario Incorrecto")</script> <?php
    echo '<script languaje="Javascript">location.href="../forms/login.html"</script>';
  }
	}
    else
    {
      echo "<center><h1>ERROR</h1></center>";
    }
?>