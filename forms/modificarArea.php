<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

</head>

<body>

<?
require('../php/conexion.php');
$queryCam = "SELECT ARE_ID, ARE_NOMBRE FROM area;";
$resultadoCam = $mysqli->query($queryCam);

if(isset($_POST['Crear'])){
        $nombre=$_POST['nomEquipo'];
        $campeonato=$_POST['campeonato'];
        $lema=$_POST['lema'];
    }
?>

<?php
    $id=$_REQUEST['id'];
    $conexion=mysqli_connect("localhost","admin","admin","proyecto_tecnicas");
    $consulta="SELECT * FROM area WHERE ARE_ID = '$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila = $resultado->fetch_assoc();
    ?>

    <div class="container">

        <div class="text-center pt-5">
            <h1>Modificar Area</h1>
        </div>
        <form id="formulario" class="formulario" method="post" action="../php/areaModificar.php?id=<?php echo $fila['ARE_ID']; ?>">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" name="nomArea" id="nomArea" value="<?php echo $fila['ARE_NOMBRE'] ?>" placeholder="Nombre del area">
                </div>
            </div>
            <?php
           
            ?>
            <input type="submit" name="Crear" class="btn btn-primary">Actualizar</input>
        </form>
    </div>
</body>
</html>