<?php
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "TUvu90%&";
    $mysql_database = "user";
    $connect = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysql_select_db($mysql_database) or die("Could not select database");

    if (isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select * from user_account where email='$email' and password = '$password'";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        if($row[0]>0)
        {
            if(isset($_POST['remember']))
            {
                //set cookie for 10days
                setcookie('email',$email,time()+60*60*24*10);
                setcookie('password',$password,time()+60*60*24*10);
            }
            //session start
            session_start();
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            header("location: home.php"); 

        }
        else
        {
            
             echo 'USER NOT EXIST<br> click here to <a href="loginform.php"> Try again </a>';
        }
    }
 ?>
