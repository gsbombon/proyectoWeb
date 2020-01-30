<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<style>
	
	#contenedor{
	border-top:#000000 solid 5px;
}
	</style>
<body >
	<div class="cuerpo">
<p class="texto">GENERADOR DE CURSO</p>
<div id="contenedor">
	<div id="agregar" align="right"><img src="../img/inicio.png"/></div>
	<center>
<form id="nivel" name="nivel" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
	<p>
	  <label for="select">Nivel:</label>
      <select name="curso" id="curso" class="campos">
		   <?php
function generarhorario($v,$k,$m,$numMat){
        for($j=0;$j<5;$j++){
            for($i=0;$i<8;$i++){
				if($i%2==0&& $i!=0){
					$v[$k]=$v[$k]-2;
					$k= $k+1;
				};
				if($k==$numMat){
					$k=0;
				}
				if($v[$k]==0){
					$k=$k+1;
				}
                $matriz[$i][$j] = $m[$k]." ";	       
            }
        }
	return $matriz;        /*for($i=0;$i<8;$i++){
            for($j=0;$j<8; $j++){
             echo "[".$matriz[$i][$j]."]";
            }
            echo '<br>';
        }*/
    }
	
		require("../Data/CursoDB.php");
 	$Obj_CursoDB=new CursoDB(); 
	$result =$Obj_CursoDB->llenarNCbx();
		while($materia=mysqli_fetch_array($result)){
			 echo '<option value="'.$materia['MAT_NIVEL'].'">'.$materia['MAT_NIVEL'].'º CURSO </option>';
			}
        ?>
      </select>
      <input type="submit" name="submit" id="button2" value="Generar">
	</p>
	</form>
	 <?php 
$curs=$_POST["curso"];
echo $curs;
$materias = $Obj_CursoDB->listarM($curs);
$i=0;
while($mostrar = mysqli_fetch_assoc($materias)){
	$matNombre[$i]=$mostrar['MAT_NOMBRE'];
	$matHoras[$i]=$mostrar['MAT_HORAS'];
	$i++;
}
		//print_r($matHoras);
		//print_r($matNombre);
		$horario = generarhorario($matHoras,rand(0,8),$matNombre,count($matNombre)-1);
  
    
		?>
	<table width="910" height="44" border="1">
	  <tbody>
    <tr bgcolor="#2B2B2B"  >
      <td width="70" style="color: white">HORA</td>
      <td width="87" style="color: white">LUNES</td>
      <td width="66" style="color: white">MARTES</td>
      <td width="90" style="color: white">MIERCOLES</td>
      <td width="82" style="color: white">JUEVES</td>
		 <td width="82" style="color: white">VIERNES</td>
    </tr>
	    <tr bgcolor=#F3F3F3 >
      		<td width="94" bgcolor="#2B2B2B" style="color: white"><p>1ra</p></td>
			<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[0][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94" bgcolor="#2B2B2B" style="color: white"><p>2da</p></td>
			<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[1][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94" bgcolor="#2B2B2B" style="color: white"><p>3ra</p></td>
			<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[2][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94" bgcolor="#2B2B2B" style="color: white"><p>4ta</p></td>
			<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[3][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#8618A4  style="color: white" >
      		<td width="94"><p>R</p></td>
			<td width="94"><p>E</p></td>
			<td width="94"><p>C</p></td>
			<td width="94"><p>R</p></td>
			<td width="94"><p>E</p></td>	  
   		<td width="94"><p>O</p></td>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94" bgcolor="#2B2B2B" style="color: white"><p>5ta</p></td>
		<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[4][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94"  bgcolor="#2B2B2B" style="color: white"><p>6ta</p></td>
			<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[5][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  <tr bgcolor=#F3F3F3 >
      		<td width="94"  bgcolor="#2B2B2B" style="color: white"><p>7ma</p></td>
		<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[6][$i] ?></p></td>
			<?php } ?>
		  </tr>
		    <tr bgcolor=#F3F3F3 >
      		<td width="94"  bgcolor="#2B2B2B" style="color: white"><p>8va</p></td>
		<?php for ($i=0; $i<5;$i++){ ?>
			<td width="94"><p><?php echo $horario[7][$i] ?></p></td>
			<?php } ?>
		  </tr>
		  
	
  </tbody>
</table>
<p>&nbsp;</p>
	<p>&nbsp;</p>
		<div>
		<form id="profes" name="profes" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
	
	  <label for="select">Nivel:</label>
      <select name="curso" id="curso" class="campos">
			<?php 
			$result =$Obj_CursoDB->llenarNCbx();
		while($materia=mysqli_fetch_array($result)){
			 echo '<option value="'.$materia['MAT_NIVEL'].'">'.$materia['MAT_NIVEL'].'º CURSO </option>';
			}
			?></select>
		  <input type="submit" name="submit" id="button2" value="Generar">
		  </form>
		</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	</center>

  </div>
</div>
<body>
</body>
</html>