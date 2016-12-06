<?php

require('../connection.php');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

header("Access-Control-Allow-Origin: *");

$sql = mysqli_query($conexao, "select * from estado");
header('Content-type: text/html; charset=utf-8');
echo "<option value=' '>Estado</option>";
while($row = mysqli_fetch_array($sql)){
		$id   = utf8_encode($row['id']);
	    $nome = utf8_encode($row['nome']);
	    $uf   = utf8_encode($row['uf']); 

	    echo "<option value=".$id.">".$uf."</option>";
}

?>