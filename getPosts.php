<?php

try{
	$user = 'root';
	$password = '';
	$pdo = new PDO('mysql:host=localhost;dbname=blogdb', $user, $password, [
	PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
	PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
	
	]);
} catch(PDOException $e) {
	die('Error! Can not connect to database: ' . $e->getMessage());
}

$query = 'SELECT * FROM posts limit 3';

$stmt = $pdo->query($query);
$rows = $stmt->fetchAll();

var_dump($posts);

foreach($rows as $row) {
	echo $row["created_by"] . ', Post: ' . $row["post_text"] . '<br>';
}

?>
