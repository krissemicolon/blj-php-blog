<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = 'root';
    $password = '';
    $pdo = new PDO('mysql:host=localhost;dbname=blogdb', $user, $password, [
	    PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
	    PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
    ]);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement = $sbh->prepare("SELECT * FROM users WHERE username = :username and password = :password");
    $statement->execute([":username" => $username]);
    $statement->execute([":password" => $password]);

    $users = $statement->fetchAll();

    if (count($users) > 0) {
        echo "Angemeldet!";
    } else {
        echo "Nutzername oder Passwort falsch!";
    }
}

?>
