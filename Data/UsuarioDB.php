<title>Proyecto</title>
<?php	
	require_once('conexion.php');
  
	class UsuarioDB
	{

//funcion que guarda los datos de un nuevo usuario
 	function guardarU($nombre,$apellido,$correo,$contraseña)
  	{/*config es un objeto de tipo conecta*/
	$db_table_name="usuarios";
    $config=new conecta();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
   $resultado=mysqli_query( $link,"SELECT * FROM ".$db_table_name." WHERE usu_correo = '".$correo."'");

if (mysqli_num_rows($resultado)>0)
{
//puede existir condicion

} else {
$sql= "INSERT INTO usuarios (usu_nombre,usu_apellido,usu_correo,usu_contraseña)
   VALUES('$nombre','$apellido','$correo','$contraseña')";
$result = mysqli_query($link,"SET NAMES 'utf8'");
$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}
	
}
	
//fail 1
	function fail($correo,$hora){
		 $Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
	 $sql1= "UPDATE usuarios SET usu_acceso = $hora WHERE usu_correo='$correo'";
	}

//primera parte de modifivcar un usuario
	function modificarU($id)
 	{
    $config=new conecta();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "SELECT * FROM users WHERE id_cod= '$id' ";
    $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error());
	mysqli_close($link); 
	return $result;
	}
	

	
//Segunda parte editar un Usuario
	function editarU($id,$nombre,$usuario,$cAntigua,$cNueva)
 	{
    $config=new conecta();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo 			conectarse : ' .mysqli_error());
    $sql= "UPDATE users SET id_cod='$id',id_name='$nombre', id_user='$usuario', id_passw='$cNueva' WHERE id_cod ='$id' and id_passw ='$cAntigua'";
    $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error());
	mysqli_close($link); 
	return $result;
	}

//funcion que verifica el ingreso
	function entrar($correo,$contraseña)
 	{
    $Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
	 $sql1= "UPDATE usuarios SET usu_intentos = usu_intentos-1 WHERE usu_correo='$correo'";
     $result1=mysqli_query($link, $sql1) or die (mysqli_error());
	$sql= "SELECT * FROM usuarios WHERE usu_correo = '$correo' and usu_contraseña = '$contraseña' and usu_estado ='1'";
	$result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error($link)); 
	if ($result->num_rows > 0){
		$sql2= "UPDATE usuarios SET usu_intentos = 3 WHERE usu_correo='$correo'";
		$result2=mysqli_query($link, $sql2) or die (mysqli_error());
	}
	mysqli_close($link);
	return $result;
	}
	 

	
	
	
	
	//funcion que llena los usuarios existentes buscando por usuario o id
function buscarU($usuario)
 	{	
		if(empty ($usuario)){
	$Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or 	die('No pudo conectarse : ' .mysqli_error());
    $sql= "SELECT * FROM users WHERE id_cod > 0";
   $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
			
			}else{
         $Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or 	die('No pudo conectarse : ' .mysqli_error());
    $sql= "SELECT * FROM users WHERE id_user = '$usuario' or id_cod='$usuario'";
   $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
			}
	}





//cambiar estado de usuario	
function cambiarEstadoU($id)
 	{
    $config=new conecta();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo 			conectarse : ' .mysqli_error());
	 $sql1= "SELECT * FROM users WHERE id_cod='$id' ";
    $result1 = mysqli_query($link,"SET NAMES 'utf8'");
    $result1=mysqli_query($link, $sql1) or die (mysqli_error());
	$mostrar = mysqli_fetch_assoc($result1);
	
	if(empty($mostrar['id_status'])){
    $sql= "UPDATE users SET id_status=1 WHERE id_cod ='$id'";
    $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error());
	mysqli_close($link);}
	else{
	$sql= "UPDATE users SET id_status=0 WHERE id_cod ='$id'";
    $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error());
	mysqli_close($link);
		}
	return $result;
	}

	}

?>
