<?php
 session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    	<title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php
              echo "<label>WELCOME ".$_SESSION['firstname']." ".$_SESSION['lastname']."</label><br>";
            ?>
            <br>
             <a href="logout.php">LOG OUT</a>

        </div>
    </body>
</html>