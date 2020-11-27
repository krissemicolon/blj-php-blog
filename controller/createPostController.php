<?php

$dbuser = 'root';
$dbpassword = '';
$pdo = new PDO('mysql:host=localhost;dbname=blogdb', $dbuser, $dbpassword, [
    PDO::ATTR_ERRMODE 		        => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND	=> 'SET NAMES utf8',
]);

$quPosts = $pdo->query("
SELECT u.user_name, p.post_id, p.post_title, p.post_text, p.created_at
FROM `users` AS u
INNER JOIN `posts` AS p
ON u.user_id = p.created_by
ORDER BY created_at DESC
");
$posts = $quPosts->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = htmlspecialchars($_POST['post-title']);
    $text = htmlspecialchars($_POST['post-text']);


    // Input data cleanup 
    $submittedValues = $_POST;
    foreach ($submittedValues as $index => $fieldValue) {
        $submittedValues[$index] = trim($fieldValue);
    }

    $postStatement = $pdo -> prepare(
        "INSERT INTO `posts` (`post_id`, `created_by`, `created_at`, `post_title`, `post_text`) 
        VALUES (NULL, '1', current_timestamp(), ?, ?) ");

    $postStatement->execute([
        $title, 
        $text
        ]);
}




?>
