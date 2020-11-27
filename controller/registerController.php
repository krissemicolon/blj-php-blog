<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['firstname']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $dbuser = 'root';
    $dbpassword = '';
    $pdo = new PDO('mysql:host=localhost;dbname=blogdb', $dbuser, $dbpassword, [
	    PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
	    PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
    ]);

    $registerStatement = $pdo->prepare("INSERT INTO `users` (`first_name`, `last_name`, `email`, `user_name`, `user_password`) VALUES(?,?,?,?,?)");
    $registerStatement->execute([
        $firstName,
        $lastName,
        $email,
        $username,
        $password
    ]);

}
?>
