<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/demo.php" method="POST">
<label for="firstname">First name:</label><br>
<input type="text" id="firstname" name="firstname" value="John"><br>
<label for="lastname">Last name:</label><br>
<input type="text" id="lastname" name="lastname" value="Doe"><br><br>
<input type="submit" value="Submit">
</form>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // Startup code goes here
?>
</body>
</html>