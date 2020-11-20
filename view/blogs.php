<?php
$currentSite = 'Blogs';
include 'controller/blogCreate.php'
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>
<header>
    <?php include 'navbar.php'?>
    <?php include 'title.php'?>
</header>

<?php
  
    if(isset($_POST['button1'])) { 
        echo "This is Button1 that is selected"; 
    } 
    if(isset($_POST['button2'])) { 
        echo "This is Button2 that is selected"; 
    } 
?> 
      
<button class="btn btn-success" action="controller/blogCreate.php">Create Blog</button>

</div>
</body>
</html>
