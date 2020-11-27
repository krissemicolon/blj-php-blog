<?php
$dbuser = 'root';
$dbpassword = '';
$pdo = new PDO('mysql:host=localhost;dbname=blogdb', $dbuser, $dbpassword, [
	PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
	PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
	
]);
?>