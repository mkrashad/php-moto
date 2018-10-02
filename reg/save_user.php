<?php
    //log the username entered into the $firstname variable, if it's empty, then delete the variable
    if(isset($_POST['firstname'])) { $firstname = $_POST['firstname'];if ($firstname == ''){unset($firstname);}} 
    // log the user-entered password to $lastname, if it's empty, then delete the variable
    if (isset($_POST['lastname'])) { $lastname=$_POST['lastname']; if ($lastname =='') { unset($lastname);} }
    // log the username entered into the $login(username) variable, if it's empty, then delete the variable
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    // log the username entered into the $email variable, if it's empty, then delete the variable
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
    // log the username entered into the $password variable, if it's empty, then delete the variable
    if (isset($_POST['password'])) { $password = $_POST['password']; if ($password == '') { unset($password);} } 
    //if the user did not enter firstname,lastname,login,email or password, we issue an error and stop the script
    if (empty($firstname) || empty($lastname) and empty($login) and empty($email) and empty($password)) 
    {
exit ("<a href='../index.php'>You did not enter all the information, go back and fill in all the fields!</a>");
    }
//If login and password are entered, then we process them, so that tags and scripts do not work, it's not enough that people can enter
    $firstname = stripslashes($firstname);
    $firstname = htmlspecialchars($firstname);
    $lastname = stripslashes($lastname);
    $lastname = htmlspecialchars($lastname);
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
  //Remove extra spaces
    $firstname = trim($firstname);
    $lastname = trim($lastname);
    $login = trim($login);
    $email = trim ($email);
    $password = trim($password);
  //Connect to the database
    include ("bd.php");//The file bd.php should be in the same folder as everyone else, if it is not, then just change the path
  //Check for the existence of a user with the same login
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Sorry, This user already exists. Please login.");
    }
  //If there is no such, then we save the data
    $result2 = mysql_query ("INSERT INTO users (firstname,lastname,login,email,password)VALUES('$firstname','$lastname','$login','$email','$password')");
 //Check if there are any errors
    if ($result2=='TRUE')
    {
    echo "You have successfully registered! Now you can choose a motorcycle.<a href='../index.php'>Home page</a>";
    }
 else {
    echo "Error! You are not registered.";
    }
    ?>