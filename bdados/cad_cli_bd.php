<style>
.box{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	background-color: rgba(0,0,0,0.6);
	padding:30px;
	border-radius:10px;
}
a{
	text-decoration:none;
	color:white;
	background-color: rgba(0,0,0,0.6);
	boder: 3px solid dodgerblue;
	border-radius: 10px;
	padding: 10px;
}
a:hover {
  color:rgb(0,0,0);	
  background-color: rgba(206,213,199,1);
}
</style>
<?php   require_once "conexao.php";

 //Entrada de dados.
	$nome     = addslashes($_POST["nome"]);
	$email    = addslashes($_POST["email"]);
	$telefone = addslashes($_POST["telefone"]);
	$endereco = addslashes($_POST["endereco"]);
	
	echo "Nome     => ".$nome."<br>";
	echo "Email    => ".$email."<br>";
	echo "Telefone => ".$telefone."<br>";
	echo "Endereço => ".$endereco."<br>";
	
	//Verificando se os dados foram totalmente preenchidos.
	if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($endereco)){
		cadastrar($nome,$email,$telefone,$endereco);
		header("Location:../forms/cad_cli_forms.php");
	}
	else{
		echo "Preencher todos os dados do formulário !!!<br>";
		?>
		<div class="box">
		 <a href="../forms/cad_cli_forms.php">Voltar ao Cadastro...</a>
		</div>
		<?php
	}

?>
