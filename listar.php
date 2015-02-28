<?php 
	require 'conexao.php';
 	
 	$sql = "SELECT * from pessoa";
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Listar</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<style type="text/css">
		.container{
			width: 960px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<table class="ui striped table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Cidade</th>
					<th>Arquivo</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($conexao->query($sql) as $listar) : ?>
					<tr>
						<td><?= $listar['nome'] ?></td>
						<td><?= $listar['cidade'] ?></td>
						<td><img src="<?= $listar['arquivo'] ?>" width="160" height="120"></td>
					</tr>
				<?php endforeach ?>
			</tbody>

		</table>
	</div>
</body>
</html>