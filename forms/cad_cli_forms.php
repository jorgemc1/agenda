<?php require_once "../html/header.html" ?>

<div id="corpo">
	<h5>Cadastramento de clientes</h5><hr>
	&nbsp;
	<div class="row container">
		<form action="../bdados/cad_cli_bd.php" method="post">
			<!-- Campos do Formulário -->
			<!-- Nome -->
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" maxlength="50" size="50" required autofocus>
				<label for="nome">Nome do Cliente</label>
			</div>
			<!-- Email -->
			<div class="input-field col s12">
				<input type="email" name="email" id="email" maxlength="50" size="50"  required class="validate">
				<label for="email">Email do Cliente</label>
			</div>
			<!-- Telefone -->
			<div class="input-field col s12">
				<input type="tel" name="telefone" id="telefone" maxlength="20" size="20" >
				<label for="telefone">Telefone do Cliente</label>
			</div>
			<!-- Endereço -->
			<div class="input-field col s12">
				<input type="text" name="endereco" id="endereco" maxlength="50" size="50">
				<label for="endereco">Endereco do Cliente</label>
			</div>
			<div class="input-field col s12">
				<input type="submit" value="Cadastrar" class="btn blue">
				<input type="reset" value="Limpar" class="btn red">
			</div>
		</form>
	</div>
	
</div>       
    
    <?php require_once  "../html/footer.html" ?>