<?php require 'config.php'; ?>

<h3>Você deseja mesmo excluir este usuario?</h3>

<?php
	if(isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);

		$sql = "DELETE FROM usuarios WHERE id = '$id'";
		$pdo->query($sql);

		header("Location: index.php");

	} else {
		header("Location: index.php");
	}


?>