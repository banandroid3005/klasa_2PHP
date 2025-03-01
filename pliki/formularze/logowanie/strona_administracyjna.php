<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona administracyjna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
    body{
        padding: 30px;
        background-color:#D0B9A7;
        font-family: "Merriweather", serif;
        font-weight: 400;
        font-style: normal;
    }
    .zal{
        border:solid 3px lightgreen;
        color: green;
        width: 250px;
        padding: 5px;
    }
    .nie{
        border: solid 3px red;
        color: darkred;
        width: 190px;
        padding: 5px;
    }
</style>
</head>
<body>
<?php include 'menu.php'; ?>
<h1>Panel administracyjny</h1>
<p class="<?=isset($_SESSION['login']) ? 'zal' : 'nie'?>">Status: <?php echo isset($_SESSION['login']) ? "Zalogowany jako " . $_SESSION['login'] : "Niezalogowany"; ?></p>
<?php include 'stopka.php'; ?>

</body>
</html>
