<?php

require('../connection.php');
require('mdl_foto.php');

header("Access-Control-Allow-Origin: *");

$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);


if(mysqli_connect_errno($conexao)){
	echo "A conexÃ£o falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
//	echo "A conexÃ£o foi estabelecida com sucesso!";
}


isset($_GET['gcm_code'])? $gcm_code = $_GET['gcm_code'] : $gcm_code = "";
isset($_GET['email'])? $foto_email	= $_GET['email'] 	: $foto_email = "";
isset($_GET['senha'])? $foto_senha  = $_GET['senha']	: $foto_senha = "";

if($gcm_code != "" || $gcm_code != "" || $gcm_code != ""){
	$resultado = insert_GCM($conexao, $foto_email, $gcm_code);
	if($resultado == true){
		return true;
	}else{
		return false;
	}
}

