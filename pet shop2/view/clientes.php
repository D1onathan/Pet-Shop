<!doctype html> 
<html>

<head>
	<meta charset="utf-8">
	<title>MVC com PHP SENAI</title>
</head>

<body>
	
	<h1>LISTA DE CLIENTES</h1>


	<form method="post" action="?metodo=inserir">
		<input type="text" name="Nome" placeholder="Digite o nome">
		<input type="submit" name="enviar" value="inserir">
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
			<?php foreach ($clientes as $cliente) { ?>
				<tr>
					<td><?= $cliente['id']; ?></td>
					<td><?= $cliente['Nome']; ?></td>
					<td>
						<a href="?metodo=deletar&id=<?= $cliente['id']; ?>">
							Deletar
						</a>
					</td>
					<td>
						<a href="?metodo=editar&id=<?= $cliente['id']; ?>">
							Editar
						</a>
					</td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>

</html>