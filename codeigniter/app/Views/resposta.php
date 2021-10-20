<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resposta</title>
</head>
<body>
	<?php foreach(json_decode($dados) as $dado){ ?>
		<?=$dados?><br>
	<?php } ?>

	<a href="/codeigniter/public/formulario/2">Formulário</a>
</body>
</html>