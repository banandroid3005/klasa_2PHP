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
    <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nazwa = htmlspecialchars($_POST['nazwa']);
                $zawartosc = htmlspecialchars($_POST['zawartosc']);
                $czas = intval($_POST['czas']);
                setcookie($nazwa, $zawartosc, time() + $czas, "/");
                $_SESSION['ciastko'] = $zawartosc;
                
                echo "Ciasteczko zostało ustawione";
            }
            ?>
            <form method="post">
                <label for="nazwa">Nazwa </label><br>
                <input type="text" value="favorite_movie" id="nazwa" name="nazwa" read_only required><br>
                <label for="zawartosc">Zawartość</label><br>
                <textarea name="zawartosc" id="zawartosc" value="<?=$_POST['zawartosc'] ? $_POST['zawartosc'] : ''?>" required></textarea><br>
                <label for="czas">Wygasa</label><br>
                <input type="number" id="czas" name="czas" value="<?=$_POST['czas'] ? $_POST['czas'] : "60"?>"><br>
                <input type="submit" name="zal" value="Ustaw">
            </form>
            <a href="strona_glowna.php">Strona główna</a>
</body>
</html>