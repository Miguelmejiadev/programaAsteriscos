<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Asteriscos</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 

</head>
<body>
<header>
	<h1>Programa de asteriscos</h1>
</header>

<div class="contenedor">

<section class="seccion1">
	<form action="index.php" method="POST" >
		<label for="">Ingresa un límite</label><input type="number" name="limite" min="1" required>
		<label for="">Ingresa un Incremento </label><input type="number" name="incremento" min="1" required>
		<input type="submit" value="Generar">

	</form>


<section class="seccion2">


<?php
error_reporting(E_ALL ^ E_NOTICE);

$limite_L = $_POST['limite'];
$incremento_D  = $_POST['incremento'];


for ($i=1; $i <= $limite_L; $i++) :

	$inc = ($i * $incremento_D);

	for ($j=1; $j <= $inc; $j++) :
		
		echo "*";

	endfor;

	echo "<br>";
	
endfor;


for ($k=1; $k <= $limite_L; $k++) : 

	for ($l=$inc-1; $l >= $k * $incremento_D ; $l--) :
		
		echo "*";

	endfor;

		echo "<br>";

endfor;


?>



  </section>
</section>


 
</div>


</body>


</html>