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
    body {
    font-family: "Merriweather", serif;
    font-weight: 400;
    font-style: normal;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    text-align: center;
    margin-top: 20px;
    color: #2c3e50;
}

form {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 50%;
    min-width: 300px;
    margin-top: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

textarea {
    resize: vertical;
    min-height: 100px;
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
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

p {
    text-align: center;
    font-size: 18px;
    color: #555;
    margin-top: 20px;
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
                <input type="text" value="Ciasteczko" id="nazwa" name="nazwa" value="nazwa" read_only >
                <label for="czas">Wygasa (w sekunach)</label><br>
                <input type="number" id="czas" name="czas" value="czas" default="3600"><br>
                <label for="zawartosc">Zawartość</label><br>
                <textarea name="zawartosc" id="zawartosc" value="zawartosc" required></textarea><br>
                <input type="submit" name="zal" value="Ustaw ciasteczko">
            </form>
        <?php
       if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nazwa = htmlspecialchars($_POST['nazwa']);
        $zawartosc = htmlspecialchars($_POST['zawartosc']);
        $czas = intval($_POST['czas']);
        echo "Ciasteczko ustawione";
        $_SESSION['ciastko'] = $zawartosc;
        setcookie($nazwa, $zawartosc, time() + $czas, "/");
       } 
    }else{
            echo "Musisz byc zalogowany aby ustawić ciasteczka";
    }
    ?>
</p>
<?php include 'stopka.php'?>
</body>
</html>
