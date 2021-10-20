<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<h3>Formulário</h3><br><br><br>
	<form method="post" action="http://localhost:8080/codeigniter/public/banco/gravar">
		<input type="text" name="nome" placeholder="Insira o seu nome"><br>
		<input type="text" name="idade" placeholder="Insira a sua idade"><br>
		<input type="text" name="profissao" placeholder="Insira a sua profissao"><br>
		
		<br><br>
		<input type="submit" value="Enviar">
	</form>
	<br><br>
	<a href="http://localhost:8080/codeigniter/public/banco/ler">Ver dados</a>
</body>
</html>