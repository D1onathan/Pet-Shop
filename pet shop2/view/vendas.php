<!doctype html> 
<html>

<head>
	<meta charset="utf-8">
	<title>MVC com PHP SENAI</title>
</head>

<body>
	
	<h1>LISTA DE VENDAS</h1>


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
			<?php foreach ($vendas as $venda) { ?>
				<tr>
					<td><?= $venda['id']; ?></td>
					<td><?= $venda['Nome']; ?></td>
					<td>
						<a href="?metodo=deletar&id=<?= $venda['id']; ?>">
							Deletar
						</a>
					</td>
					<td>
						<a href="?metodo=editar&id=<?= $venda['id']; ?>">
							Editar
						</a>
					</td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>

</html>