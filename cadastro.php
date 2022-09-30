
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title">Bem-vindo ao Clube</h5>
						<form action="?page=salvar" method="POST">
						<input type="hidden" name="acao" value="cadastrar">
						<div class="mb-3">
							<label for="nome" class="form-label">Nome</label>
							<input type="text" name="nome" class="form-control" placeholder="Nome Completo"> 
						</div>
						<div class="mb-3">
							<label for="cpf" class="form-label">CPF</label>
							<input type="text" name="cpf" class="form-control" placeholder="000.123.321-12" required maxlength="14">
						</div>
						<div class="mb-3">
							<label for="telefone" class="form-label">Telefone</label>
							<input type="text" name="telefone" class="form-control" placeholder='(00) 9999-99999' required pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
						</div> 
						<div class="mb-3">
							<label class="form-label">Data de nascimento</label>
							<input type="date" name="dt_nascimento" class="form-control" required>
						</div>
						<div class="mb-3"> 
							<input type="checkbox" name="genero" class="form-check-input" value="M">
							<label class="form-check-label" >Masculino</label>
						</div>
						<div class="mb-3">
							<input type="checkbox" name="genero" class="form-check-input" value="F">
							<label class="form-check-label">Feminino</label>
						</div>
						<div class="mb-3">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$("input[name='genero']").click(function(){
			$("input[name='genero']").prop('checked', false);
			$(this).prop('checked', true);
			if($(this).val() == "M"){
				$("input[name='genero'][value='F']").prop("cheked", false);
			} else {
				$("input[name='genero'][value='M']").prop("cheked", false);
			}	
		})
		$('[name=telefone]').mask('(00) 0000-00009');
		$('[name=cpf]').mask('000.000.000-00');
		$('[name=nome]').mask('A', {
			translation: {
				'A': {pattern: /[A-Za-zÀ-ú ]/, recursive: true}
			}
		});
	});
</script>