<?php
    // the whole procedure works in sessions. It is in it that the user data is stored while it is on the site. It is very important to run them at the very beginning of the page !!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="../css/reg-style.css">
</head>
<body>
    
  <form class="sign-up" action="testreg.php" method="post">
    <h1 class="sign-up-title">Log in</h1>
    <input name="login" type="text" size="15" maxlength="15" class="sign-up-input" placeholder="What's your username?" autofocus>
    <input name="password" type="password" size="15" maxlength="15" class="sign-up-input" placeholder="What's your password?">
    <input type="submit" name="submit" value="Login" class="sign-up-button">
    
    <!--**** The button (type = "submit") sends data to the page testreg.php ***** --> 
<br>
 <!-- **** link to the registration, because somehow guests should get there ***** -->
<a href="reg.php">Click for Sign Up</a> 
    </form>
</body>
</html>
