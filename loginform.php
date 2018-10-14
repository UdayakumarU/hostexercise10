<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    	<title>Log in</title>
       <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <label>LOG IN</label><br><br>
        	<form method="post" action="login.php">
        		<input id="email" type="text"  name="email" placeholder="Email" required="true">
                <br><br>
                <input id="password" type="password" name="password" placeholder="Password" required="true">
                
                <br><br>
                <button type="submit" name="login">log in</button>
             </form>
             <br>
             <a href="signup.php">Click here to SIGN UP</a>
        </div>
    </body>
</html>

<?php
 if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
 {
    $email=$_COOKIE['email'];
    $password=$_COOKIE['password'];
    echo"<script>
            document.getElementById('email').value = '$email';
            document.getElementById('password').value = '$password';
        </script>";
    }
?>