<?php

$query = 'SELECT * FROM posts ORDER BY `created_at` DESC';

$statement = $pdo->query($query);
$rows = $statement->fetchAll();

?>