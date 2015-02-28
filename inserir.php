<?php 
	require 'conexao.php';

	$sql = "INSERT into pessoa (nome, cidade, arquivo)
			values (:nome, :cidade, :arquivo)";

	
	date_default_timezone_set("America/Sao_Paulo"); //Definindo timezone padrão
	 
	$ext = strtolower(substr($_FILES['arquivo']['name'],-4)); //Pegando extensão do arquivo
	$arquivo = date("d.m.Y-H.i.s") . $ext; //Definindo um novo nome para o arquivo
	$dir = 'arquivos/'; //Diretório para uploads
	 
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$arquivo); //Fazer upload do arquivo


	$url = "http://localhost/sites/2015/funec/aula3/upload.dev/" . $dir . $arquivo;

try {
	$dados = array(
		'nome' => $_POST['nome'],
		'cidade' => $_POST['cidade'],
		'arquivo' => $url
		);

	$inserir = $conexao->prepare($sql);
	$inserir->execute($dados);

	header("Location: listar.php");
	
	} catch (PDOException $e) {
		echo "Erro: " . $e->getMessage();
	}
?>