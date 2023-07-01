<?php


  $servidor = "mysql:dbname=db_cadastro";
  $usuario  = "jorge";
  $senha    = "1234";

   try{
      $pdo = new PDO($servidor,$usuario,$senha);
      $pdo->exec("set names utf8");
   }
   catch(PDOException $e){
      echo "Erro com o banco de dados : ".$e->getMessage();
   }
   catch(Exception $e){
      echo "Erro genérico : ".$e->getMessage();
   }

function listagem(){
	//Usamos o fetch() para transformar a variável em um array().
	//Colocamos o parâmetro "PDO::FETCH_ASSOC" dentro de fetch() para
	//Trazer somente o nome das colunas do banco de dados.
	global $pdo;
	$res = array();
	$cmd = $pdo->query("select * from tb_clientes");
	$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function cadastrar($no,$em,$tel,$ed){
		global $pdo;
		$cmd = $pdo->prepare("insert into tb_clientes(nome,email,telefone,endereco)
		values (:n,:email,:t,:e)"); 
		$cmd->bindValue(":n",$no);
		$cmd->bindValue(":email",$em);
		$cmd->bindValue(":t",$tel);
		$cmd->bindValue(":e",$ed);
		$cmd->execute();
}




 /* Teste de conexão com inserção de dados.
 try{
    $pdo = new PDO("mysql:dbname=db_cadastro","jorge","1234");
 }
 catch(PDOException $e){
    echo "Erro com o banco de dados : ".$e->getMessage();
 }
 catch(Exception $e){
    echo "Erro genérico : ".$e->getMessage();
 }

 //------------------- INSERT --------------------------

$res = $pdo->prepare("insert into tb_clientes(nome,email,telefone,endereco) values (:n,:e,:t,:ende)");
$res->bindValue(":n","Zé");
$res->bindValue(":e","ze@gmail.com");
$res->bindValue(":t","1234-4321");
$res->bindValue(":ende","Rua das Laranjeiras, 30 Praia Grande SP.");
$res->execute();
if($res){
    echo "Valor incluido";
}
*/

?>

