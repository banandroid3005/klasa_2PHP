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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 1080px;
            text-align: center;
        }

        h1 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 700px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            margin-left: 600px;
        }

        form:hover {
            transform: translateY(-10px);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            margin-top: 15px;
            padding: 10px;
            transition: background 0.3s ease;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1>Strona logowania</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["wyloguj"])) {
            $_SESSION["login_status"] = false;
            session_destroy();
        }

        if (isset($_POST["zaloguj"])) {
            if ($_POST['login'] === 'admin' && $_POST['pass'] == 'admin') {
                echo "<p>Udane logowanie</p>";
                $_SESSION["login_status"] = true;
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['pass'] = $_POST['pass'];
            } else {
                echo "<p>Dane logowania są niepoprawne</p>";
            }
        }
    }
    ?>
    <form method="post">
        <?php
        if (isset($_SESSION["login_status"]) && $_SESSION["login_status"]) {
        ?>
            <p>
                Jesteś zalogowany jako <?= $_SESSION['login'] ?>
            </p>
            <p>
                <input type="submit" name="wyloguj" value="Wyloguj się">
            </p>
        <?php
        } else {
        ?>
            <p>
                <label for="imie">Podaj login</label><br>
                <input type="text" name="login" id="imie">
            </p>
            <p>
                <label for="has">Podaj hasło</label><br>
                <input type="password" name="pass" id="has" required>
            </p>
            <p>
                <input type="submit" name="zaloguj" value="Zaloguj się">
            </p>
    </form>
<?php
        }
?>

</body>
<?php include 'stopka.php'; ?>

</html>