<?php
$currentSite = 'Login';

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>
<header>
    <?php include 'navbar.php'?>
    <?php include 'title.php'?>
</header>

<form action="../controller/loginController.php">

<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>

    <button type="submit">Login</button>
    <br>
  </div>

</form>

</body>
</html>
