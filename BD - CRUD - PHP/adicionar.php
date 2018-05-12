<?php 
	require 'config.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes(md5($_POST['senha']));

		$sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
		$sql = $pdo->query($sql);	

		header("Location: index.php");
	} 
?>

<h3>Adicionando novo usuário</h3>

<form method="POST">
	Nome: <input type="text" name="nome"><br><br>
	Email: <input type="text" name="email"><br><br>
	Senha: <input type="password" name="senha"><br><br>
	<input type="submit" value="Enviar">

</form>