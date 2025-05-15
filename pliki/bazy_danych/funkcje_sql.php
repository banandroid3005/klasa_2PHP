<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "pakuła";
    $password = "banan123";
    $database = "pakula";

    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "SELECT UPPER(CONCAT(pracownicy.imie,' ',pracownicy.nazwisko)) AS Pracownik FROM pracownicy WHERE 1";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <h1>Wynik</h1>
        <ul>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <li><?= $row['Pracownik'] ?></li>
        <?php
            }
        }else{
            echo "Błędne zapytanie";
        }
        ?>
        </ul>
</body>

</html>