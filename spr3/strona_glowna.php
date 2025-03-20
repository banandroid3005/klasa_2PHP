<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Twój ulubiony film to <?=isset($_SESSION['zawartosc']) ? $_SESSION['zawartosc'] : "X"?></h2>
    <a href="ustaw_ciastko.php">Ustaw ciastko</a>
</body>
</html>