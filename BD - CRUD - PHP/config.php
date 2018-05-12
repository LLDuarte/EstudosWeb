<?php
	$dsn = "mysql:dbname=estudo;host=localhost;charset=utf8";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch(PDOException $e) {
		echo "Falhou a conexão com o banco. Erro: ".$e->getMessage();
	}



?>