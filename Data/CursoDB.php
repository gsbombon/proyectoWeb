<title>Proyecto</title>
<?php	
	require_once('conexion.php');
  
	class CursoDB
	{
//funcion que permite llenar los datos de materias en un cbx
function llenarNCbx()
 	{
     $Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "SELECT DISTINCT MAT_NIVEL FROM materia ";
	//devuelve solo los resultados, sin repetir el campo.
   $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
	return $result;
	}

	// funcion que permite rescatar materias de un nivel seleccionado
function listarM($nivel)
 	{	
		
	$Obj_config=new conecta();
	$link=mysqli_connect($Obj_config->get_dbhost(),$Obj_config->get_dbuser(),$Obj_config->get_dbpass(),$Obj_config->get_dbname()) or 	die('No pudo conectarse : ' .mysqli_error());
    $sql= "SELECT * FROM materia WHERE MAT_NIVEL = '".$nivel."'";
   $result = mysqli_query($link,"SET NAMES 'utf8'");
    $result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
			
			}
	
	}

?>
