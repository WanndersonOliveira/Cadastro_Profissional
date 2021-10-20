<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Profissionais</title>
</head>
<body>
	<style type="text/css">
		body {
			background-color: grey;
		}
	</style>
	<center>
	<h2>Lista de Profissionais Cadastrados</h2>
	<br><br>
	<?php
		if(isset($profissionais)){ ?>
			<table border="1">
				<tr>
					<td>Nome</td>
					<td>Idade</td>
					<td>Sexo</td>
					<td>Profissão</td>
					<td>Deletar</td>
					<td>Alterar</td>
				</tr>
				<?php foreach($profissionais as $profissional){ ?>
					<?php 
						if(isset($id)){ ?>

							<form action="<?='http://localhost:8080/codeigniter/public/alterar' ?>" method="POST">
						<?php	if($id === $profissional->getId()){ ?>
								<tr>
							<input type="hidden" name="id" value="<?=$id?>">
							<td><input type="text" name="nome" value="<?=$profissional->getNome()?>"></td>
							<td><input type="text" name="idade" value="<?=$profissional->getIdade()?>"></td>
							<td><input type="text" name="sexo" value="<?=$profissional->getSexo()?>"></td>
							<td><input type="text" name="profissao" value="<?=$profissional->getProfissao()?>"></td>
							<td><a href="<?='http://localhost:8080/codeigniter/public/deletar/'.$profissional->getId() ?>">Ação</a></td>
							<td><input type="submit" value="Ação"></td>
						</tr>


						<?php	} else { ?>
								<tr>
						<td><?=$profissional->getNome();?></td>
						<td><?=$profissional->getIdade();?></td>
						<td><?=$profissional->getSexo();?></td>
						<td><?=$profissional->getProfissao();?></td>
						<td><a href="<?='http://localhost:8080/codeigniter/public/deletar/'.$profissional->getId() ?>">Ação</a></td>
						<td><a href="<?='http://localhost:8080/codeigniter/public/alterar/'.$profissional->getId() ?>">Ação</a></td>
					</tr>
						
						<?php	} ?>

						</form>

						<?php } else { ?>
						<tr>
						<td><?=$profissional->getNome();?></td>
						<td><?=$profissional->getIdade();?></td>
						<td><?=$profissional->getSexo();?></td>
						<td><?=$profissional->getProfissao();?></td>
						<td><a href="<?='http://localhost:8080/codeigniter/public/deletar/'.$profissional->getId() ?>">Ação</a></td>
						<td><a href="<?='http://localhost:8080/codeigniter/public/alterar/'.$profissional->getId() ?>">Ação</a></td>
					</tr>
					<?php
						}
					?>
				<?php } ?>
			</table>
	<?php
		}
	?>

	<br><br>
	<a href="http://localhost:8080/codeigniter/public/">Cadastrar</a>
	</center>
</body>
</html>