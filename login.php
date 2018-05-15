<?php
session_start();
if (isset($_SESSION['username'])) {
    
} else {
    
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        <form method="POST" action="doLogin.php">
            
            <input type="text" name="username" id="username" placeholder="Email / Mobile No."><br/>
            <input type="password" name="password" id="password" placeholder="Password"><br/>
            <input type="submit" value="submit">
        </form>
    </body>

</html>