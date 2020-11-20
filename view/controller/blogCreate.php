<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sbh = connectToDatabase();

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
