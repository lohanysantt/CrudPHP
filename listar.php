<h1>Listar Usuários</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>Telefone</th>
		<th>Data de Nascimento</th>
		<th>Gênero</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios";
		$res = $conn->query($sql);
		if($res->num_rows > 0){
			while ($row = $res->fetch_object()) {
				print "<tr>";
				print "<td>".$row->id."</td>";
				print "<td>".$row->nome."</td>";
				print "<td>".$row->cpf."</td>";
				print "<td>".$row->telefone."</td>";
				print "<td>".$row->dt_nascimento."</td>";
				print "<td>".$row->genero."</td>";
				print "<td>
							<button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
							<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button>
					   </td>";
				print "</tr>";
			}
		}else{
			print "Não tem resultados";
		}
	?>
</table>