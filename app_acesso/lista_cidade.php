<?php

require('../connection.php');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

header("Access-Control-Allow-Origin: *");

$id = $_GET['id'];
echo "  ".$id."  ";
header('Content-type: text/html; charset=ISO-8859-1');
$select = sprintf("SELECT * FROM cidade WHERE estado = '%s' ORDER BY nome",$id);
$sql = mysqli_query($conexao,$select);
while($row = mysqli_fetch_array($sql)){
	$nome   = $row['nome'];
	$id_cid = $row['id'];
	
	$veri_cid = verifica_cidade_cli($conexao, $id_cid);
	
	if($veri_cid){
		echo '<option value='.$id_cid.' class="cidades">'.$nome.'</option>';
	}else{
		echo '<option value='.$id_cid.' class="cidades" disabled style="background-color: #E0E0E0;">'.$nome.'</option>';
	}
	
}












function verifica_cidade_cli($conexao, $id_cid){
	require_once "mdl_foto.php";	
	$verifica_id_cid = seleciona_id_cidades($conexao, $id_cid);
	if($verifica_id_cid == true){
		return true;
	}else{ return false; }
}

