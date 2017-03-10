<?php 

$database_name = 'eshop';
$user = 'Edward';
$password = 'gP59FcV';

$pdo = new PDO($database_name, $user, $password);

$query = $pdo->prepare("
  	SELECT `delivery`.*
	FROM `delivery`
	WHERE `delivery`.`id` = ?;
");
// $query is now a PDOStatement object.

$result = $query->execute($query, 81);
return -> $result;