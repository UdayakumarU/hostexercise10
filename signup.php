<?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "TUvu90%&";
    $mysql_database = "user";
    $connect = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysql_select_db($mysql_database) or die("Could not select database");

    if (isset($_POST['signup']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO user_account(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
        if(mysql_query($query))
            echo 'Account created successfully!';
        else   
            echo 'Error in creating Account'; 
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    	<title>Sign up</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <label>SIGN UP</label><br><br>
        	<form method="post">
        		<input type="text"  name="firstname" placeholder="First name" required="true">
                <br><br>
                <input type="text"  name="lastname" placeholder="Last name" required="true">
                <br><br>
                <input type="text"  name="email" placeholder="Email" required="true">
                <br><br>
                <input type="password" name="password" placeholder="Password" required="true">
                <br><br>
                <button type="submit" name="signup">sign up</button>
             </form>
             <br>
             <a href="loginform.php">Click here to LOG IN</a>
        </div>
    </body>
</html>