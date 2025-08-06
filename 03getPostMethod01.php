<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get And Post Methods</title>
</head>
<body>
    <h1>Understanding GET & POST Method Part01</h1>
    <form action="03getPostMethod01.php" method="get">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>

<?php

echo "{$_GET["username"]} <br>"; //get will only take the name
echo "{$_GET["password"]} <br>"; //get will only take the name

?>