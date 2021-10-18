<?php
include "conf.php";

$opt = $_GET['opt'];

$insert = $pdo->query("INSERT INTO enquete(opt) VALUES('$opt')");

//busca no banco
$result = Array();
$select = $pdo->query("SELECT * FROM enquete");

while($s = $select->fetch(PDO::FETCH_ASSOC)){
	$result[] = $s;
}

echo json_encode($result);

?>