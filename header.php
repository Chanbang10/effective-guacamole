<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en" dir="ltr">
<meta charset="utf-8">
<head>
<title>Welcome To The Fantasy</title>
<link rel ="stylesheet" href= "css/reset.css">
<link rel ="stylesheet" href= "css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"></a>
        <ul>
            <li><a href="index.php">Welcome</a></li>
           <?php
          if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile page</a></li>";
              echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else {
                echo "<li><a href= 'signup.php'>Register</a></li>";
                echo "<li><a href='login.php'>Login</a></li>";
          }
          ?>
            
</ul>
        </div>
</nav>

<div class="wrapper">