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
        font-family: "Merriweather", serif;
        font-weight: 400;
        font-style: normal;
    }
    label{
        padding: 30px;
    }
    input{
        margin-left: 20px;
    }
</style>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    <h1>Panel administracyjny</h1>
<p>
    <?php
        if(isset($_SESSION['login'])){
            ?>
            <form  method="post">
                <label for="nazwa">Nazwa ciasteczka</label>
                <label for="czas">Wygasa (w sekunach)</label>
                <label for="zawartosc">Zawartość</label><br>
                <input type="text" value="Ciasteczko" id="nazwa" name="nazwa" value="n" read_only disabled>
                <input type="number" id="czas" name="czas" value="c" default="3600">
                <textarea name="zawartosc" id="zawartosc" value="z" required></textarea><br>
                <input type="submit" name="zal" value="Ustaw ciasteczko">
            </form>
        <?php
       if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "Ciasteczko ustawione";
        $_SESSION['ciastko'] = 'coś';
        setcookie($_POST['nazwa'],$_POST['zawartosc'],time() + $_POST['czas']);
       } 
    }else{
            echo "Musisz byc zalogowany aby ustawić ciasteczka";
        }
    ?>
</p>
<?php include 'stopka.php'?>
</body>
</html>
