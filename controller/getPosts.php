<?php

$query = 'SELECT * FROM posts';

$statement = $pdo->query($query);
$rows = $statement->fetchAll();

?>