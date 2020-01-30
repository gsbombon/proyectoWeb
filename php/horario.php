<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php 
	$m[1] ="leng";
	$m[2] ="matematicas";
	$m[3] ="sociales";
	$m[4] ="naturales";
	$m[5] ="artiscitica";
	$m[6] ="fisica";
	$m[7] ="quimica";
	$m[8] ="filosofia";
	$m[9]="ciudadani";
	$m[10] ="educa"; 
	
	$v =[0,6,6,4,4,2,4,4,4,2,4,4];
	print_r($v);
	$v2 =6;
	$v3 =4;
	$v4 = 4;
	$v5 = 2;
	$v6 =4;
	$v7 =4;
	$v8 =2;
	$v9 =4;
	$v10 =4;
	echo("");
	echo "<br>";
	
	generarhorario($v,0,$m);
	echo("");
	echo "<br>";
	generarhorario($v,1,$m);
	echo("");
	echo "<br>";	generarhorario($v,5,$m);
	echo("");
	echo "<br>";	generarhorario($v,3,$m);
	echo("");
	echo "<br>";
	
	
	
function generarhorario($v,$k,$m){
        for($j=0;$j<5;$j++){
            for($i=0;$i<8;$i++){
				if($i%2==0){
					$v[$k]=$v[$k]-2;
					$k= $k+1;
				};
				if($k==10){
					$k=0;
				}
				if($v[$k]==0){
					$k=$k+1;
				}
                $matriz[$i][$j] = $m[$k]." ";
         		       
            }
        }
        for($i=0;$i<8;$i++){
            for($j=0;$j<8; $j++){
             echo $matriz[$i][$j];
            }
            echo '<br>';
        }
    }
    
	echo "hola";
	
	?>

	<script>
function enviarSelect(e){
    var val = $(e).find('option:selected').val();
    $.post( "horario.php", { nombre: val}, function(e){
        //ver que devuelve php
        alert(e);
    });
}</script>
<form id="nivel" name="nivel" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >	
	<select name="aa" onchange="enviarSelect(this)" >
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="5">4</option>
		</select>
<?php 
	$curs=$_POST["aa"];
echo $curs;
	?>
</form>
</body>
</html>