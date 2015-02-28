<html>
<head>
	<meta charset="UTF-8"> 
	<title>
		Upload de Arquivo
	</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">

		<p><label for="upload">Arquivo</label>
			<input type="file" name="arquivo" id="arquivo" required="required">
		</p>

		<p><input type="submit" value="Enviar"></p>

	</form>
</body>
</html>

<?php


if (isset($_FILES['arquivo'])) {

// echo substr($_FILES['arquivo']['name'], -4) . "<br>";
echo $_FILES['arquivo']['name'] . "<br>";

echo $_FILES['arquivo']['type'] . "<br>";

echo $_FILES['arquivo']['size'] . "<br>";

echo $_FILES['arquivo']['tmp_name'] . "<br>";

}