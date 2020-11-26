<?php
	$user = 'root';
	$password = '';
	$pdo = new PDO('mysql:host=localhost;dbname=blogdb', $user, $password, [
	    PDO::ATTR_ERRMODE 		=> PDO::ERRMODE_EXCEPTION,
	    PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
	]);

?>
