<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
<!-- Navbar -->
<div class="header">
    <nav class="navbar navbar-expand-sm navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">📋 Blog</a>
        </div>
        <ul class="nav navbar-nav">
        
        <?php foreach ($views as $name => $view): ?>
        <li><a href="?page=<?= htmlspecialchars($view); ?>"><?= htmlspecialchars($name); ?></a></li>
        <?php endforeach; ?>

        </ul>
      </div>
    </nav>
</div> 
<!-- Title -->
<?php    
    $pageTitle = rtrim(ucfirst($page), ".php");
    echo "<div class='container' style='margin-top:80px'>";
    echo "<h1>$pageTitle</h1>";
    echo "</div>";
?>
</header>
<!-- View --!>
<div class="container">
        <main>
            <?php
            // Include view
            foreach ($views as $index => $view) {
                if ($page === $view) {
                    include "views/$view";
                    break;
                }
            }
            ?>
        </main>
    </div>

</div>
</body>
</html>
