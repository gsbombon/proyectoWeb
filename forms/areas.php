<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
			<script>
			$(document).ready(function(){
	    		$('#crear').click(function(){
	       		$("#contenido").load("crearAreas.php");
	    									 });

	    		$('#listar').click(function(){
	       		$("#contenido").load("listarAreas.php");
	    									 });
				
										
			});
		</script>
</head>

<body>
	<h2>A R E A S</h2>
	<hr>
			<input type="button" value="Crear" id="crear" name="crear">
			<input type="button" value="Listar" id="listar" name="listar">
		
			<div id="contenido"></div>

</body>
</html>