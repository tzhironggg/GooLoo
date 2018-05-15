<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>Light Central Library - Reset Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
                <?php include "navbar.php" ?>
        <div class='container'>
        <form action ="doResetPassword.php" method="post">
            <label>Username:</label><input type="name" name ="username"/><br/>
            <label>Email :</label><input type='email' name='userEmail'/><br/>
            <input type="submit" value ="Submit"/>
        </form>
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
