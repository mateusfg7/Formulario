<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados</title>
	<style type="text/css">
		body{
			background-image: url(wallpaper.jpg);
			text-align: center;
			font-family: Blippo, fantasy;
		}

		body a{
			text-decoration: none;
		}

		.center{
			position: relative;
			top: 200px;
          	color: #332d00;
		}

		#back button{
			background-color: #332d00;
			color: #FBDBA8;
			border: 5px solid #332d00;
		}
		#back button:hover{
			background-color: #FBDBA8;
			color: #332d00;
			border: 5px solid #FBDBA8;
		}
		/*
		#back button:hover{
			background-color: #443c00;
			color: #c6ad85;
			border: 5px solid #443c00;
		}
		*/
	</style>
</head>
<body>
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
		//abre o arquivo dados.html
		$f = fopen("dados.html", "a");
		//salvas os dados do formulário no arquivo dados.html
    	fwrite($f, "$dados");
    	//fecha o arquivo ados.html
    	fclose($f);
    	//exibe o texto na tela
		echo "<h1 class='center'>DADOS SALVOS COM SUCESSO</h1>";
	?>
	<!-- BOTÃO VOLTAR -->
	<p><a href="index.html" class="center"><span id="back"><button>VOLTAR</button></span></a></p>


</body>
</html>
