<?php
	session_start();

	if(isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$dsn = "mysql:dbname=estudo;host=localhost;charset=utf8";
		$dbuser = "root";
		$dbpass = "";

		try {
			$pdo = new PDO($dsn, $dbuser, $dbpass);

			$sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
			$sql = $pdo->query($sql);

			if($sql->rowCount() > 0) {
				$dado = $sql->fetch();
				$_SESSION['id'] = $dado['id'];
				header("Location: index.php");
			}

		} catch(PDOException $e) {
			echo "Falhou: ".$e->getMessage();
		}
	}


?>

<center>
	<h1>Página de Login</h1>
	<form method="POST">
		E-mail:<br>
		<input type="text" name="email"><br><br>
		Senha:<br>
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Enviar">	
	</form>
</center>