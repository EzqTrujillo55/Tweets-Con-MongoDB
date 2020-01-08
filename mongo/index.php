<?php
// Esta ruta debe apuntar al autocargador de Composer
require 'vendor/autoload.php';

//echo phpversion();
//phpinfo();
$conexion = new MongoDB\Client('mongodb+srv://pablo:12345@cluster0-ok93s.mongodb.net/test?retryWrites=true&w=majority');

$datos = $conexion->test->collection;
//$collection = $client->selectDB("test")->selectCollection("test");
$resultado = $datos->find()->toArray();
$tamaño = sizeof($resultado);
//print_r($resultado);
echo "<h3 class='text-center text-white bg-dark'>Tweets con Python y MongoDB</h3><div class='container mt-2'> 
	  <div class='row text-center'>
	  	<div class='col-2'> 
	  		Nombre
	  	</div>
	  	<div class='col-2'> 
	  		Foto
	  	</div>
	  	<div class='col-2'> 
	  		Descripción
	  	</div>
	  	<div class='col-2'> 
	  		Tweet
	  	</div>
	  	<div class='col-2'> 
	  		Hora
	  	</div>
	  	<div class='col-2'> 
	  		Ubicación
	  	</div>
	  </div>
	  </div>";
 for($i=0; $i<=$tamaño; $i++){ 
		$nombres = $resultado[$i][user][name];
		$foto = $resultado[$i][user][profile_image_url];
		$descripcion= $resultado[$i][user][description];
		$tweet = $resultado[$i][text];
		$ubicacion = $resultado[$i][user][location];
		$hora = $resultado[$i][created_at];
		echo 
		"<div class='container'>
			<div class='row'>
				<div class='col-2'>"  . $nombres . "</div>
				<div class='col-2'> 
					<img src=".$foto." style='width:100%;'>
				</div>
				<div class='col-2'> "
					.$descripcion.
				"</div>
				<div class='col-2'> "
					.$tweet.
				"</div>
				<div class='col-2'> "
					.$hora.
				"</div>
				<div class='col-2'> "
					.$ubicacion.
				"</div>
			</div>
		</div>";

	}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tweets</title>
</head>
<body>
	 
</body>
<img src="">
</html>