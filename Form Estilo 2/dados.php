<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados</title>
	<style type="text/css">
		body{
			text-align: center;
			background-color: #cccccc;
			font-family: Arial;
		}

		div#corpo{
			background-color: #fff;
			width: auto;
			margin: 0px 50px 0px 50px;
			box-shadow: 5px 5px 2px rgba(0,0,0,.5);
		}

		body a{
			text-decoration: none;
		}

		#back button{
			background-color: #000;
			color: #fff;
			padding: 5px;
			border: solid rgba(0,0,0,0);
			transition: background-color .5s;	
			margin-bottom: 30px;
		}
		#back button:hover{
			background-color: #ccc;
			color: #000;
		}

		h1{
			text-shadow: 2px 2px 2px #ccc;
		}
	</style>
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
		$dados = "
			<fieldset>
			<legend>$nome - <script>document.write(Date())</script></legend>
			<p>Idade: $idade</p>
			<p>Data de Nascimento: $nascimento</p>
			<p>Sexo: $sexo</p>
			<p>Telefone: $telefone</p>
			<p>Email: $email</p>
			<p>Estado: $estado</p>
			</fieldset>
		";
		//abre o arquivo dados.php
		$f = fopen("dados-user.php", "a");
		//salvas os dados do formulário no arquivo dados.html
    	fwrite($f, "$dados");
    	//fecha o arquivo dados.php
    	fclose($f);
    	//exibe o texto na tela
		echo "<h1>DADOS SALVOS COM SUCESSO</h1>";
	?>
	<!-- BOTÃO VISUALISAR/VOLTAR -->
	<p><a href="dados-user.php"><span id="back"><button>VISUALISAR</button></span></a><a href="index.html"><span id="back"><button>VOLTAR</button></span></a></p>
</div>


</body>
</html>
