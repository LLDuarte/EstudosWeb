<!-- arquivo que mostra os usuários -->

<?php require 'config.php'; ?>

<center><h3><a href="adicionar.php">Adicionar novo usuário</a></h3></center>
<table border=0 width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	<?php 
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $usuario) {
			echo '<tr>';
			echo '<td>'.$usuario["nome"].'</td>';
			echo '<td>'.$usuario["email"].'</td>';
			echo '<td><a href=editar.php?id='.$usuario["id"].'>Editar</a> - <a href=excluir.php?id='.$usuario["id"].'>Exluir</a></td>';
			echo '</tr>';
		}
	}


	?>
</table>