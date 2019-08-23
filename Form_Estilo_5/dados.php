<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados</title>
	<link rel="stylesheet" type="text/css" href="dados-style.css">
</head>
<body>
	<div id="corpo">
	<?php 
		//PEGA OS DADOS
		$nome = isset($_POST["nome"])?$_POST["nome"]:"nome não definido";
		$idade = isset($_POST["idade"])?$_POST["idade"]:"idade não definida";
		$nascimento = isset($_POST["data"])?$_POST["data"]:"data de nascimento não definida";
		$sexo = isset($_POST["sexo"])?$_POST["sexo"]:"sexo não definido";
		$telefone = isset($_POST["tel"])?$_POST["tel"]:"numero não definido";
		$email = isset($_POST["email"])?$_POST["email"]:"email não definido";
		$estado = isset($_POST["estado"])?$_POST["estado"]:"estado não definido";


		//monta os dados
		$dados = array(
			"nome"=>"$nome",
			"Idade"=>"$idade",
			"Data de Nascimento"=>"$nascimento",
			"Sexo"=>"$sexo",
			"Telefone"=>"$telefone",
			"Email"=>"$email",
			"Estado"=>"$estado"
		);
		echo $dados;
		echo "<h1>codificada:</h1>";
		$dadosJson = json_encode($dados);
		echo $dadosJson;
		//abre o arquivo dados.php
		$f = fopen("dados-user.json", "a");
		//salvas os dados do formulário no arquivo dados.html
    	fwrite($f, $dadosJson);
    	//fecha o arquivo dados.php
    	fclose($f);
    	//exibe o texto na tela
		echo "<h1>DADOS SALVOS COM SUCESSO</h1>";
	?>

	
	<!-- BOTÃO VISUALISAR/VOLTAR -->
	<p><button><a href="dados-user.json">VISUALISAR</a></button> <button><a href="index.html">VOLTAR</a></button></p>
</div>


</body>
</html>
