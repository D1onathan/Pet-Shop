<!doctype html> 
<html>

<head>
	<meta charset="utf-8">
	<title>MVC com PHP SENAI</title>
</head>

<body>
	
	<h1>LISTA DE PRODUTOS</h1>


	<form method="post" action="?metodo=inserir">
		<input type="text" name="Nome" placeholder="Digite o nome">
		<input type="submit" name="enviar" value="Inserir">
	</form>


	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($produtos as $produto) { ?>
				<tr>
					<td><?= $produto['id']; ?></td>
					<td><?= $produto['nome']; ?></td>
					<td>
						<a href="?metodo=deletar&id=<?= $produto['id']; ?>">
							Deletar
						</a>
					</td>
					<td>
						<a href="?metodo=editar&id=<?= $produto['id']; ?>">
							Editar
						</a>
					</td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>

</html>