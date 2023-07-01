<style>
#cplista{
 background-color:rgba(46, 68, 88, 0.87);
 color:white;
 font-size:22px;
 padding-top:10px;
 padding-left:10px;
}
#alink{
	text-decoration :none;
	border: 1px solid white;
	padding: 5px;
	border-radius: 5px;
}
#alink:hover{
	color:red;
	background-color:rgba(0,0,0,0.3);
}
</style>
<?php require_once "../html/header.html" ?>
<?php require_once "../bdados/conexao.php" ?>

<div id="cplista">
	<h5>Listagem Geral do Sistema</h5><hr>
	&nbsp;
	<?php 
	 $res = listagem();
	 echo "<table>";
	 foreach($res as $item){
     // echo "Nome :".$item['nome']." --> Email :".$item['email']."<br>";
	  echo "<tr>";
	  echo "<td width=30%>Nome  : ".$item['nome']."</td>";
	  echo "<td width=30%>Email : ".$item['email']."</td>";
	  echo "<td width=20%>Fone  : ".$item['telefone']."</td>";
	  echo "<td width=10%><a href='#' id='alink'>Apagar</a></td>";
	  echo "<td width=10%><a href='#' id='alink'>Editar</a></td>";
	  echo "<tr>";
     }
	  echo "</table>";
	?>
</div>       
    
    <?php require_once  "../html/footer.html" ?>