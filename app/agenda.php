<?php

$conn = new PDO('mysql:host=localhost', 'root', '');

$sql = "SELECT * FROM agenda.setor order by nome";
$objPdo = $conn->prepare($sql);



try {
    $objPdo->execute();
}catch (PDOException $e){
    echo 'fudeu';
}

$arr = array();
while ($arrPdo = $objPdo->fetch(PDO::FETCH_ASSOC)){
    $arr[] = $arrPdo;
    
}

$json = json_encode($arr);


echo $json;
