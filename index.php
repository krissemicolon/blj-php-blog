<?php

$page = $_GET["page"] ?? "home.php";

$views = [
    "Home" => "home.php",
    "Create Blog" => "createBlog.php",
    "About" => "about.php",
    "Register" => "register.php",
    "Login" => "login.php"

];

function includeView($views) {
    foreach ($views as $name => $view) {
        if ($viewName === $view) {
            include "controller/$view";

            return include "views/$view";
        }
    }
}

include "templates/app.php";
?>
