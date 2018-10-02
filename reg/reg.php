<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign up</title>
  <link rel="stylesheet" href="../css/reg-style.css">
</head>
    <body>
    <form class="sign-up" action="save_user.php" method="post">
    <h1 class="sign-up-title">Sign up in seconds</h1>
        <label>First name:</label><br>
        <input name="firstname" type="text" size="15" maxlength="15" class="sign-up-input" placeholder="What's your firstname?" autofocus><br>
        
        <label>Last name:</label><br>
        <input name="lastname" type="text" size="15" maxlength="15" class="sign-up-input" placeholder="What's your lastname?" autofocus><br>
        
        <label>Username:</label><br>  
        <input name="login" type="text" size="15" maxlength="15" class="sign-up-input" placeholder="Choose a username" autofocus>
    
        <label>Email:</label><br>  
        <input name="email" type="text" size="15" maxlength="30" class="sign-up-input" placeholder="Write your email?" autofocus>

        <label>Password:</label><br>       
        <input name="password" type="password" size="15" maxlength="15" class="sign-up-input" placeholder="Choose a password">
        
        <input type="submit" name="submit" value="Sign Up" class="sign-up-button">
        </form>
    </body>
    </html>