<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Upload de Arquivo</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

</head>
<body>
	<form method="post" action="inserir.php" enctype="multipart/form-data" class="ui form segment">

		<div class="two fields">

		    <div class="field">
		      <label>Nome *</label>
		      <input name="nome" type="text" required>
		    </div>

		    <div class="field">
		      <label>Cidade *</label>
		      <input name="cidade" type="text" required>
		    </div>			

		</div>

		<div class="one fields">
			<div class="field">
		
			<label>Arquivo *</label>
		      <input name="arquivo" type="file" required>
		    </div>

		</div>
		<br>
		<div class="one filds">
			<p>
				<input type="submit" value="Cadastrar Pessoa" class="ui green button">
			</p>
		</div>

	</form>
</body>
</html>