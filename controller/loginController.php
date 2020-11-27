<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $dbuser = 'root';
    $dbpassword = '';
    $pdo = new PDO('mysql:host=localhost;dbname=blogdb', $dbuser, $dbpassword, [
	    PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
	    PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
    ]);

    $loginstatement = $pdo->prepare("SELECT * FROM `users` WHERE `user_name` = :username and `user_password` = :password");
    $loginstatement->execute([
        ":username" => $username,
        ":password" => $password
    ]);

    $users = $loginstatement->fetchAll();
    var_dump($users);

    if (count($users) > 0) {
        echo "Angemeldet!";
    } else {
        echo "Nutzername oder Passwort falsch!";
    }
}

?>
