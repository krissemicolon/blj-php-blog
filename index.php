<?php

$page = $_GET["page"] ?? "home.php";

$views = [
    "Home" => "home.php",
    "Create Blog" => "createBlog.php",
    "About" => "about.php",
    "Register" => "register.php",
    "Login" => "login.php"

];

function includeView($views, $viewName) {
    foreach ($views as $name => $view) {
        if ($viewName === $view) {
            include "controller/$view"; 

            return include "view/$view";
        }
    }
}

/* include "template/template.php"; */
?>
