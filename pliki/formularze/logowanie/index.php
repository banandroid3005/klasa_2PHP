<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<style>
    body{
        background: linear-gradient(45deg, #00008b, #00bfff);
        padding: 100px;
        font-family: "Merriweather", serif;
        font-weight: 400;
        font-style: normal;
        color: white;
    }
</style>
</head>
<body>
<?php include 'menu.php'; ?>
<h1>Strona głowna</h1>
<p>
    <?php 
    if(isset($_SESSION["login_status"]) != false){
        echo "Witaj ".$_SESSION['login'];
    }else{
        echo "Witaj gościu";
    }
    ?>
    </p>
<?php include 'stopka.php'; ?>


</body>
</html>