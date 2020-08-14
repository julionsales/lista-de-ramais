<?php

$conn = new PDO('mysql:host=localhost', 'root', '');

$idSetor = $_POST ['idSetor'];

$sql = "select nome,ramal from agenda.contatos where id_setor =  :bicicleta ";
$objPdo = $conn->prepare($sql);
$objPdo->bindValue(':bicicleta',$idSetor);

try{
	$objPdo->execute();
}catch(PDOException $e){
	echo "Erro";
}

$arrContatos = array();
	while ($arrPdo = $objPdo->fetch(PDO::FETCH_ASSOC)){
		$nome = $arrPdo['nome'];
		$ramal = $arrPdo['ramal'];
		
		$arrContato = array(
			'nome' => $nome,
			'ramal' => $ramal

		);

		#append here ($json = json_encode($arr);)
		$arrContatos[] = $arrContato; 

		
	}
	echo json_encode($arrContatos);
