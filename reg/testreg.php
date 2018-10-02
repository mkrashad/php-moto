<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up Form</title>
</head>
<body></body>
<?php
    session_start();//The whole procedure works in sessions. It is in it that the user data is stored while it is on the site. It is very important to run them at the very beginning of the page !!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //Log the user-entered login to $ login, if it's empty, then delete the variable
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //Log the user-entered password to $ password, if it's empty, then delete the variable
if (empty($login) or empty($password)) //If the user did not enter username or password, we issue an error and stop the script
    {
    exit ('<a href="login.php" style="color:red; font-size:17px;">You did not fill in all fields,please go back and fill in all fields</a>');
    }
    //If login and password are entered, then we process them, so that tags and scripts do not work, it's not enough that people can enter
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//Remove extra spaces
    $login = trim($login);
    $password = trim($password);
//Connect to the database
    include ("bd.php");//The file bd.php should be in the same folder as everyone else, if it is not, then just change the path


$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //Extract from the database all data about the user with the entered login
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //If the user with the entered login does not exist
    exit ('<a href="login.php" style="color:red; font-size:17px;">Sorry, the login or password you entered is incorrect or login does not exist.</a>');
    }
    else {
    //If exists, check the passwords
    if ($myrow['password']==$password) {
    //If the passwords match, then start the user session! You can congratulate him, he came in!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//This data is very often used, that's what the logged-on user will carry them with
    echo '<div style="color:red; font-size:17px;"><a href="../index.php">You have successfully entered the site!Go back and choose motocycle</a></div>';
    }
    }
    ?>
    </html>