<?php

require('../connection.php');

//header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);


if(mysqli_connect_errno($conexao)){
	echo "A conexÃ£o falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
//	echo "A conexÃ£o foi estabelecida com sucesso!";
}

$return_arr = array();

$row_array = array("nome","celular","tel","email","data","servico","vagas","data_pedi","complementar","orc_min","orc_max","estado","cidade");

$sql_query = "select  date_format(ev.data_pedi_cad,'%d/%c/%y')  as 'data_pedi', cli.cli_nome as 'nome', ev.servico as 'servico',
ev.vagas as 'vagas', 

case when orc.orc_valor_min >= 100  and orc.orc_valor_max <= 1000  then 1
	 when orc.orc_valor_min >= 1000 and orc.orc_valor_max <= 2000  then 2
     when orc.orc_valor_min >= 2000 and orc.orc_valor_max <= 5000  then 3
     when orc.orc_valor_min >= 5000 and orc.orc_valor_max <= 10000 then 4
     when orc.orc_valor_max > 10000 							   then 5
     end as 'orca_num',
     
cid.nome as 'cidade', es.uf as 'estado'

from cliente02 cli, evento ev, orcamento orc, localizacao_evento lv, estado es, cidade cid 
where cli.cli_cod02 = ev.cliente02_cli_cod02 AND 
orc.cod_evento = ev.cod_evento AND 
lv.cod_evento = ev.cod_evento AND 
es.id = lv.loca_estado_ev AND 
cid.id = lv.local_cidade_ev";

$resultado = mysqli_query($conexao, $sql_query);

/*while ($row = mysqli_fetch_assoc($resultado)) {
	$row_array['nome'] 	       = $row['nome'];
	$row_array['celular']      = $row['celular'];
	$row_array['tel'] 	       = $row['tel'];
	$row_array['email']        = $row['email'];
	$row_array['data']	       = $row['data'];
	$row_array['servico']      = $row['servico'];
	$row_array['vagas']	       = $row['vagas'];
	$row_array['data_pedi']    = $row['data_pedi'];
	$row_array['complementar'] = $row['complementar'];
	$row_array['orc_min']      = $row['orc_min'];
	$row_array['orc_max']	   = $row['orc_max'];
	$row_array['estado']       = $row['estado'];
	$row_array['cidade']	   = $row['cidade'];

	array_push($return_arr, $row_array);
}*/



while ($row = mysqli_fetch_array($resultado)) {
	echo "<tr>";
	echo "<td>".$row['data_pedi']."</td>";
	echo "<td>".$row['nome']."</td>";
	echo "<td>".$row['servico']."</td>";
	echo "<td>".$row['vagas']."</td>";	
	echo "<td>".$row['orca_num']."</td>";
	echo "<td>".utf8_encode($row['cidade'])."</td>";
	echo "<td>".$row['estado']."</td>";
	echo "</tr>";
}







	//echo print_r($rows);

//echo json_encode($rows);
	
?>