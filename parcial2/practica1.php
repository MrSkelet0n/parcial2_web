<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 1</title>
	<style>
		body {
			height: 100%;
		}

		#alumno {
			color: white;
			font-weight: bold;
			background: black;
			text-align: center;
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 30px;
		}

		div {
			border: 1px solid black;
			padding: 30px;
			width: 30px;
			display: inline-flex;
		}
	</style>
</head>

<body>
	<?php
	echo '<h1>Mi primer programa en PHP</h1>';
	echo '<br><br>';

	echo '<h2 style="color:red">Lista De Numeros</h2><br>';

	for ($i = 0; $i < 10; $i++) {
		echo $i + 1 . "<br>";
	}

	for ($i = 0; $i < 10; $i++) {
		if ($i % 2 == 0) {
			echo '<div style="background-color:green;" >';
		} else {
			echo '<div style="background-color:blue;" >';
		}
		echo $i + 1;
		echo '</div>';
	}
	?>

	<span id="alumno">
		CETIS 107 - Rodríguez Murrieta Kevin Vladimir - 5AVP
	</span>
</body>

</html>