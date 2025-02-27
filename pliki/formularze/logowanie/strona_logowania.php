<!--
<?php/*
session_start();
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona logowania</title>
</head>
<body>
    <h1>Strona Logowania</h1>
    <?php
        if($_SESSION['czy'] == false){
    ?>
    <form method="post">
    <p>
        <label for="imie">Podaj login</label><br>
        <input type="text" name="imie" id="imie">
    </p>
    <p>
        <label for="has">Podaj hasło</label><br>
        <input type="password" name="has" id="has">
    </p>
    <p>
        <input type="submit" name="zaloguj" value="Zaloguj się">
    </p>
    </form>
    <?php
        }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST['imie'] == $_SESSION['im'] && $_POST['has'] == $_SESSION['has']){
            echo "Zalogowałeś się!";
            $_SESSION['im'] = $_POST['imie'];
            $_SESSION['czy'] = true;
            $_SESSION['zledane'] = true;
        }else{
            echo "Złe dane";
            $_SESSION['zledane'] = false;
            $_SESSION['im'] = null;
        }
    }
    if($_SESSION['czy'] == true && $_SESSION['zledane'] == true){
    ?>
    <p>
        Jesteś zalogowany
    </p>
    <p>
        <input type="submit" name="wyloguj" value="Wyloguj się">
    </p>
    <?php
    }
    */
    ?>
</body>
</html>
-->