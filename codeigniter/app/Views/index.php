<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
</head>
<body>
	<style type="text/css">
		body {
			background-color: grey;
		}
	</style>
	<center>
	<h2>Formulário de Cadastro<br>de Profissionais</h2><br><br>
	<form method="post" action="/codeigniter/public/cadastrar">
		<input type="text" name="nome" placeholder="Insira seu nome"><br><br>

		<input type="text" name="idade" placeholder="Insira sua idade"><br><br>

		<label>Sexo</label>
		<select name="sexo">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select>
		<br><br>

		<input type="text" name="profissao" placeholder="Insira sua profissão"><br><br><br>
		<input type="submit" value="Cadastrar">
	</form>
	<br><br>
	<a href="http://localhost:8080/codeigniter/public/ler">Ler Dados</a>
	</center>
</body>
</html>