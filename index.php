<?php
session_start();

$page = $_GET["page"] ?? "home.php";

$views = [
    "Home" => "home.php",
    "Create Post" => "createPost.php",
    "About" => "about.php",
    "Register" => "register.php",
    "Login" => "login.php"
];

//include controllers
foreach (glob("controller/*.php") as $controller){
    include $controller;
}

//include views
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
