<?php
	$sql = "SELECT * FROM usuarios WHERE id = ".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<h1>Editar</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label for="nome" class="form-label" >Nome</label>
		<input type="text" name="nome" class="form-control" value='<?php print $row->nome; ?>'>
	</div>
	<div class="mb-3">
		<label for="cpf" class="form-label">CPF</label>
		<input type="number" name="cpf" class="form-control"  value='<?php print $row->cpf; ?>'>
	</div>
	<div class="mb-3">
		<label for="telefone" class="form-label">Telefone</label>
		<input type="number" name="telefone" class="form-control"  value='<?php print $row->telefone; ?>'>
	</div>
	<div class="mb-3">
		<label for="dt_nascimento" class="form-label">Data de Nascimento</label>
		<input type="date" name="dt_nascimento" class="form-control"  value='<?php print $row->dt_nascimento; ?>'>
	</div>
	<div class="mb-3">
		<label for="genero" class="form-label">Gênero</label>
		<select name="genero" class="form-control">
			<option value="M" <?php if($row->genero=="M"){ print "selected"; } ?>>Masculino</option>
			<option value="F" <?php if($row->genero=="F"){ print "selected"; } ?>>Feminino</option>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a href="?page=listar" class="btn btn-danger">Cancelar</a>
	</div>	
</form>