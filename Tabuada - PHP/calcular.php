<?php
	include_once "index.php";
	echo "<br><hr><br>";
	$valor = $_POST['numero'];
	$multiplicador = 0;

	while($multiplicador < 11) {
		echo $valor." * ".$multiplicador." = ".($valor*$multiplicador)."<br>";
		$multiplicador++;
	}



?>