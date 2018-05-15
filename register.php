<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "You are already logged in. Go to home";
    echo "<a href=''>Home</a>";
} else {
    
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <form action="doRegister.php" method="POST">
            <input type="text" name="last_name" id="last_name" placeholder="Last Name">
            <input type="text" name="first_name" id="first_name" placeholder="First Name">
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          
            <input type="number" name="mobile" id="mobile" placeholder="Mobile">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="number" name="date" id="date" placeholder="DD">
            <input type="number" name="month" id="month" placeholder="MM">
            <input type="number" name="year" id="year" placeholder="YYYY">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Register">
        </form>
    </body>
</html>
