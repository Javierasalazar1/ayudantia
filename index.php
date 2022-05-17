<?php 
include("ayudantia.php");

$consulta = "SELECT * FROM imagenes";
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actividad Listar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="contenedor-tabla">
		<div class="tabla_nombre">Tabla</div>
		<div class="tabla_id">Id</div>
		<div class="tabla_url">Imagenes</div>
		<?php $resultado=mysqli_query($con, $consulta); 
		while($row=mysqli_fetch_assoc($resultado)){ ?>
		<div class="tabla_item"> <?php echo $row["id"]; ?> </div>
		<div class="tabla_item"> <img src="<?php echo $row["url"]; ?>" width="200" alt="" srcset="" > </div>
		<?php }	 mysqli_free_result($resultado)?>
	</div>
	
	<section class="contenedor-carga">

		<h2 class="titulo">Elija un ID</h2>


	</section>
    
</body>
</html>

