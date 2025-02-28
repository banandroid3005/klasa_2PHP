<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona logowania</title>
<style>
    body{
        background-color:gainsboro;
        padding:30px
    }
</style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Strona logowania</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST")
        {
            if(isset($_POST["wyloguj"]))
            {
                $_SESSION["login_status"] = false;
                session_destroy();
            }

            if(isset($_POST["zaloguj"]))
            {
                if($_POST['login'] === 'admin' && $_POST['pass'] == 'admin' )
                {
                    echo "<p>Udane logowanie</p>";
                    $_SESSION["login_status"] = true;
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['pass'] = $_POST['pass'];
                }
                else
                {
                    echo "<p>Dane logowania są niepoprawne</p>";
                }
            }
        } 
    ?>
    <form method="post">
        <?php
        if(isset($_SESSION["login_status"]) && $_SESSION["login_status"]){
            ?>
            <p>
                Jesteś zalogowany jako <?=$_SESSION['login']?>
            </p>
        <p>
            <input type="submit" name="wyloguj" value="Wyloguj się">
        </p>      
    <?php
        }else{
            ?>
    <p>
        <label for="imie">Podaj login</label><br>
        <input type="text" name="login" id="imie">
    </p>
    <p>
        <label for="has">Podaj hasło</label><br>
        <input type="password" name="pass" id="has">
    </p>
    <p>
        <input type="submit" name="zaloguj" value="Zaloguj się">
    </p>
    </form>
    <?php
        }
        include 'stopka.php';
    ?>
</body>
</html>